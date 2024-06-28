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

    public static function generateEmail($name, $surname)
    {
        // return strtolower(str_replace(" ", "", $name)) . '@gmail.com';
        return strtolower(str_replace(' ', '.', $name)) . '.' . strtolower(str_replace(' ', '.', $surname)) . '@gmail.com';
    }

    public static function formatDate($data)
    {
        // Imposta il fuso orario a Roma
        date_default_timezone_set('Europe/Rome');

        // Crea un oggetto DateTime a partire dalla stringa $data
        $date = date_create($data);

        // Verifica se la creazione dell'oggetto DateTime è andata a buon fine
        if ($date === false) {
            throw new \InvalidArgumentException("Data non valida: $data");
        }

        // Formatta la data nel formato desiderato
        $formattedDate = date_format($date, 'd/m/Y - H:i');

        // Restituisci la data formattata
        return $formattedDate;
    }
}
