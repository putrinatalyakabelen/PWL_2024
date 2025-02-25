<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
}
    public function about() {
        return 'Putri Kabelen / 2341760107';
}
    public function articles($id){
                return 'Halaman Artikel dengan Id '.$id;
    }
}