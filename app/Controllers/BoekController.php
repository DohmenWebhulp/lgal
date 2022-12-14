<?php

namespace App\Controllers;

class BoekController extends BaseController
{
    public function index()
    {
        $model = model(Boek::class);

        $data = [
            'boeken' => $model->getBoeken()
        ];
        return view('navbar').view('info/boeken', $data).view('footer');
    }
}