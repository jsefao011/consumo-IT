<?php

namespace App\Entities\local2\table;

class SI_REL_EMPLEADO_Table
{
    const TABLE = 'si_rel_empleado';
    public static $ALL_COLUMN = ['f_mae_persona','f_mae_entidad','f_mae_grupo'];
    const f_mae_persona = 'f_mae_persona';
    const f_mae_entidad = 'f_mae_entidad';
    const f_mae_grupo = 'f_mae_grupo';

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
