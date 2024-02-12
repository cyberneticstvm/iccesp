<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abstracts extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function authors()
    {
        return $this->hasMany(Author::class, 'abstract_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id', 'id');
    }
}
