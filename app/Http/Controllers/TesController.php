<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $soalpapi = DB::table('tb_papi')->get();
        return view('user.tes',['soalpapi' => $soalpapi]);

    }
    public function riwayat()
    {

        return view('user.riwayat');

    }

}
