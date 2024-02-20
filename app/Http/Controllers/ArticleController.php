<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(string $articleId)
    {
        return "Halaman artikel dengan ID $articleId";
    }
}
