<?php

namespace App\Data\Consumo\Table;

class SI_MAE_ACCESO_Table
{
    const TABLE = 'si_mae_acceso';
    public static $ALL_COLUMN = ['p_mae_acceso','no_acceso','url_acceso','f_mae_acceso','ico_acceso'];
    const p_mae_acceso = 'p_mae_acceso';
    const no_acceso = 'no_acceso';
    const url_acceso = 'url_acceso';
    const f_mae_acceso = 'f_mae_acceso';
    const ico_acceso = 'ico_acceso';

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
