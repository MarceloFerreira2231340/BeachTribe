<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Class_;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Sport;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $path = "img/Marcelo/eventosMarcelo/";
        return view('index', compact('events', 'path'));
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
        return view('eventos');
    }

    public function admindashboard() {
        $count_classes = Class_::count();
        $count_contacts = Contact::count();
        $count_events = Event::count();
        $count_sports = Sport::count();
        $count_users = User::count();


        //$count_classes_per_sport = Sport::withCount('classes')->get();

        return view('_admin.dashboard', compact('count_classes', 'count_contacts', 'count_events', 'count_sports', 'count_users'/*, 'count_classes_per_sport'*/));
    }
}


