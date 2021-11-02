<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPemesananController extends Controller
{
    public function index(){

    }

    public function create_form($kendaraan_id){
        return view('user.pemesanan-create');
    }

    public function create(){
        return 'ok';
    }
}
