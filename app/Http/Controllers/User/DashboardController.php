<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use App\Models\DaftarEvent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $event = Event::where('user_id',auth()->user()->id)->get();
        return view('user.index',compact(['event']));
    }

    public function ikutEvent(){
        $devents = DaftarEvent::where('user_id',auth()->user()->id)->with('getEvent')->paginate(4);
        return view('user.ikutevent',compact(['devents']));
    }

    public function detailIkutEvent($slug){
        $event = Event::where('slug',$slug)->first();
        return view('user.detail-ikutevent',compact(['event']));
    }
}
