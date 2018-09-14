<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_CAB_CONTRATO
 *
 * @property int $p_cab_contrato
 * @property string|null $fe_emision_contrato
 * @property string|null $fe_vencimiento_contrato
 * @property string|null $cod_contrato
 * @property string|null $des_contrato
 * @property int|null $f_mae_proveedor
 * @property int|null $f_mae_entidad
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO whereCodContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO whereDesContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO whereFMaeEntidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO whereFMaeProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO whereFeEmisionContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO whereFeVencimientoContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_CAB_CONTRATO wherePCabContrato($value)
 * @mixin \Eloquent
 */
class SI_CAB_CONTRATO extends Model
{
    protected $table = 'si_cab_contrato';
    protected $primaryKey = 'p_cab_contrato';
    protected $fillable = ['p_cab_contrato','fe_emision_contrato','fe_vencimiento_contrato','cod_contrato','des_contrato','f_mae_proveedor','f_mae_entidad','f_mae_estado'];
    public $timestamps = false;

}
