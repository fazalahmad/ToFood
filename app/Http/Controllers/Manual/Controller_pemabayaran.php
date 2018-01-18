<?php

namespace App\Http\Controllers\Manual;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Controller_pemabayaran extends Controller
{

    public function faktur()
    {
        return view('/admin.faktur');
    }
}
