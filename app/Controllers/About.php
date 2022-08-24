<?php

namespace App\Controllers;

class About extends BaseController
{
    public function historie()
    {
        return view('navbar').view('about/historie').view('footer');
    }

    public function bestuur()
    {
        return view('navbar').view('about/bestuur').view('footer');
    }

    public function stichting()
    {
        return view('navbar').view('about/stichting').view('footer');
    }

}