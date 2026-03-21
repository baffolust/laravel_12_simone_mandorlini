<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'description',
        'country',
        'img'

    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


}
