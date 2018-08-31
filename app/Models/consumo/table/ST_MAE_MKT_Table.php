<?php

namespace App\Entities\local2\table;

class ST_MAE_MKT_Table
{
    const TABLE = 'st_mae_mkt';
    public static $ALL_COLUMN = ['p_mae_mkt','no_mkt','ip','us_mkt','psw_mkt','f_mae_estado'];
    const p_mae_mkt = 'p_mae_mkt';
    const no_mkt = 'no_mkt';
    const ip = 'ip';
    const us_mkt = 'us_mkt';
    const psw_mkt = 'psw_mkt';
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
