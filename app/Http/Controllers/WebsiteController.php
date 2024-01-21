<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use App\Models\Entreprise;
use App\Models\Image;
use App\Models\Service;
use App\Models\ServiceEntreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
    {
        $categories = Departement::get();
        $categories_smalls = Departement::take(10)->get();
        $entreprises = Entreprise::take(8)->get();
        $services = Service::take(8)->get();
        
        return view('index', compact('entreprises', 'categories', 'categories_smalls', 'services'));
    }

    public function services()
    {
        $categories = Departement::get();
        $services = Service::has('entreprises')->paginate(8);

        return view('services' , compact('categories', 'services'));
    }

    public function showEntrepriseService(Service $service)
    {

        $entreprises = $service->entreprises()->paginate(10);
        //$entreprises = $service->entreprises;

        //  $serviceEntreprises = DB::table('service_entreprises')
        //     ->join('services', 'service_entreprises.service_id', '=', 'services.id')
        //     ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        //     ->where('services.libelle', $slug)
        //     ->where('entreprises.approve', '=' , '1')
        //     ->select('*')
        //     ->paginate(10);


        $categories = Departement::get();
        return view('show_entreprises_services', compact('entreprises', 'categories', 'service'));
    }

    public function serviceShow($serviceId, $entrepriseId)
    {


        $images = DB::table('images_service_entreprises')
        ->join('service_entreprises', 'images_service_entreprises.service_entreprise_id', '=', 'service_entreprises.id')
        ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        ->where('service_entreprises.entreprise_id', $entrepriseId )
        ->where('service_entreprises.service_id', $serviceId )
        ->get();

        $serviceDetails = ServiceEntreprise::query()
        ->join('services', 'service_entreprises.service_id', '=', 'services.id')
        ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        ->select(
            // Service entreprise
            'service_entreprises.delais_execution as delais_execution',
            'service_entreprises.description as descript ',
            // Service
            'services.id as service_id', 
            'services.libelle as libelle',
            // Entreprises
            'entreprises.id as entreprise_id',
            'entreprises.name as name',
            'entreprises.type_entreprise as type_entreprise',
            'entreprises.nationalite as nationalite',
            'entreprises.telephone as telephone',
            'entreprises.email as email',
            'entreprises.localisation as localisation',
            'entreprises.photo as photo',
            'entreprises.couverture as couverture',
            'entreprises.site_web as site_web',
            'entreprises.facebook as facebook',
            'entreprises.about as about',
            )
        ->where('services.id', $serviceId)
        ->where('entreprises.id', $entrepriseId)
        ->first();

        $categories = Departement::get();
        return view('show_services_details', compact('serviceDetails', 'categories', 'images'));
    }

    public function about()
    {
        $categories = Departement::get();
        return view('about', compact('categories'));
    }

    public function contact()
    {
        $categories = Departement::get();
        return view('contact', compact('categories'));
    }

    public function login()
    {
        $categories = Departement::get();
        return view('login', compact('categories'));
    }

    public function register()
    {
        $categories = Departement::get();
        return view('register', compact('categories'));
    }

    public function blog()
    {
        $categories = Departement::get();
        return view('blog', compact('categories'));
    }

    public function departements()
    {
        $categories = Departement::get();
        return view('departements', compact('categories'));
    }


    public function search(Request $request)
    {

        $categories = Departement::get();

        $category = $request->input('category');
        $keyword = $request->input('keyword');

        // $query = DB::table('services');
        $query = Service::has('entreprises');
        //$services = Service::has('entreprises')->paginate(8);


        if (!empty($category)) {
            $query->where('departement_id', $category);
        }

        if (!empty($keyword)) {
            $query->where('libelle', 'like', '%' . $keyword . '%');
        }

        $services = $query->paginate(8);


        return view('services', compact('services', 'category', 'categories'));
    }


    public function verif()
    {
        $categories = Departement::get();
        return view('verify', compact('categories'));
    }

    public function forget_password(){

        $categories = Departement::get();
        return view('Password.reset-password', compact('categories'));

    }

    public function validation(){
        $categories = Departement::get();
        return view('Password.valid-email', compact('categories'));
    }

    public function entreprise_service_index()
    {
        $categories = Departement::get();
        $entreprises = Entreprise::paginate(8);
        return view('entreprise', compact('categories', 'entreprises'));

    }
    public function entreprise_service($id){
        $categories = Departement::get();
        $entreprises = Entreprise::with('services')->find($id);
        $services = $entreprises->services()->paginate(8);
        return view('service_entreprises', compact('categories', 'entreprises', 'services'));
    }

}
