<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edge extends Model
{
    use HasFactory;

    protected $source_anchor;
    protected $target_anchor;

//    protected function getId($value) {
//        return (string) $value;
//    }

    protected function getSourceAttribute($value) {
        return (string) $value;
    }

    protected function getTargetAttribute($value) {
        return (string) $value;
    }

    protected function getSourceAnchorAttribute() {
        return $this->getAttribute('id');
    }

    protected function getTargetAnchorAttribute() {
        return $this->getAttribute('id');
    }
}
