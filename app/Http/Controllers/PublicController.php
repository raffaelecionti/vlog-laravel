<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public  $users = [
    ['name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Founder & CEO', ],
    ['name' => 'Luigi', 'surname' => 'Bianchi', 'role' => 'Content Manager', ],
    ['name' => 'Giulia', 'surname' => 'Verdi', 'role' => 'Social Media Manager', ],
    ];
    public function homepage(){
        return view('welcome');
    }

    public function aboutUs () {
   
    return view('about-us', ['users' => $this->users]);
}

public function aboutUsDetail ($name){
   
    foreach ($this->users as $user) {
        if ($user['name'] === $name) {
            return view('movie.about-us-detail', ['user' => $user]);
        }
    }
}

public function contact(){
    return view('contacts');
}
public function contactUs(Request $request){
    $user = $request->input('user');
    $email = $request->input('email');
    $message = $request->input('message');
    $userData = compact('user','email','message');
    try{
Mail::to($email)->send(new ContactMail($userData));
    }catch(\Exception $e){
        dd($e);
        return redirect()->route('homepage')->with('emailError', 'ce stato un problema nell invio della email');
    }
    return redirect()->route('homepage')->with('emailSent','hai correttamente inviato una email');
}
}

