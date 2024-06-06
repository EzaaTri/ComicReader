<?php

namespace App\Http\Controllers;
use Carbon\Carbon;


use App\Models\Komik;
use Illuminate\Http\Request;

class KomikController extends Controller
{
    //
    public function index() {
        $komiks = Komik::with('chapters')->paginate(9);

        // Loop melalui setiap komik untuk menghitung waktu yang telah berlalu untuk setiap chapter
        foreach ($komiks as $komik) {
            foreach ($komik->chapters as $chapter) {
                // Asumsikan `release_date` ada di tabel `chapters`
                $releaseDate = Carbon::parse($chapter->tanggal_rilis);
                $chapter->time_ago = $releaseDate->diffForHumans();
            }
        }

        return view('Home', compact('komiks'));
    }
    public function new_relase() {
        $komiks = Komik::with('chapters')->get();
        return view('/components/new-relase', compact('komiks'));
    }
    public function most_popular() {
        $komiks = Komik::with('chapters')->get();
        return view('/components/most-popular', compact('komiks'));
    }
    public function card2() {
        $komiks = Komik::with('chapters')->paginate(10);
        return view('/components/card2', compact('komiks'));
    }
    public function read_comic() {
        $komiks = Komik::with('chapters')->paginate(10);
        return view('/read-comic', compact('komiks'));
    }
    public function list_comic() {
        $komiks = Komik::with('chapters')->paginate(10);

        // Loop melalui setiap komik untuk menghitung waktu yang telah berlalu untuk setiap chapter
        foreach ($komiks as $komik) {
            foreach ($komik->chapters as $chapter) {
                // Asumsikan `release_date` ada di tabel `chapters`
                $releaseDate = Carbon::parse($chapter->tanggal_rilis);
                $chapter->time_ago = $releaseDate->diffForHumans();
            }
        }
        return view('/list-comic', compact('komiks'));
    }
    public function search_comic() {
        $komiks = Komik::with('chapters')->paginate(10);
        return view('/search-comic', compact('komiks'));
    }
    public function show($id) {
        $komik = Komik::findOrFail($id);
        // $komiks = Komik::where('id',$id)->first();
        // return view('/comic', compact('komiks'));
        return view('comic', compact('komik'));
    }

}