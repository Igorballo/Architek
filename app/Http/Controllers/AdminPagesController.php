<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPagesController extends Controller
{
   public function showloginPage() {

     return view('auth/login');
   }

   public function showdashboardPage() {
     $alladmins = User::all();
     $user = Auth::user();

      Alert::success('Success Title', 'Success Message');

     return view('admin/dashboard',compact('alladmins','user'));
   }

   public function showdcontactPage() {
     $user = Auth::user();
     $oldcontact = Contact::find(1);
   
     return view('admin/contact',compact('oldcontact','user'));
   }

   public function showdinfosPage() {
     $user = Auth::user();
     $oldcontact = Contact::find(1);

    return view('admin/infos',compact('oldcontact','user'));
    }

    public function showdadminPage() {
     $user = Auth::user();

     return view('admin/administrateur',compact('user'));
    }

    public function showfaqPage() {
     $user = Auth::user();

     return view('admin/faq',compact('user'));
    }

    public function showservicePage() {
     $user = Auth::user();
     $allservices = Service::all();

     return view('admin/service',compact('user','allservices'));
    }

    public function showcollaborateurPage() {
     $user = Auth::user();

     return view('admin/collaborateur',compact('user'));
    }

    public function showprojetPage() {
     $user = Auth::user();
    
     return view('admin/projet',compact('user'));
    }
}
