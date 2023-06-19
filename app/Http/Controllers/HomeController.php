<?php

namespace App\Http\Controllers;

use App\Models\Game;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'highlighted_games' => $highlightedGames = Game::inRandomOrder()->limit(4)->get(),
            'games' => Game::inRandomOrder()->whereNotIn('id', $highlightedGames->pluck('id'))->limit(10)->get(),
        ]);
    }
}
