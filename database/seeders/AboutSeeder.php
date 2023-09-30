<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name' => 'Ahmad Ghazy',
            'jabatan' => 'Interior Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609796/ddn/img/teams/um9nvrts0fmhhlzdp65n.jpg',
        ]);
        About::create([
            'name' => 'Fatur Rahman',
            'jabatan' => '🌏',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609810/ddn/img/teams/htzzbogucskhuam2aeyk.jpg',
        ]);
        About::create([
            'name' => 'Inggi Lestari',
            'jabatan' => 'Commissioner',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609801/ddn/img/teams/bt8xitwiz74k4j9daub3.jpg',
        ]);
        About::create([
            'name' => 'Shafira Nur Qalbi',
            'jabatan' => 'Building Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609790/ddn/img/teams/xrz0efnayossbtuixwp4.png',
        ]);
        About::create([
            'name' => 'Sadida Abdul Ghani',
            'jabatan' => 'Director of Operations',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609800/ddn/img/teams/rgheul5jpzbdn25c1xk3.jpg',
        ]);
        About::create([
            'name' => 'Moch Rifqi Zain',
            'jabatan' => 'U.O Surakarta',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609792/ddn/img/teams/dlfhkpuyppyhoxuzdldc.png',
        ]);
        About::create([
            'name' => 'Rifan',
            'jabatan' => 'Interior Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609799/ddn/img/teams/nasb1numjomcov11k7mh.jpg',
        ]);
        About::create([
            'name' => 'Dinda',
            'jabatan' => 'Interior Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609794/ddn/img/teams/gy4o3o6hjtpldjeh4cku.jpg',
        ]);
        About::create([
            'name' => 'Zalfa S',
            'jabatan' => 'Interior Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609791/ddn/img/teams/gc6ppiu4y7x0ald3due3.jpg',
        ]);
        About::create([
            'name' => 'Tazqi Amalia',
            'jabatan' => 'Building Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609787/ddn/img/teams/hiazsx4o14e1plhruoqs.jpg',
        ]);
        About::create([
            'name' => 'Hauna Aghnia',
            'jabatan' => 'Interior Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609786/ddn/img/teams/d4jzkticjch03xxtpmry.png',
        ]);
        About::create([
            'name' => 'Imam Cowboy',
            'jabatan' => 'Furniture Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609783/ddn/img/teams/rwlgl9que5i0iszahn63.jpg',
        ]);
        About::create([
            'name' => 'Dandi P',
            'jabatan' => 'Interior Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609779/ddn/img/teams/psbxgasmyw4y0hcr6lzm.jpg',
        ]);
        About::create([
            'name' => 'Cindy Pitra Laura',
            'jabatan' => 'Building Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609774/ddn/img/teams/ppelgcq8hf3ky52oe2se.jpg',
        ]);
        About::create([
            'name' => 'Fikri Ajani',
            'jabatan' => 'Furniture Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609777/ddn/img/teams/qp7uk1uyy8lfnlb3nira.jpg',
        ]);
        About::create([
            'name' => 'Faradilah zalzabilah A.S',
            'jabatan' => 'Interior Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609777/ddn/img/teams/xq8osp5or8pljupscmny.jpg',
        ]);

        About::create([
            'name' => 'Fadillah Nur Asyifa',
            'jabatan' => 'Building Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609780/ddn/img/teams/hfjxjwvxe5sg7p5gpvt0.jpg',
        ]);


        About::create([
            'name' => 'Raden Mas Atthaya Abi Manyu',
            'jabatan' => 'F&B CEO',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1695663707/ddn/img/teams/hnf5ivy4mw7y2jfvql1e.jpg',
        ]);


        About::create([
            'name' => 'Gilang Dwi Permana',
            'jabatan' => 'Barista',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1695663706/ddn/img/teams/svqequbpsr0jqryont3j.jpg',
        ]);


        About::create([
            'name' => 'Dzukhan Anggi P, S.T',
            'jabatan' => 'CEO',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1695663709/ddn/img/teams/pserpuawracvmam4kgxz.png',
        ]);


        About::create([
            'name' => 'Rico M, S.Ds',
            'jabatan' => 'Furniture Designer',
            'image' => 'https://res.cloudinary.com/dcaurcxth/image/upload/v1694609783/ddn/img/teams/hgrgqv2bye6xqggaty0x.png',
        ]);

    }
}