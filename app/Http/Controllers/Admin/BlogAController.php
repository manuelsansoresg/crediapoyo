<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use upload;

class BlogAController extends Controller
{


    protected $path_blog;

    public function __construct()
    {

        $this->path_blog = './img/blog';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->meta = $request->meta;
        $blog->contenido = $request->contenido;

        if($request->hasFile('portada') != false){ //image is not empty portada
            $image_cover = $request->file('portada');

            /**
             * crear nombres para las imagenes
             */
            $fullName =$image_cover->getClientOriginalName();
            $extension =$image_cover->getClientOriginalExtension();
            $onlyName = explode('.'.$extension,$fullName)[0];


            $name_thumb = 'thumb_'.time().'.'.$onlyName;
            $name_full_thumb = 'thumb_'.time().'.'.$fullName;

            /**
             * seccion para redimencionar imagen
             */

            $name_cover = 'cover-'.time().'.'.$image_cover->getClientOriginalExtension();

            $thumb = new upload($_FILES['portada']);
            if ($thumb->uploaded) {
                $thumb->file_new_name_body   = $name_thumb;
                $thumb->image_resize         = true;
                $thumb->image_x              = 300;
                $thumb->process($this->path_blog.'/');
            }
            $image_cover->move($this->path_blog, $name_cover);
            $blog->portada = $name_cover;
            $blog->portada_thumb =  $name_full_thumb;
        }

        if($request->hasFile('imagen_listado') != false){ //image is not empty portada
            $image_listado = $request->file('imagen_listado');
            $name_listado = 'listado-'.time().'.'.$image_listado->getClientOriginalExtension();
            $image_listado->move($this->path_blog, $name_listado);
            $blog->listado = $name_listado;
        }
        $blog->save();
        return redirect('admin/blog');

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
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->contenido = $request->contenido;
        $blog->meta = $request->meta;

        if($request->hasFile('portada') != false){ //image is not empty portada
            $image_cover = $request->file('portada');
            /**
             * crear nombres para las imagenes
             */


            $fullName =$image_cover->getClientOriginalName();
            $extension =$image_cover->getClientOriginalExtension();
            $onlyName = explode('.'.$extension,$fullName)[0];


            $name_thumb = 'thumb_'.time().'.'.$onlyName;
            $name_full_thumb = 'thumb_'.time().'.'.$fullName;

            /**
             * seccion para redimencionar imagen
             */

            $name_cover = 'cover-'.time().'.'.$image_cover->getClientOriginalExtension();
            $thumb = new upload($_FILES['portada']);
            if ($thumb->uploaded) {
                $thumb->file_new_name_body   = $name_thumb;
                $thumb->image_resize         = true;
                $thumb->image_x              = 300;
                $thumb->process($this->path_blog.'/');
            }

            $image_cover->move($this->path_blog, $name_cover);
            $blog->portada = $name_cover;
            $blog->portada_thumb =  $name_full_thumb;
        }

        if($request->hasFile('imagen_listado') != false){ //image is not empty portada
            $image_listado = $request->file('imagen_listado');
            $name_listado = 'listado-'.time().'.'.$image_listado->getClientOriginalExtension();
            $image_listado->move($this->path_blog, $name_listado);
            $blog->listado = $name_listado;
        }

        $blog->update();
        return redirect('admin/blog');
    }

    public function delete_portada($id)
    {
        $blog = Blog::find($id);
        @unlink($this->path_blog.'/'.$blog->portada);
        @unlink($this->path_blog.'/'.$blog->portada_thumb);
        $blog->portada = '';
        $blog->portada_thumb = '';
        $blog->update();
        flash('Elemento borrado');
        return redirect('admin/blog/'.$id.'/edit');
    }

    public function delete_listado($id)
    {
        $blog = Blog::find($id);
        @unlink($this->path_blog.'/'.$blog->listado);
        $blog->listado = '';
        $blog->update();
        flash('Elemento borrado');
        return redirect('admin/blog/'.$id.'/edit');
    }

    public function highlight($id)
    {
        $total_destaque = Blog::where('id', $id)->where('highlight', 1)->count();
        if($total_destaque < 3){
            $blog = Blog::find($id);
            $blog->highlight = 1;
            $blog->update();
            flash('Elemento actualizado');
            return redirect('admin/blog');
        }else{
            flash('Solo pueden destacarse 3 contenidos')->error();
            return redirect('admin/blog');
        }


    }

    public function unhighlight($id)
    {
        $blog = Blog::find($id);
        $blog->highlight = 0;
        $blog->update();
        flash('Elemento actualizado');
        return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        @unlink($this->path_blog.'/'.$blog->portada);
        @unlink($this->path_blog.'/'.$blog->portada_thumb);
        @unlink($this->path_blog.'/'.$blog->listado);
        $blog->delete();
        flash('Elemento borrado');
        return redirect('admin/blog/');
    }
}
