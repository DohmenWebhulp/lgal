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
        return view('info/links', $data);
    }
}