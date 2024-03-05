<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;
    public $fillable=['name','phone','product_id'];

    public function product() : BelongsTo {
        return $this->belongsTo(Product::class);
    }

}
