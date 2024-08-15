<?php

namespace App\Http\Controllers\Travel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index() {
        $data = Travel::latest()->paginate(5);

        return view('pages.Travel.data_travel', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create() {
        {
            return view('pages.Travel.create_travel');
        }
    }
}
