<?php

namespace App\Traits;

use App\Models\User as Model;
use App\Observers\Signature as SignatureObserver;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Signature Trait
 *
 * @author      Muhammad Cahya
 * @copyright   Copyright (c) 2023, Myna Creative.
 */
trait Signature
{
    /**
     * The "booting" method of the Signature.
     */
    public static function bootSignature(): void
    {
        static::observe(new SignatureObserver);
    }

    /**
     * Get the user that owns the current model.
     */
    public function createdUser(): BelongsTo
    {
        return $this->belongsTo(Model::class, 'created_by');
    }

    /**
     * Get the user that owns the current model.
     */
    public function updatedUser(): BelongsTo
    {
        return $this->belongsTo(Model::class, 'updated_by');
    }
}
