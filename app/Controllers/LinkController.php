<?php

namespace App\Controllers;

class LinkController extends BaseController
{
    public function index()
    {
        $model = model(Link::class);

        $data = [
            'links' => $model->getLinks()
        ];
        return view('navbar').view('info/links', $data).view('footer');
    }

    public function nieuws()
    {
        $db = \Config\Database::connect();
        $model = model(Link::class);

        $data = [
            'nieuws' => $model->getNieuws()
        ];

        //dd($data);

        return view('navbar').view('info/nieuws', $data).view('footer');
    }
}