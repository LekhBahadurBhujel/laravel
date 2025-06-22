<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
    'greeting' => 'Welcome!',
    'name' => 'Lekh Bahadur Bhujel']);

});


Route::get('/jobs', function () {
    return view('jobs',
    [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '1000$',
                'location' => 'Kathmandu, Nepal',
            ],
            [
                'id' => 2,
                'title' => 'Web Developer',
                'salary' => '800$',
                'location' => 'Bhaktapur, Nepal',
            ],
            [
                'id' => 3,
                'title' => 'Data Analyst',
                'salary' => '1200$',
                'location' => 'Lalitpur, Nepal',
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => '1000$',
            'location' => 'Kathmandu, Nepal',
        ],
        [
            'id' => 2,
            'title' => 'Web Developer',
            'salary' => '800$',
            'location' => 'Bhaktapur, Nepal',
        ],
        [
            'id' => 3,
            'title' => 'Data Analyst',
            'salary' => '1200$',
            'location' => 'Lalitpur, Nepal',
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

  //dd($job);

    if (!$job) {
        abort(404);
    }

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/food/index', function () {
    return view('food.index');
});

