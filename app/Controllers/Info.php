<?php

namespace App\Controllers;

class Info extends BaseController
{
    public function autisme()
    {
        return view('navbar').view('info/autisme').view('footer');
    }
    public function vacatures()
    {
        return view('navbar').view('info/vacatures').view('footer');
    }
    public function fotos()
    {
        return view('navbar').view('info/fotos').view('footer');
    }
}