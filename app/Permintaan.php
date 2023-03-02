<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use AutoNumberTrait;

    protected $table = 'permintaans';
    protected $guarded = [
    ];

    public function getAutoNumberOptions()
    {
        return [
            'koe_permintaan' => [
                'format' => function () {
                    return 'REQ/' . date('Ymd') . '/?';
                },
                'length' => 3
            ]
        ];
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
} 