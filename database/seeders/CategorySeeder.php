<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Fiksi',
            'slug' => 'fiksi'
        ]);

        Category::create([
            'name' => 'Novel',
            'slug' => 'novel'
        ]);

        Category::create([
            'name' => 'Cerita Pendek',
            'slug' => 'cerita-pendek'
        ]);

        Category::create([
            'name' => 'Fiksi Ilmiah',
            'slug' => 'fiksi-ilmiah'
        ]);

        Category::create([
            'name' => 'Fantasi',
            'slug' => 'fantasi'
        ]);

        Category::create([
            'name' => 'Misteri',
            'slug' => 'misteri'
        ]);

        Category::create([
            'name' => 'Horor',
            'slug' => 'horor'
        ]);

        Category::create([
            'name' => 'Romansa',
            'slug' => 'romansa'
        ]);

        Category::create([
            'name' => 'Non-Fiksi',
            'slug' => 'non-fiksi'
        ]);

        Category::create([
            'name' => 'Biografi',
            'slug' => 'biografi'
        ]);

        Category::create([
            'name' => 'Sejarah',
            'slug' => 'sejarah'
        ]);

        Category::create([
            'name' => 'Sains',
            'slug' => 'sains'
        ]);

        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        Category::create([
            'name' => 'Filosofi',
            'slug' => 'filosofi'
        ]);

        Category::create([
            'name' => 'Psikologi',
            'slug' => 'psikologi'
        ]);

        Category::create([
            'name' => 'Self-Help',
            'slug' => 'self-help'
        ]);

        Category::create([
            'name' => 'Bisnis dan Ekonomi',
            'slug' => 'bisnis-dan-ekonomi'
        ]);

        Category::create([
            'name' => 'Kesehatan dan Kebugaran',
            'slug' => 'kesehatan-dan-kebugaran'
        ]);

        Category::create([
            'name' => 'Agama dan Spiritualitas',
            'slug' => 'agama-dan-spiritualitas'
        ]);

        Category::create([
            'name' => 'Politik dan Pemerintahan',
            'slug' => 'politik-dan-pemerintahan'
        ]);

        Category::create([
            'name' => 'Seni dan Musik',
            'slug' => 'seni-dan-musik'
        ]);

        Category::create([
            'name' => 'Anak-anak',
            'slug' => 'anak-anak'
        ]);

        Category::create([
            'name' => 'Edukasi',
            'slug' => 'edukasi'
        ]);

        Category::create([
            'name' => 'Komik',
            'slug' => 'komik'
        ]);

        Category::create([
            'name' => 'Manga',
            'slug' => 'manga'
        ]);

        Category::create([
            'name' => 'Graphic Novel',
            'slug' => 'graphic-novel'
        ]);

        Category::create([
            'name' => 'Hobi dan Keterampilan',
            'slug' => 'hobi-dan-keterampilan'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        Category::create([
            'name' => 'Puisi',
            'slug' => 'puisi'
        ]);

        Category::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Category::create([
            'name' => 'Kumpulan Esai',
            'slug' => 'kumpulan-esai'
        ]);
    }
}
