<?php

namespace App\Data\Consumo\Table;

class SI_MAE_AREA_Table
{
    const TABLE = 'si_mae_area';
    public static $ALL_COLUMN = ['p_mae_area','no_area','des_area','jer_area','f_mae_encargado','f_mae_entidad','f_mae_estado','f_mae_area','f_mae_departameto','f_mae_mkt'];
    const p_mae_area = 'p_mae_area';
    const no_area = 'no_area';
    const des_area = 'des_area';
    const jer_area = 'jer_area';
    const f_mae_encargado = 'f_mae_encargado';
    const f_mae_entidad = 'f_mae_entidad';
    const f_mae_estado = 'f_mae_estado';
    const f_mae_area = 'f_mae_area';
    const f_mae_departameto = 'f_mae_departameto';
    const f_mae_mkt = 'f_mae_mkt';

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
