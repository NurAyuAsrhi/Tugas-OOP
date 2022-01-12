<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
    //mengambil data dari tabel contact
        $contacts = DB::table('contact')->get();
    //mengirim data view contact
        return view('contact')->with(compact('contacts'));
    }
}
