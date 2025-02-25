<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class  SingleActionController extends Controller{

    public function single($id = null) {
        $home = 'Selamat Datang';
        $about = 'Nama : Putri Kabelen <br> NIM : 2341760107';
        $article = $id ? "Halaman Artikel dengan ID $id" : '';

        return "$home <br><br> $about <br><br> $article";
    }
}

