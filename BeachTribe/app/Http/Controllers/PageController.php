<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Class_;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Sport;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $products = Product::all();
        $path_events = "img/Dinis/eventos/";
        $path_products = "img/Dinis/produtos/";
        return view('index', compact('events', 'products', 'path_events', 'path_products'));
    }
    public function calendarioDeAulas()
    {
        return view('CalendarioDeAulas');
    }
    public function contactos()
    {
        return view('contactos');
    }
    public function surf()
    {
        return view('surf');
    }
    public function eventos()
    {
        $events = Event::all();
        return view('eventos', compact('events'));
    }

    public function modalidades()
    {
        $sports = Sport::all();
        return view('modalidades', compact('sports'));
    }


    public function admindashboard() {
        $count_classes = Class_::count();
        $count_contacts = Contact::count();
        $count_events = Event::count();
        $count_sports = Sport::count();
        $count_users = User::count();
        $count_products = Product::count();


        //$count_classes_per_sport = Sport::withCount('classes')->get();

        return view('_admin.dashboard', compact('count_classes', 'count_contacts', 'count_events', 'count_sports', 'count_users', 'count_products'/*, 'count_classes_per_sport'*/));
    }
}


