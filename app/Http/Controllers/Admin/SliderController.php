<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\SliderContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    protected $path_icon;

    public function __construct()
    {

        $this->path_icon = './img/icon_slider';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = SliderContent::all();
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $slider = new SliderContent();
        $slider->title = $request->titulo;
        $slider->content = $request->contenido;
        $slider->order = $request->orden;
        if($request->hasFile('icono') != false){ //image is not empty portada
            $image_cover = $request->file('icono');
            $name_cover = 'icon-'.time().'.'.$image_cover->getClientOriginalExtension();
            $image_cover->move($this->path_icon, $name_cover);
            $slider->icon = $name_cover;
        }
        $slider->save();
        return redirect('admin/slider');
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
        $slider = SliderContent::find($id);
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, $id)
    {
        $slider = SliderContent::find($id);
        $slider->title = $request->titulo;
        $slider->content = $request->contenido;
        $slider->order = $request->orden;

        if($request->hasFile('icono') != false){ //image is not empty portada
            $image_cover = $request->file('icono');
            $name_cover = 'icon-'.time().'.'.$image_cover->getClientOriginalExtension();
            $image_cover->move($this->path_icon, $name_cover);
            $slider->icon = $name_cover;
        }
        $slider->update();
        return redirect('admin/slider');
    }

    public function delete_icon($id)
    {
        $slider = SliderContent::find($id);
        @unlink($this->path_icon.'/'.$slider->icon);
        $slider->icon = '';
        $slider->update();
        return redirect('/admin/slider/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = SliderContent::find($id);
        @unlink($this->path_icon.'/'.$slider->icon);
        $slider->delete();
        flash('Elemento borrado');
        return redirect('/admin/slider');
    }
}
