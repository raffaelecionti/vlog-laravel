<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view('about-us-detail', ['user' => $user]);
        }
    }
}


}

