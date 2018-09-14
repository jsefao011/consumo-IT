<?php

namespace App\Data\Consumo\Table;

class ST_DET_CONTRATO_Table
{
    const TABLE = 'st_det_contrato';
    public static $ALL_COLUMN = ['p_det_contrato','f_mae_activo','f_mae_area','f_cab_contrato','f_mae_periodo','f_mae_encargado','des_det_contrato','min_tlf_det_contrato','cf_tlf_det_contrato','int_gb_tlf_det_contrato','sms_tlf_det_contrato','to_ldn_tlf_det_contrato','to_ldi_tlf_det_contrato','op_oper_tlf_det_contrato','to_ad_tlf_det_contrato','to_cf_tlf_det_contrato','pg_ent_tlf_det_contrato','f_mae_estado'];
    const p_det_contrato = 'p_det_contrato';
    const f_mae_activo = 'f_mae_activo';
    const f_mae_area = 'f_mae_area';
    const f_cab_contrato = 'f_cab_contrato';
    const f_mae_periodo = 'f_mae_periodo';
    const f_mae_encargado = 'f_mae_encargado';
    const des_det_contrato = 'des_det_contrato';
    const min_tlf_det_contrato = 'min_tlf_det_contrato';
    const cf_tlf_det_contrato = 'cf_tlf_det_contrato';
    const int_gb_tlf_det_contrato = 'int_gb_tlf_det_contrato';
    const sms_tlf_det_contrato = 'sms_tlf_det_contrato';
    const to_ldn_tlf_det_contrato = 'to_ldn_tlf_det_contrato';
    const to_ldi_tlf_det_contrato = 'to_ldi_tlf_det_contrato';
    const op_oper_tlf_det_contrato = 'op_oper_tlf_det_contrato';
    const to_ad_tlf_det_contrato = 'to_ad_tlf_det_contrato';
    const to_cf_tlf_det_contrato = 'to_cf_tlf_det_contrato';
    const pg_ent_tlf_det_contrato = 'pg_ent_tlf_det_contrato';
    const f_mae_estado = 'f_mae_estado';

    public static function withTable($column){
          return self::TABLE.'.'.$column;
    }

    public static function aliseTable($alise){
          return self::TABLE.' as '.$alise;
    }

    public static function withAlise($alise, $column){
          return $alise.'.'.$column;
    }
    public static function allColumnTable(){
          foreach (self::$ALL_COLUMN as &$colum){
              $colum = self::TABLE . '.' . $colum;
          }
          return self::$ALL_COLUMN;
    }

    public static function allColumnTableWith($allColumn){
          foreach (self::$ALL_COLUMN as &$colum){
              $colum = self::TABLE . '.' . $colum;
          }
          return array_merge(self::$ALL_COLUMN, $allColumn);
    }
}
