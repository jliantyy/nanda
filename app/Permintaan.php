<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use AutoNumberTrait;

    protected $table = 'permintaans';
    protected $fillable = [
        'barang_id',
        'jumlah',
        'total',
        'status'
    ];
    protected $guarded = [
        'id'
    ];

    public function getAutoNumberOptions()
    {
        return [
            'kode_permintaan' => [
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