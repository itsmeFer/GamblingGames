<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index()
    {
        // Daftar game statis
        $games = [
            ['name' => 'Togel', 'description' => 'Permainan angka untuk menang besar.'],
            ['name' => 'Casino', 'description' => 'Nikmati permainan klasik seperti Blackjack dan Roulette.'],
            ['name' => 'Slot', 'description' => 'Tarik tuas dan menangkan jackpot besar.'],
            ['name' => 'Poker', 'description' => 'Permainan kartu yang mengasah strategi Anda.'],
        ];

        $user = Auth::user(); // Mendapatkan data pengguna yang login

        return view('games.index', compact('games', 'user'));
    }
}
