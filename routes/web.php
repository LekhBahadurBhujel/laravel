<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
     return view('home',[
    'greeting' => 'Welcome!',
    'name' => 'Lekh Bahadur Bhujel']);

});


Route::get('/jobs', function ()  {
    return view('jobs',
    [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
   $job = Job::find($id);


  //dd($job);


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

