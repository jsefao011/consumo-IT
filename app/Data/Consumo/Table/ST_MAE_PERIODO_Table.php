<?php

namespace App\Data\Consumo\Table;

class ST_MAE_PERIODO_Table
{
    const TABLE = 'st_mae_periodo';
    public static $ALL_COLUMN = ['p_mae_periodo','no_periodo','ci_perido'];
    const p_mae_periodo = 'p_mae_periodo';
    const no_periodo = 'no_periodo';
    const ci_perido = 'ci_perido';

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
