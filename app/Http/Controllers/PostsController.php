<?php

namespace App\Http\Controllers;

use App\Collaborateur;
use App\Contact;
use App\Faq;
use App\Projet;
use App\Service;
use App\User;
use Intervention\Image\Facades\Image ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function Pushcontacts(Request $request) {
        $oldcontact = Contact::find(1); 
        
        // Contact::create([
        //     'email' => 'igorballo8@gmail.com',
        //     'phone_number' => '+228 96 69 09 81',
        //     'lien_facebook' => 'facebook.com',
        //     'lien_youtube' => 'youtube.com',
        //     'siege' => 'Agoè-Logpé, Lomé-TOGO',
        //     'description' => "La plus grande entreprise d'architecture au togo",
        //     'logo' => 'CIN.jpeg',
        // ]);
        $request->validate([
            'email' => ['required','string', 'email', 'max:255'],
            'phone_number' => ['required', 'string'],
            'lien_facebook' => ['required', 'string', 'max:255'],
            'lien_youtube' => ['required', 'string', 'max:255'],
        ]);       
            
        $oldcontact->update([
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'lien_facebook' => $request->lien_facebook,
            'lien_youtube' => $request->lien_youtube,
            'siege' => $oldcontact->siege,
            'description' => $oldcontact->description,
            'logo' => $oldcontact->logo,
            ]);
            
        return redirect('/dashboard');
    }

    public function Pushinfos(Request $request) {
        $olddata = Contact::find(1);

        $request->validate([
            'logo' => ['required', 'image','mimes:jpg,png,jpeg,gif,svg',],
            'siege' => ['required','string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

            $filename = $request->logo->getClientOriginalName();
            $request->logo->storeAs('public/Image/Logo', $filename);

            $olddata->update([
            'email' => $olddata->email,
            'phone_number' => $olddata->phone_number,
            'lien_facebook' => $request->lien_facebook,
            'lien_youtube' => $request->lien_youtube,
            'siege' => $request->siege,
            'description' => $request->description,
            'logo' => $filename,
            ]);
            
        return redirect('admin/dashboard');
    }

    public function Pushservices(Request $request) {

        $allservice = Service::find(1);

        $request->validate([
            'titre' => ['required','string','max:255'],
            'description' => ['required','string'],
            'service_photo' => ['required','image','mimes:jpg,png,jpeg,gif,svg'] 
        ]);
        $filename = time().$request->service_photo->getClientOriginalName();
        $request->service_photo->storeAs('public/image/service_photo', $filename);

        Service::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'service_photo' => $filename
        ]);

        return redirect('/dashboard');
    }

    public function Pushfaqs(Request $request) {

        $request->validate([
            'question' => ['required','string','max:255'],
            'reponse' => ['required','string',],
        ]);

        Faq::create([
            'question' => $request->question ,
            'reponse' => $request->reponse ,
        ]);

        return redirect('/dashboard');
    }

    public function Pushcollaborateurs(Request $request) {
        
        $request->validate([
            'nom' => ['required','string','max:255'],
            'competence' => ['required','string','max:255'],
            'lien_twitter' => ['required','string','max:255'],
            'lien_linkedin' => ['required','string','max:255'],
            'photo_collaborateur' => ['required','image','mimes:jpg,png,jpeg,gif,svg'],
        ]);
            $filename = time().$request->photo_collaborateur->getClientOriginalName();
                    
            $request->photo_collaborateur->storeAs('public/image/collaborateurs',$filename);

            // $image = $request->photo_collaborateur ;
            // $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(75,90);
            // $image_resize->save($filename);
            
            Collaborateur::create([
                'nom' => $request->nom,
                'competence' => $request->competence,
                'lien_twitter' => $request->lien_twitter,
                'lien_linkedin' => $request->lien_linkedin,
                'photo_collaborateur' => $filename,
            ]);

            return redirect('/dashboard');
    }

    public function Createadmins(Request $request) {
        
        $request->validate([
            'full_name' => ['required','string','max:255'],
            'email' => ['required','string','email','unique:users','max:255'],
            'phone_number' => ['required','string',],
            'photo' => ['required','image','mimes:jpg,png,jpeg,gif,svg'],
        ]);
        
        $filename = time().$request->photo->getClientOriginalName();

        $request->photo->storeAs('public/image/admins',$filename);

        User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'photo' => $filename,
            'password' => Hash::make('0000'),
            'type_user' => '',
        ]);

        return redirect('/dashboard');
        
    } 

    public function Pushprojets(Request $request) {
        $request->validate([
            'statut' => ['required','string','max:255'],
            'nom_projet' => ['required','string','max:255'],
            'description' => ['required','string','max:255'],
            'photo' => ['required','image','mimes:jpg,png,jpeg,gif,svg'],  
        ]);

        $extension = $request->photo->extension();
        $filename = time().'.'.$extension ;
        
        $request->photo->storeAs('public/image/projets',$filename );

        Projet::create([
            'nom_projet' => $request->nom_projet,
            'statut' => $request->statut,
            'description' => $request->description,
            'photo' => $filename,
        ]);

        return redirect('dashboard');
    }
    
}
