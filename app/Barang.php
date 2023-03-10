<?php

namespace App;

use App\Brand;
use App\Katagori;
use App\Satuan;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use AutoNumberTrait;

    protected $table = 'barangs';
    protected $guarded = [
    ];

    public function getAutoNumberOptions()
    {
        return [
            'no_reg' => [
                'format' => function () {
                    return 'BRG/' . date('Ymd') . '/?';
                },
                'length' => 3
            ]
        ];
    }
    public function katagori()
    {
       return $this->belongsTo(Katagori::class);
    }
    public function satuan()
    {
       return $this->belongsTo(Satuan::class);
    }
    public function brand()
    {
       return $this->belongsTo(Brand::class);
    }
}
