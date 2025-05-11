<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollatzController extends Controller
{
    public function input($number)
    {
        $sequence = $this->calculate($number);
        return $this->show($number, $sequence);
    }

    public function calculate($number)
    {
        $sequence = [$number];
        while ($number != 1) {
            $number = $number % 2 == 0 ? $number / 2 : 3 * $number + 1;
            $sequence[] = $number;
        }
        return $sequence;
    }

    public function show($number, $sequence)
    {
        return view('collatz', compact('number', 'sequence'));
    }
}
