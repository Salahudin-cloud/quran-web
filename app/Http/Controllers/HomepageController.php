<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{
    public function index()
    {
        $response = Http::get('https://quran-api-id.vercel.app/surahs');
        $quran = collect($response->json());

        $quranPaginated = PaginationHelper::paginate($quran, 10);

        return view('homepage', ['quran' => $quranPaginated]);
    }
}
