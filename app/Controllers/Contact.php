<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function contact()
    {
        return view('navbar').view('contact/contact').view('footer');
    }
}