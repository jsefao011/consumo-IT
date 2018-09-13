<?php

namespace App\Models\Consumo\Table;

class SI_MAE_PRIBILEGIO_Table
{
    const TABLE = 'si_mae_pribilegio';
    public static $ALL_COLUMN = ['p_mae_pribilegio','f_mae_grupo','f_mae_acceso','f_mae_estado'];
    const p_mae_pribilegio = 'p_mae_pribilegio';
    const f_mae_grupo = 'f_mae_grupo';
    const f_mae_acceso = 'f_mae_acceso';
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
