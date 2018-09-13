<?php

namespace App\Models\Consumo\Table;

class ST_MAE_DEPARTAMENTO_Table
{
    const TABLE = 'st_mae_departamento';
    public static $ALL_COLUMN = ['p_mae_departameto','nv_asinet_departamento','nv_zw_departamento'];
    const p_mae_departameto = 'p_mae_departameto';
    const nv_asinet_departamento = 'nv_asinet_departamento';
    const nv_zw_departamento = 'nv_zw_departamento';

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
