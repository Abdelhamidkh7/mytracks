<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $fillable = ["name", "filename", "color","project_id"];
    //define the relationship between the track and the project
    public function project(): BelongsTo
    {
        //return the project that the track belongs to
        return $this->belongsTo(Project::class);
    }

}
