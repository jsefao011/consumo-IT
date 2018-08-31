<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class ST_HIS_CONTRATO extends Model
{
    protected $table = 'st_his_contrato';
    protected $primaryKey = 'p_his_contrato';
    protected $fillable = ['p_his_contrato','f_mae_activo','f_mae_area','f_mae_periodo','f_mae_encargado','des_det_contrato','min_tlf_det_contrato','cf_tlf_det_contrato','int_gb_tlf_det_contrato','sms_tlf_det_contrato','to_ldn_tlf_det_contrato','to_ldi_tlf_det_contrato','op_oper_tlf_det_contrato','to_ad_tlf_det_contrato','to_cf_tlf_det_contrato','pg_ent_tlf_det_contrato','f_det_contrato'];
    public $timestamps = false;

}
