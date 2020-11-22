<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EdgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["source"=> 1, "target"=> 2],
            ["source"=> 1, "target"=> 3],
            ["source"=> 1, "target"=> 4],
            ["source"=> 2, "target"=> 5],
            ["source"=> 2, "target"=> 6],
            ["source"=> 2, "target"=> 7],
            ["source"=> 3, "target"=> 8],
            ["source"=> 3, "target"=> 9],
            ["source"=> 3, "target"=> 10],
            ["source"=> 4, "target"=> 11],
            ["source"=> 4, "target"=> 12],
            ["source"=> 4, "target"=> 13],
            ["source"=> 5, "target"=> 14],
            ["source"=> 5, "target"=> 15],
            ["source"=> 5, "target"=> 16],
            ["source"=> 6, "target"=> 17],
            ["source"=> 6, "target"=> 18],
            ["source"=> 6, "target"=> 19],
            ["source"=> 7, "target"=> 20],
            ["source"=> 7, "target"=> 21],
            ["source"=> 8, "target"=> 22],
            ["source"=> 9, "target"=> 23],
            ["source"=> 10, "target"=> 24],
            ["source"=> 11, "target"=> 25],
            ["source"=> 12, "target"=> 26],
            ["source"=> 16, "target"=> 27],
            ["source"=> 16, "target"=> 28],
            ["source"=> 17, "target"=> 29],
            ["source"=> 18, "target"=> 30]
        ];
        echo '23432';
        DB::table('edges')->insert($data);
    }
}
