<?php

use App\Http\Controllers\Client;
use App\Http\Controllers\Freelancer;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/signup-freelancer', [PageController::class, 'signupAsFreelancer']);
Route::get('/signup-client', [PageController::class, 'signupAsClient']);
Route::get('/get-started', [PageController::class, 'getStarted']);

//freelancer
Route::get('/find-job', [JobPostController::class, 'show']);
Route::get('/create-profile', [Freelancer::class, 'createProfile']);
Route::get('/freelancer/profile', [Freelancer::class, 'profile']);
Route::get('freelancer/setting/contactInfo', [Freelancer::class, 'contactInfo']);
Route::get('/send-proposal', [Freelancer::class, 'sendProposal']);
Route::get('/contract', [Freelancer::class, 'contractProject']);

//client
Route::get('/client/dashboard', [Client::class, 'Dashboard']);
Route::get('/all-jobs', [JobPostController::class, 'show']);
Route::post('/contracts', [Client::class, 'contracts']);
Route::post('/client-info', [Client::class, 'clientInfo']);
Route::post('/payments/deposit-methods', [Client::class, 'clientInfo']);

//route for job
Route::get('/job-post', [JobPostController::class, 'index']);
Route::post('/save-job', [JobPostController::class, 'store']);
Route::get('/edit/{id}', [JobPostController::class, 'edit']);
Route::get('/delete/{id}', [JobPostController::class, 'destroy']);
Route::get('/find-job', [JobPostController::class, 'show']);
Route::get('/delete/{id}', [JobPostController::class, 'destroy']);
