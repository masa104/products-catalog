<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Priority;
use App\Traits\IsPublic;

class Spec extends Model
{
    use IsPublic;
    use Priority;
}
