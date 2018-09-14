<?php

namespace App\Data\Consumo\Table;

class SI_MAE_PROVEEDOR_Table
{
    const TABLE = 'si_mae_proveedor';
    public static $ALL_COLUMN = ['p_mae_proveedor','no_proveedor','ruc_proveedor','dir_proveedor','tlf_proveedor','f_mae_estado'];
    const p_mae_proveedor = 'p_mae_proveedor';
    const no_proveedor = 'no_proveedor';
    const ruc_proveedor = 'ruc_proveedor';
    const dir_proveedor = 'dir_proveedor';
    const tlf_proveedor = 'tlf_proveedor';
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
