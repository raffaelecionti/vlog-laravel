<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicController extends Controller
{
    public $users = [
        ['name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Founder & CEO'],
        ['name' => 'Luigi', 'surname' => 'Bianchi', 'role' => 'Content Manager'],
        ['name' => 'Giulia', 'surname' => 'Verdi', 'role' => 'Social Media Manager'],
    ];

    public function homepage() {
        return view('welcome');
    }

    public function aboutus() {
        return view('about-us', ['users' => $this->users]);
    }

    public function aboutUsDetail($name) {
        foreach ($this->users as $user) {
            if (strtolower($user['name']) == strtolower($name)) {
                return view('about-us-detail', compact('user'));
            }
        }
        abort(404);
    }

    public function contact() {
        return view('contacts');
    }

    public function contactUs(Request $request) {
        $user = $request->input('user');
        $email = $request->input('email');
        $message = $request->input('message');
        $userData = compact('user', 'email', 'message');

        try {
            Mail::to('tua@email.it')->send(new ContactMail($userData));
        } catch (\Exception $e) {
            return redirect()->route('homepage')->with('emailError', 'Problema invio email');
        }

        return redirect()->route('contact')->with('emailsent', 'Email inviata con successo!');
    }

    public function posts(){
        return view('posts');
    }
} 