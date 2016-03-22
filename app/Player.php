<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //

    //protected $table = 'Players';

    /*protected $fillable=[
        'facebookId',
        'facebookName',
        'altitude',
        'score',
    ];
*/
    protected $hidden=[
        'created_at',
        'updated_at',
    ];

}
