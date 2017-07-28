<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {
	 //protected $connection = 'mongodb';


    protected $collection = 'users';

}