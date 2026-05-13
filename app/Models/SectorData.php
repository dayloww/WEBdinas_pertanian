<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorData extends Model
{
    use HasFactory;

    public const TYPE_UNGGAS = 'unggas';
    public const TYPE_TERNAK = 'ternak';
    public const TYPE_DAGING = 'daging';

    protected $fillable = [
        'sector_id',
        'dataset_type',
        'animal_name',
        'district_name',
        'show_on_admin_dashboard',
        'show_on_front',
        'front_order',
        'label',
        'value',
        'unit',
        'source',
        'year',
        'month',
    ];

    protected $casts = [
        'value' => 'float',
        'year' => 'integer',
        'month' => 'integer',
        'show_on_admin_dashboard' => 'boolean',
        'show_on_front' => 'boolean',
        'front_order' => 'integer',
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public static function datasetTypeOptions(): array
    {
        return [
            self::TYPE_UNGGAS => 'Unggas',
            self::TYPE_TERNAK => 'Ternak',
            self::TYPE_DAGING => 'Daging',
        ];
    }

    public static function districtOptions(): array
    {
        return [
            'Manganitu Selatan' => 'Manganitu Selatan',
            'Tatoareng' => 'Tatoareng',
            'Tamako' => 'Tamako',
            'Tabukan Selatan' => 'Tabukan Selatan',
            'Tabukan Selatan Tengah' => 'Tabukan Selatan Tengah',
            'Tabukan Selatan Tenggara' => 'Tabukan Selatan Tenggara',
            'Tabukan Tengah' => 'Tabukan Tengah',
            'Manganitu' => 'Manganitu',
            'Tahuna' => 'Tahuna',
            'Tahuna Timur' => 'Tahuna Timur',
            'Tahuna Barat' => 'Tahuna Barat',
            'Tabukan Utara' => 'Tabukan Utara',
            'Nusa Tabukan' => 'Nusa Tabukan',
            'Kepulauan Marore' => 'Kepulauan Marore',
            'Kendahe' => 'Kendahe',
        ];
    }
}
