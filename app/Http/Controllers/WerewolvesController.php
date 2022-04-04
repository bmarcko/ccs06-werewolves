<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WerewolvesController extends Controller
{
    const BOOK_NAME = 'THE BOOK OF WERE-WOLVES';
    const BOOK_AUTHOR = 'Sabine Baring-Gould';
    const BOOK_CHAPTERS = 8;

    public function index(){
        return view('index', [
            'book_name' => static::BOOK_NAME,
            'book_author' => static::BOOK_AUTHOR,
            'book_chapters' => static::BOOK_CHAPTERS
        ]);
    }

    public function readChapterX($chapter_number){
        return view('read-chapter', [
            'book_name' => static::BOOK_NAME,
            'book_author' => static::BOOK_AUTHOR,
            'book_chapters' => static::BOOK_CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }

    public function readAllChapters(){
        return view('read-all', [
            'book_name' => static::BOOK_NAME,
            'book_author' => static::BOOK_AUTHOR,
            'book_chapters' => static::BOOK_CHAPTERS
        ]);
    }
}
