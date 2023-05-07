<?php

namespace App\Observers;

/**
 * SignatureObserver
 *
 * @author      Muhammad Cahya
 * @copyright   Copyright (c) 2022, Myna Creative.
 */
class Signature
{
    /**
     * Add created_by and updated_by data when data created
     */
    public function creating($model): void
    {
        if (!isset($model->uuid)) {
            $model->uuid = str()->uuid();
        }
        if (!app()->runningInConsole()) {
            if (!isset($model->created_by)) {
                $model->created_by = $this->getId();
            }
            if (!isset($model->updated_by)) {
                $model->updated_by = $this->getId();
            }
        }
    }

    /**
     * Update updated_by field when data changed
     */
    public function updating($model): void
    {
        if (!app()->runningInConsole()) {
            if (!isset($model->updated_by)) {
                $model->updated_by = $this->getId();
            }
        }
    }

    /**
     * Get user id from authenticated user
     */
    public function getId(): int|null
    {
        return auth()->id() ?? null;
    }
}
