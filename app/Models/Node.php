<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;


    protected function getIdAttribute($value) {
        return (string) $value;
    }

    public function targetEdges()
    {
        return $this->hasMany(Edge::class, 'source');
    }

    public function sourceEdges()
    {
        return $this->hasMany(Edge::class, 'target');
    }
}
