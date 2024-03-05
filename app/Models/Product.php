<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    public function packages(){
        return $this->belongsToMany('App\Models\Package','Pivot table ');
    }
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function message() : BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
    use HasFactory;
}
