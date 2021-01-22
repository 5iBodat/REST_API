<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
// use Jenssegers\Auth\Authenticatable as AuthenticatableTrait;
// use Jenssegers\Contracts\Auth\Authenticatable as AuthenticatableContracts;


class Package extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
}
