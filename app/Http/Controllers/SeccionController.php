<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\SolicitaInformacionRequest;
use App\Mail\SolicitudMail;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $blog = Blog::orderBy('updated_at', 'desc')->first();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(20);

        return view('blog', compact('blogs', 'blog'));
    }

    public function show_blog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blog_show', compact('blog'));
    }

    public function terminos()
    {
        return view('terminos');
    }

    public function aviso()
    {
        return view('aviso');
    }

    public function solicita_informacion(SolicitaInformacionRequest $request)
    {
        $state = State::find($request->state);
        Mail::to('contacto@crediapoyo.com.mx')->send(new SolicitudMail($request->all(), $state));
        $data = array('status' => 200);
        return response()->json($data);
    }

    public function requisitos()
    {
        return view('requisitos');
    }

    public function buro()
    {
        return view('buro');
    }

    public function atencionUne()
    {
        return view('atencion_une');
    }

}
