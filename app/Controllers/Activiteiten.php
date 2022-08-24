<?php

namespace App\Controllers;

class Activiteiten extends BaseController
{
    public function brunssum()
    {
        return view('navbar').view('activiteiten/lotgenotenavonden/brunssum').view('footer'); 
    }
    public function maastricht()
    {
        return view('navbar').view('activiteiten/lotgenotenavonden/maastricht').view('footer'); 
    }
    public function anders()
    {
        return view('navbar').view('activiteiten/anders').view('footer'); 
    }
}