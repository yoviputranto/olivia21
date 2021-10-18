<?php

namespace App\Http\Controllers;

use App\Models\Admin\Article;
use App\Models\Admin\Event;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('frontend.index',compact('articles'));
    }

    public function article(){
        $articles = Article::all();
        return view('frontend.article', compact('articles'));
    }

    public function detailarticle($slug){
        $article = Article::where('slug',$slug)->firstOrFail();
        return view('frontend.detailarticle', compact('article'));
    }

    public function sejarah(){
        return view('frontend.profil.sejarah');
    }

    public function event(){
        $webinars = Event::where('id_jenis',1)->get();
        return view('frontend.event.event',compact('webinars'));
    }

    public function detailevent($id){
        $event = Event::findOrFail($id);
        return view('frontend.event.detail-event',compact('event'));
    }

    public function diskusi(){
        return view('frontend.diskusi.timeline');
    }

    public function webinar(){
        return view('frontend.event.webinar');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $events = Event::where('judul', 'like', "%" . $keyword . "%")->get();
        $articles = Article::where('title', 'like', "%" . $keyword . "%")->get();
        return view('frontend.search',compact(['events','articles','keyword']));
    }
}
