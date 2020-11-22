<?php
/**
 * Created by PhpStorm.
 * User: spf_r
 * Date: 2020/11/21
 * Time: 14:35
 */

namespace App\Api\Controllers;

use App\Models\Node;
use Illuminate\Http\Request;

class NodeController
{
    //添加节点
    public function add(Request $request) {
        $node = new Node();
//        dd($request->post());
        $node->setAttribute('label', $request->input('name'));
        $node->setAttribute('description', $request->input('description'));
        $node->setAttribute('total_time', $request->input('totalTimeRequired'));
        $node->setAttribute('time_used', 0);
        $node->save();
        return response()->json($node);
    }

    //获取未在技能树中的技能
    public function getNodesWithoutRelation() {

    }
}