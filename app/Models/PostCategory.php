<?php

namespace App\Models;

use App\Traits\Signature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class PostCategory extends Model
{
    use HasFactory, SoftDeletes, Signature, NodeTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_id',
        'slug',
        'name',
        'description',
        'created_by',
        'updated_by',
    ];
}
