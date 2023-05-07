<?php

namespace App\Models;

use App\Traits\Signature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostType extends Model
{
    use HasFactory, SoftDeletes, Signature;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'name',
        'description',
        'created_by',
        'updated_by',
    ];
}
