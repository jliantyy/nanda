<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Katagori extends Model
{
    use AutoNumberTrait;

    protected $table = 'katagoris';
    protected $guarded = [
    ];

    public function getAutoNumberOptions()
    {
        return [
            'no_reg' => [
                'format' => function () {
                    return 'KTG/' . date('Ymd') . '/?';
                },
                'length' => 3
            ]
        ];
    }
}
