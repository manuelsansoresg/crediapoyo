<?php

namespace App\Http\Controllers;

use App\SliderContent;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $slider_content = SliderContent::first();
        $sliders_all = SliderContent::orderBy('order', 'asc')->get();
        return view('welcome', compact('slider_content', 'sliders_all'));
    }

    public function showSliderContent($id)
    {
        $slider_content = SliderContent::find($id);
        $ids = SliderContent::select('id')->get();
        $data = array('slider_content' => $slider_content, 'ids' => $ids);
        return response()->json($data);
    }
}
