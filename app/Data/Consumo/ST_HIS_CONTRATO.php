<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\ST_HIS_CONTRATO
 *
 * @property int $p_his_contrato
 * @property int|null $f_mae_activo
 * @property int|null $f_mae_area
 * @property int|null $f_mae_periodo
 * @property int|null $f_mae_encargado
 * @property string|null $des_det_contrato
 * @property float|null $min_tlf_det_contrato
 * @property float|null $cf_tlf_det_contrato
 * @property float|null $int_gb_tlf_det_contrato
 * @property float|null $sms_tlf_det_contrato
 * @property float|null $to_ldn_tlf_det_contrato
 * @property float|null $to_ldi_tlf_det_contrato
 * @property float|null $op_oper_tlf_det_contrato
 * @property float|null $to_ad_tlf_det_contrato
 * @property float|null $to_cf_tlf_det_contrato
 * @property float|null $pg_ent_tlf_det_contrato
 * @property int|null $f_det_contrato
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereCfTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereDesDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereFDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereFMaeActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereFMaeArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereFMaeEncargado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereFMaePeriodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereIntGbTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereMinTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereOpOperTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO wherePHisContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO wherePgEntTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereSmsTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereToAdTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereToCfTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereToLdiTlfDetContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_HIS_CONTRATO whereToLdnTlfDetContrato($value)
 * @mixin \Eloquent
 */
class ST_HIS_CONTRATO extends Model
{
    protected $table = 'st_his_contrato';
    protected $primaryKey = 'p_his_contrato';
    protected $fillable = ['p_his_contrato','f_mae_activo','f_mae_area','f_mae_periodo','f_mae_encargado','des_det_contrato','min_tlf_det_contrato','cf_tlf_det_contrato','int_gb_tlf_det_contrato','sms_tlf_det_contrato','to_ldn_tlf_det_contrato','to_ldi_tlf_det_contrato','op_oper_tlf_det_contrato','to_ad_tlf_det_contrato','to_cf_tlf_det_contrato','pg_ent_tlf_det_contrato','f_det_contrato'];
    public $timestamps = false;

}
