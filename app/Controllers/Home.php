<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home', ['title' => 'Home']);
    }

    public function cadastro() {
        return view('cadastro');
    }
}
