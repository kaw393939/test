<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EntityResources;
use App\Traits\Entity;
class Content extends Model
{
    protected $table = 'content';
    use EntityResources;
    use Entity;
        
}
