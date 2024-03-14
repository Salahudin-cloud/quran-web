<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{
    public function index()
    {
        $response = Http::get('https://quran-api-id.vercel.app/surahs');
        $quran = $response->json();

        // Paginate the results
        $perPage = 10; // You can adjust the number of items per page as needed
        $currentPage = Paginator::resolveCurrentPage('page');
        $pagedData = array_slice($quran, ($currentPage - 1) * $perPage, $perPage);
        $quranPaginated = new LengthAwarePaginator($pagedData, count($quran), $perPage, $currentPage);

        return view('homepage', ['quran' => $quranPaginated]);
    }
}
