<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public function defaultPermissions()
    {
        return [
            'create',
            'edit_user',
            'update_user',
        ];
    }
}
