<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model {

	protected $table = 'contrato';
	protected $fillable = ['Codigo_Contrato','N_Aprovacion','Fecha_Auto','Comprobacion','Fecha_Expedicion','Fecha_Inicio','Fecha_Final','Descripcion_Contrato','Dias_Trabajados','Meses_Trbajados','Valor_Mes','Archivo','ID_modo','ID_Cargo','ID_CDP','Estado'];
	protected $guarded = ['id'];

}
