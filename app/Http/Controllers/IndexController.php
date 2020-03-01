<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mylibs\MineStat;

class IndexController extends Controller
{
    public function index(){
    $ip = '35.199.121.209';
    $port = '25570';
    $ms = new MineStat($ip, $port);
    return view('server.status')->with(['status' => $ms, 'ip' => $ip, 'port' => $port]);

    }
}
