<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Admin\Article;
use App\Models\Admin\ArticleCategory;
use App\Models\Admin\Event;
use App\Models\Admin\EventCategory;
use App\Models\DaftarEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class FrontendController extends Controller
{
    public function index(){
        $articles = Article::all();
        $popEvent = Event::orderBy('created_at','ASC')->get();
        $rekomEvent = Event::orderBy('created_at','DESC')->get();
        return view('frontend.index',compact(['articles','popEvent','rekomEvent']));
    }

    public function article(){
        $articles = Article::all();
        $categories = ArticleCategory::with('getArticle')->get();
        return view('frontend.article', compact(['articles','categories']));
    }

    public function detailarticle($slug){
        $article = Article::where('slug',$slug)->firstOrFail();
        $articles = Article::orderByDesc('created_at')->get();
        return view('frontend.detailarticle', compact(['article','articles']));
    }

    public function sejarah(){
        return view('frontend.profil.sejarah');
    }

    public function event(){
        $webinars = Event::where('id_jenis',1)->get();
        $workshops = Event::where('id_jenis',2)->get();
        $kursuss = Event::where('id_jenis',3)->get();
        return view('frontend.event.event',compact(['webinars','workshops','kursuss']));
    }

    public function detailevent($id){
        $event = Event::findOrFail($id);
        if(auth()->user()){
            $devent=DaftarEvent::where('user_id',auth()->user()->id)->where('event_id',$id)->get();

        return view('frontend.event.detail-event',compact(['event','devent']));
        } else{
            return view('frontend.event.detail-event',compact(['event']));
        }

    }

    public function diskusi(){
        return view('frontend.diskusi.timeline');
    }

    public function webinar(){
        $webinars = Event::where('id_jenis',1)->with('getCategory')->get();
        $categories = EventCategory::with('getEvent')->get();
        return view('frontend.event.webinar',compact('webinars','categories'));
    }

    public function workshop(){
        $webinars = Event::where('id_jenis',2)->with('getCategory')->get();
        $categories = EventCategory::with('getEvent')->get();
        return view('frontend.event.workshop',compact('webinars','categories'));
    }

    public function kursus(){
        $webinars = Event::where('id_jenis',3)->with('getCategory')->get();
        $categories = EventCategory::with('getEvent')->get();
        return view('frontend.event.kursus',compact('webinars','categories'));
    }

    public function search(Request $request){
        $keyword = $request->search;
        $events = Event::where('judul', 'like', "%" . $keyword . "%")->get();
        $articles = Article::where('title', 'like', "%" . $keyword . "%")->get();
        return view('frontend.search',compact(['events','articles','keyword']));
    }

    public function sendEmail(Request $request){
        $details = [
            'name' =>$request->name,
            'email' =>$request->email,
            'pesan' =>$request->pesan
        ];

        Mail::to('edumindindonesia@gmail.com')->send(new ContactMail($details));
        Alert::success('Pesan Terkirim', 'Terima kasih, mohon tunggu balasan dari kami');
        return redirect()->route('kontak');
        // return back()->with('message_sent');

    }
}
