<?php

namespace App\Controllers;

class Activiteiten extends BaseController
{
    public function index($seg1 = false, $seg2 = false)
    {
        if(!$seg2)
        {
            return view('navbar').view('activiteiten/' . $seg1);
        }else{
            return view('navbar').view('activiteiten/lotgenotenavonden/' . $seg2);
        }  
    }
}