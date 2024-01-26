<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ImageBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('Administration.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administration.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Récupérez l'ID de l'utilisateur authentifié
        $user = Auth::user()->id;
    
        // Validation des champs
        $validator = Validator::make($request->all(), [
            'status' => ['required', 'string', 'max:255'],
            'libelle' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'couverture' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Exemple de validation pour la couverture (image)
            'images.*' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Exemple de validation pour chaque image (image)
        ], [
            'libelle.required' => 'Le libellé est requis.',
            'description.required' => 'Le champ description est requis.',
            'couverture.image' => 'Le fichier doit être une image.',
            'couverture.mimes' => 'Le fichier doit être de type :jpeg, :png, :jpg, :gif.',
            'couverture.max' => 'La taille du fichier ne doit pas dépasser 2 Mo.',
            'images.*.image' => 'Chaque fichier doit être une image.',
            'images.*.mimes' => 'Chaque fichier doit être de type :jpeg, :png, :jpg, :gif.',
            'images.*.max' => 'La taille de chaque fichier ne doit pas dépasser 2 Mo.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Création d'un nouveau blog
        $blog = new Blog();
    
        // Traitement de la couverture du blog
        if ($request->hasFile('couverture')) {
            $couverture = $request->file('couverture');
            $imageName = 'couverture_' . now()->format('Ymd_His') . '.' . $couverture->getClientOriginalExtension();
            $couverture->move(public_path('assets/images/blog/couverture'), $imageName);
            $blog->image_path = $imageName;
        }
    
        // Assignation des autres attributs du blog
        $blog->user_id = $user;
        $blog->libelle = $request->input('libelle');
        $blog->description = $request->input('description');
        $blog->status = $request->input('status', 'active'); // Par défaut, active
    
        $blog->save();
    
        // Récupérez l'ID du blog nouvellement créé
        $blogId = $blog->id;
    
        // Traitement des images associées au blog
        if ($request->hasFile('images')) {
            $counter = 1;
            $images = $request->file('images');
            
            foreach ($images as $image) {
                $imageName = 'image_' . now()->format('Ymd_His') . '_' . $counter . '.' . $image->getClientOriginalExtension();
                
                $image->move(public_path('assets/images/blog/'), $imageName);
                
                $newImage = new ImageBlog();
                $newImage->file_path = 'assets/images/blog/' . $imageName;
                $newImage->blog_id = $blogId;
                $newImage->save();
        
                $counter++;
            }
        }
        
    
        return redirect()->back()->with('success', 'Le blog a été ajouté avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blog::where('id', $id)->firstOrFail();
        $images = ImageBlog::where('blog_id', $id)->get();

        return view('Administration.blog.edit', compact('blogs', 'images'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $blog = Blog::findOrFail($id);

    $request->validate([
        'libelle' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'couverture' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        'images.*' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    ]);

    $data = [
        'libelle' => $request->libelle,
        'description' => $request->description,
    ];

    // Traitement de la couverture du blog
    if ($request->hasFile('couverture')) {
        $couverture = $request->file('couverture');
        $imageName = 'couverture_' . now()->format('Ymd_His') . '.' . $couverture->getClientOriginalExtension();
        $couverture->move(public_path('assets/images/blog/couverture'), $imageName);
        $data['image_path'] = $imageName;
    }

    if ($request->hasFile('images')) {
        $images = $request->file('images');
    
        $counter = 1;

        foreach ($images as $image) {
            $imageName = 'image_' . now()->format('Ymd_His') . '_' . $counter . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('assets/images/blog'), $imageName);

            $newImage = new ImageBlog();
            $newImage->file_path = 'assets/images/blog/' . $imageName;
            $newImage->blog_id = $blog->id; // Utilisez le bon ID du blog
            $newImage->save();

            $counter++;
        }
    }

    if ($blog->update($data)) {
        return redirect()->back()->with('updated', 'updated');
    } else {
        return redirect()->back()->with('nothing', 'nothing');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    try {
        DB::beginTransaction();

        $blog = Blog::findOrFail($id);

        // Récupérer toutes les images associées au blog
        $images = $blog->images;

        // Supprimer les images physiquement du stockage (facultatif, si vous le souhaitez)
        foreach ($images as $image) {
            Storage::delete($image->file_path); // Assurez-vous d'avoir l'utilisation de Storage à votre début de fichier
        }

        // Supprimer toutes les images de la base de données
        $blog->images()->delete();

        // Supprimer le blog
        $blog->delete();

        DB::commit();

        return redirect('/administration/blogs')->with('deleted', 'deleted');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect('/administration/blogs')->with('nothing', 'nothing')->with('error', 'Error deleting blog: ' . $e->getMessage());
    }
}



    public function destroy_image(string $id){
        $image = ImageBlog::where('id', $id)->firstOrFail();

        if ($image->delete()) {
            return redirect()->back()->with('deleted', 'deleted');
        } else {
            return redirect()->back()->with('nothing', 'deleted');
        }
    }
}
