<?php

namespace App\Entities\local2\table;

class ST_MAE_ENCARGADO_Table
{
    const TABLE = 'st_mae_encargado';
    public static $ALL_COLUMN = ['p_mae_encargado','crg_encargado','f_mae_estado','f_mae_persona'];
    const p_mae_encargado = 'p_mae_encargado';
    const crg_encargado = 'crg_encargado';
    const f_mae_estado = 'f_mae_estado';
    const f_mae_persona = 'f_mae_persona';

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
