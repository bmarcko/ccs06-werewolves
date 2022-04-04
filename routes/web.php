<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WerewolvesController;

Route::get('/', [WerewolvesController::class,'index']);
Route::get('/chapter/{chapter_number}', [WerewolvesController::class,'readChapterX']);
Route::get('/read-all', [WerewolvesController::class,'readAllChapters']);