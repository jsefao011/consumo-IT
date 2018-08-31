<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_CAB_CONTRATO extends Model
{
    protected $table = 'si_cab_contrato';
    protected $primaryKey = 'p_cab_contrato';
    protected $fillable = ['p_cab_contrato','fe_emision_contrato','fe_vencimiento_contrato','cod_contrato','des_contrato','f_mae_proveedor','f_mae_entidad','f_mae_estado'];
    public $timestamps = false;

}
