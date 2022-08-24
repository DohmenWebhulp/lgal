<?php

namespace App\Controllers;

class Bron extends BaseController
{
    public function documenten()
    {
        return view('navbar').view('bronnen/documenten').view('footer');
    }
}