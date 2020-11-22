<?php
/**
 * Created by PhpStorm.
 * User: spf_r
 * Date: 2020/11/1
 * Time: 12:19
 */

namespace App\Api\Controllers;


use App\Models\Edge;
use App\Models\Node;
use Illuminate\Database\Eloquent\Collection;

class IndexController
{
    public function index()
    {
        $data = [
            [ 'id'=> 11, 'name'=> 'Dr Nice' ],
            [ 'id'=> 12, 'name'=> 'Narco' ],
            [ 'id'=> 13, 'name'=> 'Bombasto' ],
            [ 'id'=> 14, 'name'=> 'Celeritas' ],
            [ 'id'=> 15, 'name'=> 'Magneta' ],
            [ 'id'=> 16, 'name'=> 'RubberMan' ],
            [ 'id'=> 17, 'name'=> 'Dynama' ],
            [ 'id'=> 18, 'name'=> 'Dr IQ' ],
            [ 'id'=> 19, 'name'=> 'Magma' ],
            [ 'id'=> 20, 'name'=> 'Tornado']
        ];
        return response()->json($data);
    }

    public function skills()
    {
        $data = [
            [ 'id'=> 11, 'name'=> 'C++' ],
            [ 'id'=> 12, 'name'=> 'JAVA' ],
            [ 'id'=> 13, 'name'=> 'Linux' ],
            [ 'id'=> 14, 'name'=> 'C' ],
            [ 'id'=> 15, 'name'=> 'C#' ],
            [ 'id'=> 16, 'name'=> 'Python' ],
            [ 'id'=> 17, 'name'=> 'Javascript' ],
            [ 'id'=> 18, 'name'=> 'TypeScript' ],
            [ 'id'=> 19, 'name'=> 'PHP' ],
            [ 'id'=> 20, 'name'=> 'Docker']
        ];
        return response()->json($data);
    }




    public function tree() {
//        for($i = 1; $i < 10; $i++) {
//            echo $i ."==========<br />";
//            var_dump($this->getOutPutAnchorPoints($i));
//            echo '<br />';
//        }
//
//        die;
        $nodes = Node::all();
        $edges = Edge::select('source', 'target')->get();
        foreach($nodes as $node) {
            $anchorPoints = [];
//            echo '点:' .$node->label. '<br />';
            if($node->targetEdges->count()) {
                $sourceAnchors = $this->getOutPutAnchorPoints($node->targetEdges->count(), $node->targetEdges, $edges);
                $anchorPoints = array_merge($anchorPoints, $sourceAnchors);
            }
            if($node->sourceEdges->count()) {
                $targetAnchors = $this->getInputAnchorPoints($node->sourceEdges->count(), $node->sourceEdges, $node->targetEdges->count(), $edges);
                $anchorPoints = array_merge($anchorPoints, $targetAnchors);
            }

            $node->setAttribute('anchorPoints', $anchorPoints);

        }
//        dd();
        $response = [
            'nodes' => $nodes,
            'edges' => $edges
        ];

        return response()->json($response);
    }

    public function nodes() {
        $nodes = Node::all();
        return response()->json($nodes);
    }

    public function edges()
    {
        $edges = Edge::select('source', 'target')->get();

        return response()->json($edges);
    }


    protected function getOutPutAnchorPoints($count, $targetEdges, Collection $edges) {
        $basic = $this->getBasicSpace($count);
        $anchor_points = [];
        for($i = 0; $i < $count; $i ++) {
            //echo $i.'<br />';
            $anchor_points[] = [($i + 1)*$basic, 1];
//            $targetEdges[$i]->sourceAnchor = $i;
            $edge = $edges->where('source', '=', $targetEdges[$i]->source)->where('target', '=', $targetEdges[$i]->target)->first();
            //var_dump($edge);
            $edge->sourceAnchor = $i;
//            echo '出边:'.$targetEdges[$i]->id.'<br />';
            //dd($targetEdges[$i]->sourceAnchor);
        }

        return $anchor_points;

    }

    protected function getBasicSpace($count) {
        $basic = sprintf('%.3f', 1/(1+$count));

        return $basic;
    }

    protected function getInputAnchorPoints($count, $sourceAnchors, $targetCount, $edges) {
        $basic = $this->getBasicSpace($count);
        $anchor_points = [];
        for($i = 0; $i < $count; $i ++) {
            $anchor_points[] = [($i + 1)*$basic, 0];
//            $sourceAnchors[$i]->targetAnchor = $i + $targetCount;
            $edge = $edges->where('source', '=', $sourceAnchors[$i]->source)->where('target', '=', $sourceAnchors[$i]->target)->first();
//            var_dump($edge);
            $edge->targetAnchor = $i + $targetCount;
//            echo '入边:' . $sourceAnchors[$i]->id . '<br />';
        }

        return $anchor_points;
    }



}