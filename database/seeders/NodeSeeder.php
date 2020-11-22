<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["label"=> "n0", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n1", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n2", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n3", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n4", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n5", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n6", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n7", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n8", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n9", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n10", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n11", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n12", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n13", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n14", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n15", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n16", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n17", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n18", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n19", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n20", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n21", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n22", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n23", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n24", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n25", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n26", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n27", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n28", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n29", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n30", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ["label"=> "n31", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n12", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n13", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n14", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n15", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n16", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n17", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n18", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n19", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
//            ["label"=> "n20", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
        ];
        DB::table('nodes')->insert($data);
    }
}
