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

        $tendances = DB::table('services')
        ->join('service_entreprises', 'services.id', '=', 'service_entreprises.service_id')
        ->join('entreprises', 'service_entreprises.entreprise_id', '=', 'entreprises.id')
        ->select('services.*')
        ->distinct()
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('service_entreprises as se')
                  ->whereRaw('se.service_id = services.id')
                  ->whereRaw('se.entreprise_id = entreprises.id');
        })->paginate(8);


        return view('index', compact('categories', 'tendances', 'categories_min'));
    }

    public function services()
    {
        $categories = Departement::get();
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
        $keyword = $request->input('keyword');

        $query = DB::table('services');

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



}
