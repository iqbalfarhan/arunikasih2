<?php

namespace App\Helper;

class Arunikasih
{
    public static function rupiah($number)
    {
        return implode(" ", [
            "Rp",
            number_format($number, 0, ",", ".")
        ]);
    }
}
