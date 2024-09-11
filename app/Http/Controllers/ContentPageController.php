<?php

namespace App\Http\Controllers;

use App\Models\FrequentlyAskedQuestion;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContentPageController extends Controller
{
    public function frequentlyAskedQuestions(Request $request): View
    {
        $faq = FrequentlyAskedQuestion::all()->sortBy("created_at");
        return view(
            "content.faq", [
                "faq" => $faq,
                "page_title" => "Roleplay Bot Frequently Asked Questions",
                "page_meta_desc" =>  'Frequently asked questions for the Seven Spells Of Destruction Discord RPG Bot, play today and become all-powerful!',
                "page_image" => '/img/dragon2.png',
            ]
        );
    }

    public function botCommands(Request $request): View
    {
        return view(
            "content.commands", [
                "page_title" => "Discord RPG Bot Commands",
                "page_meta_desc" =>  'Invite the Seven Spells of Destruction bot to your Discord server today to play a unique multi player role playing game in a huge open world.',
                "page_image" => '/img/background-scaled.jpg',
            ]
        );

    }


}