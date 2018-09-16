<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\StoreUser;
use App\User;

class LikeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addLike(Request $request)
    {
        //since store_user table have a combined primary ,it will note be possible to like a store twice
        
        $StoreUser =  new StoreUser;

        $StoreUser->user_id = Auth::id();
        $StoreUser->store_id = $request->storeID;
        if(!response($StoreUser)){return 0;}
        else{
            $StoreUser->save();
            return 1;
        }
        
        

    }
}