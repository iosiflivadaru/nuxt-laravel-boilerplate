<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    public function index()
    {
        return Sound::all();
    }
}
