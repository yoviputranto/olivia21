<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\JawabKomentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JawabKomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jkomentars = JawabKomentar::with('getKomentar')->get();
        return view('admin.jkomentar.index', compact('jkomentars'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jkomentars = JawabKomentar::findOrFail($id);
        $jkomentars->delete();
        return Redirect::route('jawab-komentar.index');
    }
}
