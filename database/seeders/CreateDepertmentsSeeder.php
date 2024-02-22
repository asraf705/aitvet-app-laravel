<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Modul\Depertment;

class CreateDepertments extends Seeder
{
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function start(): void
    {
        $depertment = [
            [
               'name'=>'Architecture Technology',
               'semester_fees'=>16160,
               'image'=>' ',
               'status'=>1,
            ],
            [
                'name'=>'Chemical Technology',
                'semester_fees'=>16160,
                'image'=>' ',
                'status'=>1,
            ],
            [
                'name'=>'Civil Technology',
                'semester_fees'=>16160,
                'image'=>' ',
                'status'=>1,
            ],
            [
                'name'=>'Computer Technology',
                'semester_fees'=>16160,
                'image'=>' ',
                'status'=>1,
            ],
            [
                'name'=>'Electrical Technology',
                'semester_fees'=>16160,
                'image'=>' ',
                'status'=>1,
            ],
            [
                'name'=>'Electronics Technology',
                'semester_fees'=>16160,
                'image'=>' ',
                'status'=>1,
            ],
            [
                'name'=>'Textile Technology',
                'semester_fees'=>18180,
                'image'=>' ',
                'status'=>1,
            ],

        ];

        foreach ($depertment as $key => $depertments) {
            Depertment::create($depertments);
        }
    }

}
