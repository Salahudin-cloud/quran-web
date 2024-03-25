<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CariSurahController extends Controller
{
    public function index(Request $request)
    {
        $nomorSurah = $request->ke;
        $num = (int) $nomorSurah;
        // query surah by nomor surah
        $response = Http::get('https://quran-api-id.vercel.app/surahs/' . $num);
        $quran = $response->json();

        return view('cari_surah', [
            'data' => $quran,
        ]);
    }
}
