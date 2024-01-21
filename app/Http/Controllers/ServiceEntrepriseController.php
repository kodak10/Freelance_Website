<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Service;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\ServiceEntreprise;
use Illuminate\Support\Facades\Auth;

class ServiceEntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = ServiceEntreprise::where('entreprise_id', Auth::user()->compagny->id)->paginate(5);
        $departements = Departement::get();
        $service = Service::get();
        $Counter = 1;
        return view('Entreprise.Service.index', compact('services', 'departements', 'Counter', 'service'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $services = Service::get();
        $services = Service::get();
        return view('Entreprise.Service.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $check = array(
    //         'service' => 'required',
    //         'libelle' => 'required',
    //         'description' => 'required',
    //         'delais' => 'required',
    //         'entreprise' => 'required',
    //         'images*' => 'image|mimes:jpeg,png,gif,webp,jpg|max:2048'


    //     );
    //     $request->validate($check);


    //     $data = array(
    //         'entreprise_id' => $request->entreprise,
    //         'service_id' => $request->service,
    //         'description' => $request->description,
    //         'libelle' => $request->libelle,
    //         'delais_execution' => $request->delais,
    //         'created_at' => now(),

    //     );

    //     if (ServiceEntreprise::insert($data)) {

    //         $serviceEntreprise = new ServiceEntreprise();
    //         $serviceEntreprise->entreprise_id = $request->entreprise;
    //         $serviceEntreprise->service_id = $request->service;
    //         $serviceEntreprise->description = $request->description;
    //         $serviceEntreprise->libelle = $request->libelle;
    //         $serviceEntreprise->delais_execution = $request->delais;
    //         $serviceEntreprise->created_at = now();
    //        // $serviceEntreprise->save();



    //         $serviceEntrepriseId = $serviceEntreprise->id;

    //         // if ($request->hasFile('images')) {
    //         //     $images = $request->file('images');

    //         //     foreach ($images as $image) {
    //         //         // Générez un nom de fichier unique pour chaque image
    //         //         $imageName = 'image_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();

    //         //         // Stockez chaque image dans le répertoire spécifié
    //         //         //$imagePath = $image->storeAs('assets/images/portofolio', $imageName);
    //         //         $imagePath->move(public_path('assets/images/profil'), $imageName);


    //         //         // Créez un nouvel enregistrement dans la table "images" pour chaque image
    //         //         $newImage = new Image();
    //         //         $newImage->file_name = $imageName;
    //         //         $newImage->file_path = $imagePath;
    //         //         $newImage->service_entreprise_id = $serviceEntrepriseId; // Remplacez par l'ID du service
    //         //         $newImage->save();
    //         //     }
    //         // }

    //         if ($request->hasFile('images')) {
    //             $images = $request->file('images');
            
    //             foreach ($images as $image) {
    //                 // Générez un nom de fichier unique pour chaque image
    //                 $imageName = 'image_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();
            
    //                 // Stockez chaque image dans le répertoire spécifié
    //                 $image->move(public_path('assets/images/profil'), $imageName);
            
    //                 // Créez un nouvel enregistrement dans la table "images" pour chaque image
    //                 $newImage = new Image();
    //                 $newImage->file_name = $imageName;
    //                 $newImage->file_path = 'assets/images/profil/' . $imageName; // Utilisez le bon chemin
    //                 $newImage->service_entreprise_id = $serviceEntrepriseId;
    //                 $newImage->save();
    //             }
    //         }
            

    //         return redirect('/compagny/service/create')->with('added', 'added');
    //     } else {
    //         return redirect('/compagny/service')->with('nothing', 'nothing');
    //     };


    // }

    public function store(Request $request)
{
    $check = array(
        'service' => 'required',
        'libelle' => 'required',
        'description' => 'required',
        'delais' => 'required',
        'entreprise' => 'required',
        'images*' => 'image|mimes:jpeg,png,gif,webp,jpg|max:2048'
    );

    $request->validate($check);

    $serviceEntreprise = new ServiceEntreprise();
    $serviceEntreprise->entreprise_id = $request->entreprise;
    $serviceEntreprise->service_id = $request->service;
    $serviceEntreprise->description = $request->description;
    $serviceEntreprise->libelle = $request->libelle;
    $serviceEntreprise->delais_execution = $request->delais;
    $serviceEntreprise->created_at = now();
    $serviceEntreprise->save();

    $serviceEntrepriseId = $serviceEntreprise->id;

    if ($request->hasFile('images')) {
        $images = $request->file('images');
    
        foreach ($images as $image) {
            // Générez un nom de fichier unique pour chaque image
            $imageName = 'image_' . now()->format('Ymd_His') . '.' . $image->getClientOriginalExtension();
    
            // Stockez chaque image dans le répertoire spécifié
            $image->move(public_path('assets/images/portfolio'), $imageName);
    
            // Créez un nouvel enregistrement dans la table "images" pour chaque image
            $newImage = new Image();
            $newImage->file_name = $imageName;
            $newImage->file_path = 'assets/images/portfolio/' . $imageName; // Utilisez le bon chemin
            $newImage->service_entreprise_id = $serviceEntrepriseId;
            $newImage->save();
        }
    }
    

    return redirect('/compagny/service/create')->with('added', 'added');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = ServiceEntreprise::where('id', $id)->firstOrFail();
        $service = Service::where('id', $services->service->id)->firstOrFail();
        $service_full = Service::get();
        $images = Image::where('service_entreprise_id', $id)->get();
        $departements = Departement::orderBy('libelle', 'asc')->get();
        return view('Entreprise.Service.edit', compact('services', 'departements', 'service', 'service_full', 'images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services = ServiceEntreprise::where('id', $id)->firstOrFail();


        $check = array(
            'service' => 'required',
            'libelle' => 'required',
            'description' => 'required',
            'delais' => 'required',
            'entreprise' => 'required',

        );

        $request->validate($check);
        $data = array(
            'entreprise_id' => $request->entreprise,
            'service_id' => $request->service,
            'description' => $request->description,
            'libelle' => $request->libelle,
            'delais_execution' => $request->delais,

        );

        if ($request->hasFile('images')) {
            $images = $request->file('images');
        
            $counter = 1; // Initialiser le compteur

            foreach ($images as $image) {
                // Générez un nom de fichier unique pour chaque image avec incrémentation
                $imageName = 'image_' . now()->format('Ymd_His') . '_' . $counter . '.' . $image->getClientOriginalExtension();

                // Stockez chaque image dans le répertoire spécifié
                $image->move(public_path('assets/images/portfolio'), $imageName);

                // Créez un nouvel enregistrement dans la table "images" pour chaque image
                $newImage = new Image();
                $newImage->file_name = $imageName;
                $newImage->file_path = 'assets/images/portfolio/' . $imageName; // Utilisez le bon chemin
                $newImage->service_entreprise_id = $services->id;
                $newImage->save();

                // Incrémentez le compteur
                $counter++;
            }

        }


        if ($services->update($data)) {
            return redirect('/compagny/service')->with('updated', 'updated');
        } else {
            return redirect('/compagny/service')->with('nothing', 'nothing');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = ServiceEntreprise::where('id', $id)->firstOrFail();
        if ($info->delete()) {
            return redirect('/compagny/service')->with('deleted', 'deleted');
        } else {
            return redirect('/compagny/service')->with('nothing', 'nothing');
        };
    }

    public function destroy_image(string $id){
        $image = Image::where('id', $id)->firstOrFail();

        if ($image->delete()) {
            return redirect()->back()->with('deleted', 'deleted');
        } else {
            return redirect()->back()->with('nothing', 'deleted');
        }
    }
}
