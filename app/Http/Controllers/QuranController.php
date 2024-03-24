<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class QuranController extends Controller
{
    //
    public function index(Request $request)
    {
        $nomorSurah = $request->query('no');

        $response = Http::get('https://quran-api-id.vercel.app/surahs/' . $nomorSurah);
        $quran = $response->json();


        return view('surah', [
            'surah' => $quran,
        ]);
    }
}
