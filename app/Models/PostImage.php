<?php

namespace App\Models;

use App\Traits\Signature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostImage extends Model
{
    use HasFactory, SoftDeletes, Signature;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_id',
        'thumbnail',
        'sequence',
        'description',
        'created_by',
        'updated_by',
    ];

    /**
     * Get the post that owns the post image.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
