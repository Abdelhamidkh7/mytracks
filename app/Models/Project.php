<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
}
