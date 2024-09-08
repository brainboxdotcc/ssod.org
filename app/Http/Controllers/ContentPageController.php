<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FrequentlyAskedQuestion;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class ContentPageController extends Controller
{
    public function frequentlyAskedQuestions(Request $request): View
    {
        $faq = FrequentlyAskedQuestion::all()->sortBy("created_at");
        return view("content.faq", ["faq" => $faq]);
    }
}