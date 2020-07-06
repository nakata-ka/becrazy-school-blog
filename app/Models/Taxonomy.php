<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model {
    protected $table="taxonomy";

    public function posts() {
        return $this->belongsToMany('app\Models\Post','taxonomy_relationships');
    }
}
