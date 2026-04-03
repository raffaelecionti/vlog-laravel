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

public function aboutUsDetail($name) {
    foreach ($this->users as $user) {
        if ($user['name'] == $name) {
            // Assicurati che il nome della vista sia corretto (senza "movie." se il file è nella cartella base)
            return view('about-us-detail', ['user' => $user]);
        }
    }
    // Gestisci il caso in cui l'utente non viene trovato
    return redirect()->route('about-us')->with('error', 'Utente non trovato');
}


public function contact(){
    return view('contacts');
}
public function contactUs(Request $request) {
    $user = $request->input('user');
    $email = $request->input('email');
    $message = $request->input('message');

    $userData = compact('user', 'email', 'message');

    try {
        Mail::to('tuamail@esempio.it')->send(new ContactMail($userData));
        
    } catch (\Exception $e) {
        return redirect()->route('homepage')->with('emailError', 'Errore nell\'invio: ' . $e->getMessage());
    }

    return redirect()->route('contact')->with('emailsent', 'Hai correttamente inviato una email!');
} 


public function profile(){
    return view('profile');
}

}

