<?php

use App\Models\Task;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){
    $jobs = Task::all();

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Task::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
