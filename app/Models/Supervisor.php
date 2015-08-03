<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model {

	protected $table = 'supervisor';
	protected $fillable = ['cedula','nombre','cargo','estado'];
	protected $guarded = ['id'];


}
