<?php

use Illuminate\Support\Facades\Route;

use App\Models\MockData\MockList;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // dd(MockList::getMockListWithId(1));
    return view('home', [
        'datas' => MockList::getMockList(),
    ]);

    // return view('comps.nav');
    // return view('comps.nav2');
});

// --

Route::get('/jobs', function () {
    return view('jobs', [
        'datas' => MockList::getMockList(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $data = MockList::getMockListWithId($id);
    // dd($data);
    if (!$data) {
        abort(404);
    }
    return view('job', [
        'job' => $data,
    ]);
});

// --

Route::get('/about', function () {
    return view('about');
});
