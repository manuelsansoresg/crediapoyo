<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LegendCat;
use App\Http\Requests\CatRequest;


class LegendCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legend = LegendCat::first();
        
        return view('cat.index', compact('legend'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatRequest $request)
    {
        $legend_cat = new LegendCat( $request->except('_token') );
        $legend_cat->save();

        flash('Elemento guardado');
        return redirect('admin/cat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $legend_cat = LegendCat::find($id);
        return view('cat.edit', compact('legend_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatRequest $request, $id)
    {
        $legend_cat = LegendCat::find($id);
        $legend_cat->content = $request->content;
        $legend_cat->update();

        flash('Elemento guardado');
        return redirect('admin/cat');
        $legend_cat->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $legend_cat = LegendCat::find($id);
        
        $legend_cat->delete();
        
        flash('Elemento borrado');
        return redirect('admin/cat');
    }
}
