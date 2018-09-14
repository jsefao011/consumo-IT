<?php

namespace App\Data\Consumo\Table;

class SI_MAE_ENTIDAD_Table
{
    const TABLE = 'si_mae_entidad';
    public static $ALL_COLUMN = ['p_mae_entidad','no_entidad','ruc_entidad','f_mae_estado','f_mae_ldap'];
    const p_mae_entidad = 'p_mae_entidad';
    const no_entidad = 'no_entidad';
    const ruc_entidad = 'ruc_entidad';
    const f_mae_estado = 'f_mae_estado';
    const f_mae_ldap = 'f_mae_ldap';

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
