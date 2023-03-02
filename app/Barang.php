<?php

namespace App;

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
    public function category()
    {
       return $this->belongsTo(Category::class);
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