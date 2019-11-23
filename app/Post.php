<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Call the table Name
    protected $table ='posts';

    //the primary key
    public $primaryKey='id';

    public $timestamps=true;
}
