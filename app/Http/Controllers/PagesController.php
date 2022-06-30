<?php

namespace App\Http\Controllers;

use App\Collaborateur;
use App\Contact;
use App\Faq;
use App\Projet;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    public function showhomePage() {
        $oldcontact = Contact::find(1);
        $allservices = Service::all();
        $allcollaborateurs = Collaborateur::all();
        $allfaqs = Faq::all();

        return view('pages/home',compact('oldcontact','allservices','allfaqs','allcollaborateurs'));
    }
    public function showaboutPage() {
        // Contact::create([
        //     'email' => 'igorballo68@gmail.com',
        //     'phone_number' => '+228 96 69 09 81',
        //     'siege' => 'Agoè Logopé, Lomé-Togo',
        //     'lien_facebook' => 'facebook.com',
        //     'lien_youtube' => 'youtube.com',
        //     'description' => 'La plus grande entreprise',
        //     'logo' => 'cin.jpg',
    
        // ]);

        $oldcontact = Contact::find(1);
        $allfaqs = Faq::all();

        return view('pages/about',compact('oldcontact','allfaqs'));
    }
    public function showteamPage() {
        $oldcontact = Contact::find(1);
        $allcollaborateurs = Collaborateur::all();

        return view('pages/team',compact('oldcontact','allcollaborateurs'));
    }
    public function showsinglePage() {
        $oldcontact = Contact::find(1);

        return view('pages/single',compact('oldcontact'));
    }
    public function showblogPage() {
        $oldcontact = Contact::find(1);

        return view('pages/blog',compact('oldcontact'));
    }
    public function showcontactPage() {
        $oldcontact = Contact::find(1);

        return view('pages/contact',compact('oldcontact'));
    }
    public function showportfolioPage() {
        $oldcontact = Contact::find(1);
        $projets = Projet::all();

        return view('pages/portfolio',compact('oldcontact','projets'));
    }
    public function showservicePage() {
        $oldcontact = Contact::find(1);
        $allfaqs = Faq::all();
        $allservices = Service::all();

        return view('pages/service',compact('oldcontact','allservices','allfaqs'));
    }

}
