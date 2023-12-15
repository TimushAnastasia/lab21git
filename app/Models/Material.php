<?php

// app/Models/Material.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['name', 'description', 'price', 'quantity'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}