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

    public static function formatDate($data)
    {
        $date = date_create($data);
        return $date_format = date_format($date, 'd/m/Y');
    }

    public static function generateGithubUrl(Faker $faker)
    {
        $username = $faker->userName;
        $repository = $faker->word . '-' . $faker->word;
        return "https://github.com/{$username}/{$repository}";
    }
}
