<?php

namespace App\Models\Consumo\Table;

class SI_MAE_LDAP_Table
{
    const TABLE = 'si_mae_ldap';
    public static $ALL_COLUMN = ['p_mae_ldap','flt_ldap'];
    const p_mae_ldap = 'p_mae_ldap';
    const flt_ldap = 'flt_ldap';

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
