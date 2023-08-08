<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Departement;
use App\Models\Secteur;
use Illuminate\Http\Request;

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
        $services = Service::paginate(8);
        return view('services' , compact('categories', 'services'));
    }

    public function serviceShow($slug)
    {
        $serviceDetail = Service::where('libelle', $slug)->firstOrFail();
        $categories = Departement::get();
        return view('services_details', compact('categories', 'serviceDetail'));
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





}
