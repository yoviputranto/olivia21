<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArticleCategory;
use App\Models\Admin\Jawaban;
use App\Models\Admin\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class UserPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans    = Pertanyaan::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(3);
        $categories     = ArticleCategory::all();
        $jawabans       = Jawaban::all();
        return view('user.diskusi.pertanyaan.index', compact('pertanyaans', 'categories', 'jawabans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data                   = $request->all();
        $data['slug']           = Str::slug($request->pertanyaan);
        $data['user_id']        = Auth::user()->id;
        // $data['category_id']    = 1;
        Pertanyaan::create($data);
        return Redirect::route('timeline.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaans    = Pertanyaan::with('getUser')->findOrFail($id);
        $jawabans       = Jawaban::all();
        return view('user.diskusi.PertanyaanUser.show', compact('pertanyaans', 'jawabans'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaans    = Pertanyaan::findOrFail($id);
        $pertanyaans->delete();
        return Redirect::route('pertanyaan-saya.index');
    }
}
