<?php

namespace App\Http\Controllers;

use App\Models\FrequentlyAskedQuestion;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContentPageController extends Controller
{
    public function frequentlyAskedQuestions(Request $request): View
    {
        $categories = [
            'getting-started' => 'Getting Started & Platforms',
            'gameplay' => 'Gameplay & Characters',
            'support' => 'Discord, Premium & Support',
        ];

        $faq = FrequentlyAskedQuestion::orderBy('created_at')
            ->get()
            ->groupBy('category');

        return view(
            "content.faq", [
                "faq" => $faq,
                "categories" => $categories,
                "page_title" => "Seven Spells Frequently Asked Questions",
                "page_meta_desc" => "Frequently asked questions about Seven Spells of Destruction, including gameplay, Steam, itch.io, browser and Discord.",
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