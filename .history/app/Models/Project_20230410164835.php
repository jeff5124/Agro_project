<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function espece()
    {
        return $this->belongsTo(Espece::class);
    }
    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }
}
