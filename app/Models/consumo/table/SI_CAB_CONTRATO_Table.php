<?php

namespace App\Entities\local2\table;

class SI_CAB_CONTRATO_Table
{
    const TABLE = 'si_cab_contrato';
    public static $ALL_COLUMN = ['p_cab_contrato','fe_emision_contrato','fe_vencimiento_contrato','cod_contrato','des_contrato','f_mae_proveedor','f_mae_entidad','f_mae_estado'];
    const p_cab_contrato = 'p_cab_contrato';
    const fe_emision_contrato = 'fe_emision_contrato';
    const fe_vencimiento_contrato = 'fe_vencimiento_contrato';
    const cod_contrato = 'cod_contrato';
    const des_contrato = 'des_contrato';
    const f_mae_proveedor = 'f_mae_proveedor';
    const f_mae_entidad = 'f_mae_entidad';
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
