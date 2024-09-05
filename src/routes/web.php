<?php

use Illuminate\Support\Facades\Route;
use Marshyon\OfficialJokes\Controllers\JokesController;

Route::get('joke', JokesController::class);
