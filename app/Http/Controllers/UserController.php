<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Hash;
use App\Models\Seat;

class UserController extends Controller
{
    public function index(Request $request) {
        // if(isset($request->error)){
        //     $error = $request->error;
        // }
        return view('users.index');
    }

    public function login(Request $request) {
        $item = Store::where('mail',$request->mail)->first();
        if($item != null) {
            $judg = Hash::check($request->pw, $item['password']);
            if($judg) {
                $request->session()->put('store_id', $item['id']);
                $seat = Seat::where('store_id', $item['id'])->get();
                return view('users.menu',['seat' => $seat]);
            } else {
                redirect('/');
            }
        } else {
            return redirect('/');
        };
    }
}
