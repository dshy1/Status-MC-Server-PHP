<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mylibs\MineStat;

class IndexController extends Controller
{
    public function index(){
    $ip = '191.253.104.78';
    $port = 25565;
    $ms = new MineStat($ip, $port);
    return view('server.status')->with(['status' => $ms, 'ip' => $ip, 'port' => $port]);

    }
}
