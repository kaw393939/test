<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Entity;
use App\Traits\EntityResources;

class Course extends Model

{
    use EntityResources;
    use Entity;


}
