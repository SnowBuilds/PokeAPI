<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\GlueController;
use App\Http\Controllers\GuestController;
use App\Http\Resources\SpeciesDetailResource;
use App\Http\Resources\SpeciesResource;
use App\Models\Species;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/glue', [GlueController::class, 'create']);

