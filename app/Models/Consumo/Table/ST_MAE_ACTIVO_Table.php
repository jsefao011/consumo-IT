<?php

namespace App\Models\Consumo\Table;

class ST_MAE_ACTIVO_Table
{
    const TABLE = 'st_mae_activo';
    public static $ALL_COLUMN = ['p_mae_activo','des_activo','f_mae_estado'];
    const p_mae_activo = 'p_mae_activo';
    const des_activo = 'des_activo';
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
