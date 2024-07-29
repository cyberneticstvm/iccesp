<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperWithoutAbstract extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id', 'id');
    }
}
