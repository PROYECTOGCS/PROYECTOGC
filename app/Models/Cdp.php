<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cdp extends Model {
	
	protected $table = 'Cdp';
	protected $fillable = ['id_cdp','id_area','fechaExp','fechai','fechaf','descripcion','comprobante','presupuesto','estado'];
	protected $guarded = ['id'];

}
