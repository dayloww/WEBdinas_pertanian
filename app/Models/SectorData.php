<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorData extends Model
{
    use HasFactory;

    protected $fillable = ['sector_id', 'label', 'value', 'unit', 'year', 'month'];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
