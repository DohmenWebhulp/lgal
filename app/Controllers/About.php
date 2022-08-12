<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index($page)
    {
        return view('navbar').view('about/' . $page);
    }
}