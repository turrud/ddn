<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'First Virtual Architecture Exhibitions.',
            'tanggal' => 'Februari 2021',
            'lokasi' => 'Cirebon',
            ]);
        Event::create([
            'name' => 'First Virtual Batik Exhibitions.',
            'tanggal' => 'Maret 2022',
            'lokasi' => 'Sumedang',
            ]);

        Event::create([
            'name' => 'Woman Independent days Virtual Exhibitions.',
            'tanggal' => 'Maret 2023',
            'lokasi' => 'Bandung',
        ]);

        Event::create([
            'name' => 'Seminar Interior in Islam.',
            'tanggal' => 'September 2023',
            'lokasi' => 'Bandung',
        ]);

        Event::create([
            'name' => '4th Dananjaya Design Exhibitions.',
            'tanggal' => 'Oktober 2023',
            'lokasi' => 'Bandung',
        ]);

        Event::create([
            'name' => 'Attend 4th Bandung Connecty City.',
            'tanggal' => '2023',
            'lokasi' => 'Bandung',
        ]);

        Event::create([
            'name' => 'Attend Dekolonialisasi Tinggalan Budaya.',
            'tanggal' => 'September 2023',
            'lokasi' => 'Bandung',
        ]);
        Event::create([
            'name' => 'Holaqoh Hujroh Online with Ikmas Bandung.',
            'tanggal' => 'September 2023',
            'lokasi' => 'Bandung',
        ]);
    }
}