<?php

namespace Clean\Infra\Data\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
}
