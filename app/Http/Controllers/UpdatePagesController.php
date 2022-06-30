<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image ;
use RealRashid\SweetAlert\Facades\Alert;


class UpdatePagesController extends Controller
{
    public function showadminupdatePage($id) {
        // Si l'utilisateur connecté est un admin principal il peut modifier ces propres informations
        //inclue le mot de passe, mais ne pourra pas modifier le mot de passe des autrres admins
        //Les admins ordinaires ne pourront que modifier leur propre informations.
        $user = Auth::user();
        $updateadmin = User::find($id);  

        if (Auth::user()->type_user == 'admin') {
            if ( Auth::user()->id == $updateadmin->id ) {
                $input_type = "";

                return view('admin/updateadmindata',compact('user','updateadmin','input_type'));
            } else {
                $input_type = "hidden";

                return view('admin/updateadmindata',compact('user','updateadmin','input_type'));
            }            
            
        } else {
            if (Auth::user()->id == $updateadmin->id ) {
                $input_type = "";

                return view('admin/updateadmindata',compact('user','updateadmin','input_type'));
            } else {
                dd('no');
            }    
        }      
    }
    
    public function PushadminupdatePage(Request $request, $id) {

        $request->validate([
            'full_name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255'],
            'phone_number' => ['required','string',],
            'photo' => ['image','mimes:jpg,png,jpeg,gif,svg'],
            // 'password' => ['required','string','min:4','max:15'],
        ]);

        $photo = $request->photo;

        if ($request->hasFile('photo')) {
            $filename = time().$request->photo->getClientOriginalName();
            $photo->storeAs('public/image/admins', $filename);

            // $updateadmin = User::find($id);
            // $updateadminphoto = Image::make($updateadmin->photo); 
            // $updateadminphoto->destroy();
        } else {
            $updateadmin = User::find($id);
            $filename = $updateadmin->photo;            
        }

        $updateadmin = User::find($id);

        $updateadmin->update([

            $updateadmin->full_name = $request->full_name ,
            $updateadmin->email = $request->email ,
            $updateadmin->phone_number = $request->phone_number ,
            $updateadmin->photo = $filename ,
            // $updateadmin->password = Hash::make($request->password) ,
        ]);

        return redirect('/dashboard');
        
    }

    public function Destroyadmin($id) {
        $admin = User::find($id);
        $admin->delete();

        return redirect('/dashboard');
    }
}