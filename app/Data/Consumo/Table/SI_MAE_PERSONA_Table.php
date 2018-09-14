<?php

namespace App\Data\Consumo\Table;

class SI_MAE_PERSONA_Table
{
    const TABLE = 'si_mae_persona';
    public static $ALL_COLUMN = ['p_mae_persona','no_persona','ap_persona','dni_persona','tlf_persona'];
    const p_mae_persona = 'p_mae_persona';
    const no_persona = 'no_persona';
    const ap_persona = 'ap_persona';
    const dni_persona = 'dni_persona';
    const tlf_persona = 'tlf_persona';

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
