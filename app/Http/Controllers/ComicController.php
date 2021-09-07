<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function comics() {
        $data= [
            'comics' => config('arraycomics')
        ];
        return view('comics',$data);
    }
    public function dettaglio($id) {
        $comic = Comic::all();
        $data = [
            'result' => $comic[$id]
        ];
        return view('dettaglio',$data);
    }
}
// class ComicController extends Controller
// {
//     public function comics() {
//         $data= [
//             'comics' => config('arraycomics')
//         ];
//         return view('comics',$data);
//     }
//     public function dettaglio($id) {
//         $comic = config('arraycomics');
//         $data = [
//             'result' => $comic[$id]
//         ];
//         return view('dettaglio',$data);
//     }
// }
