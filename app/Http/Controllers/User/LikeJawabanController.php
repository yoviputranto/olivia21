<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Jawaban;
use App\Models\LikeJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeJawabanController extends Controller
{
    public function like($id)
    {
        $likes   = LikeJawaban::findOrFail($id);

        if ($likes) {
            $likes->delete();
            return back();
        } else {
            LikeJawaban::create([
                'jawaban_id' => $likes->id,
                'user_id'    => Auth::id()
            ]);
        }

        return redirect()->back();
    }
}
