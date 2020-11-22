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
            ['tree_id' => 1,"label"=> "n0", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n1", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n2", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n3", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n4", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n5", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n6", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n7", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n8", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n9", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n10", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n11", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n12", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n13", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n14", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n15", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n16", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n17", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n18", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n19", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n20", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n21", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n22", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n23", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n24", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n25", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n26", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n27", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n28", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n29", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n30", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
            ['tree_id' => 1,"label"=> "n31", 'total_time' => 100, 'time_used' => 20, 'type' => 'rect'],
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
