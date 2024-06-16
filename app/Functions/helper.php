<?php

namespace App\Functions;

use Illuminate\Support\Str;
use Faker\Generator as Faker;


class Helper
{
    public static function generateSlug($string, $model)
    {
        $slug = Str::of($string)->slug('-');
        $original_slug = $slug;

        $exist = $model::where('slug', $slug)->first();

        $count = 1;
        while ($exist) {
            $slug = $original_slug . '-' . $count;
            $exist = $model::where('slug', $slug)->first();
            $count++;
        }

        return $slug;
    }

    public static function generateEmail($name)
    {
        return strtolower(str_replace(" ", "", $name)) . '@gmail.com';
    }
}
