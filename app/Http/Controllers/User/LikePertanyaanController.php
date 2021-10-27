<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LikePertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikePertanyaanController extends Controller
{
    public function like_pertanyaan($id)
    {
        $like_pertanyaans   = LikePertanyaan::where('pertanyaan_id', $id)->where('user_id', Auth::user()->id)->first();

        if ($like_pertanyaans) {
            $like_pertanyaans->delete();
            return back();
        } else {
            LikePertanyaan::create([
                'pertanyaan_id' => $id,
                'user_id'       => Auth::id()
            ]);
        }

        return redirect()->back();
    }
}
