<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Departement;
use App\Models\ServiceEntreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
    {
        $categories = Departement::get();

        $categories_min = Departement::paginate(4);
        $tendances = Service::paginate(8);

        return view('index', compact('categories', 'tendances', 'categories_min'));
    }

    public function services()
    {
        $categories = Departement::get();
        //$services = Service::paginate(8);
        $services = DB::table('services')
        ->join('service_entreprises', 'services.id', '=', 'service_entreprises.service_id')
        ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        ->select('services.*')
        ->distinct()
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('service_entreprises as se')
                  ->whereRaw('se.service_id = services.id')
                  ->whereRaw('se.entreprise_id = entreprises.id');
        })
        ->paginate(8);
        return view('services' , compact('categories', 'services'));
    }

    public function showEntrepriseService(string $slug)
    {

        //$serviceEntreprises = ServiceEntreprise::where('service_id', $slug)->get();

        //$services = Service::where('id', $id)->firstOrFail();

         $serviceEntreprises = DB::table('service_entreprises')
            ->join('services', 'service_entreprises.service_id', '=', 'services.id')
            ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
            ->where('service_id', $slug)
            ->select('*')
            ->get();


        $categories = Departement::get();
        return view('show_entreprise_service', compact('serviceEntreprises', 'categories'));
    }

    public function serviceShow($entreprise_id)
    {
        $serviceDetails = DB::table('service_entreprises')
        ->join('services', 'service_entreprises.service_id', '=', 'services.id')
        ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        ->where('entreprise_id', $entreprise_id)
        ->select('service_entreprises.service_id',
        'service_entreprises.entreprise_id',

        'entreprises.id as entreprise_id',
        'services.id as services_id',

        'service_entreprises.libelle as se_libelle',
        'service_entreprises.description as se_description',
        'service_entreprises.delais_execution as delais_execution',
        'service_entreprises.image as se_image',
        'services.libelle as service_libelle',
        'entreprises.name as entreprise_name',
        'entreprises.type_entreprise as type_entreprise',
        'entreprises.localisation as localisation',
        'services.libelle as service_libelle',


        )
        ->first();

        //$serviceDetails = ServiceEntreprise::where('entreprise_id', $entreprise_id)->firstOrFail();
        $categories = Departement::get();
        return view('services_details', compact('serviceDetails', 'categories'));
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
        $searchQuery = $request->input('search');

        $query = Service::query();

        if ($category) {
            $query->where('category', $category);
        }

        if ($searchQuery) {
            $query->where('libelle', 'like', '%' . $searchQuery . '%');
        }

        $services = $query->get();

        return view('services_search', compact('services', 'category', 'searchQuery', 'categories'));
    }


    public function verif()
    {
        $categories = Departement::get();
        return view('verify', compact('categories'));
    }



}
