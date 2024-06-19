<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Functions\Helper;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'pizzeria',
            'cinese',
            'giapponese',
            'messicano',
            'indiano',
            'coreano',
            'vietnamita',
            'thailandese',
            'francese',
            'spagnolo',
            'italiano',
            'poke',
            'etiope',
            'greco',
            'libanese',
            'kebab'
        ];
        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->slug = Helper::generateSlug($type, Type::class);
            $new_type->save();
        }
    }
}
