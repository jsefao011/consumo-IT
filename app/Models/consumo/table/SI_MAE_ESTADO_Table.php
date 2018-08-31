<?php

namespace App\Entities\local2\table;

class SI_MAE_ESTADO_Table
{
    const TABLE = 'si_mae_estado';
    public static $ALL_COLUMN = ['p_mae_estado','obj_estado','val_estado','des_estado'];
    const p_mae_estado = 'p_mae_estado';
    const obj_estado = 'obj_estado';
    const val_estado = 'val_estado';
    const des_estado = 'des_estado';

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
