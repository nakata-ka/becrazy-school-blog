<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    public function taxonomys() {
        return $this->belongsToMany('app\Models\Taxonomy','taxonomy_relationships');
    }
}
