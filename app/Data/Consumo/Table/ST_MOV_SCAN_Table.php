<?php

namespace App\Data\Consumo\Table;

class ST_MOV_SCAN_Table
{
    const TABLE = 'st_mov_scan';
    public static $ALL_COLUMN = ['p_mov_scan','sub_scan','baj_scan','tim_inicio_scan','tim_fin_scan','f_mae_area','f_mae_mkt','f_mae_proveedor'];
    const p_mov_scan = 'p_mov_scan';
    const sub_scan = 'sub_scan';
    const baj_scan = 'baj_scan';
    const tim_inicio_scan = 'tim_inicio_scan';
    const tim_fin_scan = 'tim_fin_scan';
    const f_mae_area = 'f_mae_area';
    const f_mae_mkt = 'f_mae_mkt';
    const f_mae_proveedor = 'f_mae_proveedor';

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
