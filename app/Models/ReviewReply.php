<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewReply extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'review_id',
        'user_id',
        'photo_id',
        'is_active',
        'body',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
