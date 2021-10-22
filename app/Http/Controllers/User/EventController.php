<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\EventCategory;
use App\Models\Admin\EventJenis;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $jeniss = EventJenis::all();
        $categories = EventCategory::all();
        return view('user.upload',compact(['jeniss','categories']));
    }
}
