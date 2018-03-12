<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Entity;
use App\Traits\EntityResources;

class Event extends Model
{
    use Entity;
    use EntityResources;
}
