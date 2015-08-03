<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clausula extends Model {

	protected $table = 'clausula';
	protected $fillable = ['formato','estado'];
	protected $guarded = ['id'];

}
