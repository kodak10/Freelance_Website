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


    public function index()
    {
        $categories = Departement::paginate(4);
        $tendances = Service::paginate(8);
        return view('index', compact('categories', 'tendances'));
    }

    public function services()
    {
        $categories = Departement::paginate(6);
        $services = Service::paginate(8);
        return view('services', ['services' => $services] , compact('categories'));
    }

    public function services_detail()
    {
        $categories = Departement::paginate(6);
        return view('services-details', compact('categories'));
    }

    public function about()
    {
        $categories = Departement::paginate(6);
        return view('about', compact('categories'));
    }

    public function contact()
    {
        $categories = Departement::paginate(6);
        return view('contact', compact('categories'));
    }

    public function login()
    {
        $categories = Departement::paginate(6);
        return view('login', compact('categories'));
    }

    public function register()
    {
        $categories = Departement::paginate(6);
        return view('register', compact('categories'));
    }

    public function blog()
    {
        $categories = Departement::paginate(6);
        return view('blog', compact('categories'));
    }






}
