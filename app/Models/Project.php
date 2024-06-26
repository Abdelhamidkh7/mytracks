<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Track;


class Project extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "image_url"];
    //define the relationship between the project and the tracks
    public function tracks(): HasMany
    {
        //return the tracks that belong to the project
        return $this->hasMany(Track::class);
    }
    public function user(): BelongsTo
    {
        //return the user that owns the project
        return $this->belongsTo(User::class);
    }
}
