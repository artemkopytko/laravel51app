<?php
/**
 * Created by PhpStorm.
 * User: artemkopytko
 * Date: 2/7/18
 * Time: 2:20 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	//	protected $fillable = ['title','body'];
	protected $guarded = ['none'];
}
