<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlockModel extends Model
{
    protected $table='blocks';
    protected $fillable = ['linkfacebook','linkgoogleplus','linktwitter','phone1','phone2','adress','linkgooglemap','logo','introduce'];
    public $timestamps = true;
}
