<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use AutoNumberTrait;

    protected $table = 'satuans';
    protected $guarded = [
    ];

    public function getAutoNumberOptions()
    {
        return [
            'no_reg' => [
                'format' => function () {
                    return 'UOM/' . date('Ymd') . '/?';
                },
                'length' => 3
            ]
        ];
    }
}
