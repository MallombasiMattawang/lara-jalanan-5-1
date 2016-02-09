<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Comment;
use Input;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $article = Article::orderBy('id','DESC')->paginate(10);
        $data['article'] = $article->setPath('article');

        //print_r($tmst_jenisperizinan);
        return view('admin.article.index',$data);
    }
    public function guestarticle()
    {
        $article = Article::where('category_id','=',1)->orderBy('id','DESC')->paginate(5);
        $data['article'] = $article->setPath('post');

        return view('article',$data);
    }
    public function guestarticleshow($id)
    {
        $data['article'] = Article::find($id);

        return view('article_show',$data);
    }
    public function guesttutorial()
    {
        $article = Article::where('category_id','=',2)->orderBy('id','DESC')->paginate(2);
        $data['article'] = $article->setPath('tutorial');
        return view('tutorial',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $filename  = Input::file('picture')->getClientOriginalName();
        $size      = Input::file('picture')->getSize();
        Input::file('picture')->move(public_path().'/mypicture/',$filename);
        $data = $request->all();
        //print_r($data);
        $data = array(
            'title'=>Input::get('title'),
            'subtitle'=>Input::get('subtitle'),
            'content' => Input::get('content'),
            'category_id' => Input::get('category_id'),
            'image' =>$filename );
        Article::create($data);
        Session::flash('flash_message', 'Berhasil Tersimpan');
        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data['article'] = Article::find($id);
        return view('admin.article.show',$data);
    }
    public function guestcomment(Request $request)
    {
        $data = $request->all();
        Session::flash('flash_message', 'Success');
        Comment::create($data);
        return redirect('post-detail/'.Input::get('article_id'));
    }
    public function guestcontact(Request $request)
    {
        $data = $request->all();
        Session::flash('flash_message', 'Pesan Terkirim');
        Contact::create($data);
        return redirect('contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data['article'] = Article::find($id);

        return view('admin.article.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //$data = $request->all();
        $filename  = Input::file('picture')->getClientOriginalName();
        $size      = Input::file('picture')->getSize();
        Input::file('picture')->move(public_path().'/mypicture/',$filename);
        $data = $request->all();
        //print_r($data);
        $data = array(
            'title'=>Input::get('title'),
            'subtitle'=>Input::get('subtitle'),
            'content' => Input::get('content'),
            'category_id' => Input::get('category_id'),
            'image' =>$filename );
        $article = Article::find($id);
        $article->update($data);
        Session::flash('flash_message', 'Berhasil Tersimpan');
        return redirect('article/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        Session::flash('flash_message', 'Berhasil Dihapus');
        return redirect('article');
    }
}
