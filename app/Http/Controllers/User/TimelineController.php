<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Jawaban;
use App\Models\Admin\JawabKomentar;
use App\Models\Admin\Komentar;
use App\Models\Admin\Pertanyaan;
use App\Models\LikeJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans    = Pertanyaan::all();
        $jawabans       = Jawaban::orderBy('id', 'DESC')->get();
        $newKomentar    = Komentar::with('getJawaban')->get();
        $jkomentars     = JawabKomentar::all();
        $likeJawaban    = LikeJawaban::with('getJawaban')->where('user_id', Auth::id())->count();
        return view('user.diskusi.timeline.index', compact('pertanyaans', 'jawabans', 'jkomentars', 'likeJawaban', 'newKomentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data   = $request->all();
        $data['user_id'] = Auth::user()->id;
        // $data['pertanyaan_id'] = 1;
        Jawaban::create($data);
        return redirect()->route('timeline.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
