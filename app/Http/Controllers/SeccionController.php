<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionController extends Controller
{
    public function quienes_somos()
    {
        return view('quienes_somos');
    }

    public function donde_estamos()
    {
        return view('donde_estamos');
    }

    public function soluciones_financieras()
    {
        return view('soluciones_financieras');

    }

    public function contacto()
    {
        return view('contacto');
    }

    public function afiliate()
    {
        return view('afiliate');
    }

    public function blog()
    {
        return view('blog');
    }

    public function show_blog($slug)
    {
        return view('blog_show');
    }
}
