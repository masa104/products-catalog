<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\IsPublic;
use App\Traits\Priority;

class Feature extends Model
{
    use IsPublic;
    use Priority;
}
