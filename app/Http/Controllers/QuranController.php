<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class QuranController extends Controller
{


    public function index(Request $request)
    {
        $nomorSurah = $request->query('no');

        $response = Http::get('https://quran-api-id.vercel.app/surahs/' . $nomorSurah);
        $quran = $response->json();


        $ayahs = collect($quran['ayahs']);
        $paginatedAyahs = PaginationHelper::paginate($ayahs, 10);


        return view('surah', [
            'quran' => $quran,
            'surah' => $paginatedAyahs,
        ]);
    }
}
