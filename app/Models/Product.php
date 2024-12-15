<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Contoh model dengan hubungan
class Product extends Model {
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
