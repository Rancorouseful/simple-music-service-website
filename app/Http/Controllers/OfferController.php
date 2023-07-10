<?php

namespace App\Http\Controllers;

use App\Models\BeatBotUser;
use Illuminate\Http\Request;


class OfferController extends Controller
{
    public  function index()
    {
        $users = BeatBotUser::all();
        return view('offer.index');
    }
}
