<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class ST_MOV_SCAN extends Model
{
    protected $table = 'st_mov_scan';
    protected $primaryKey = 'p_mov_scan';
    protected $fillable = ['p_mov_scan','sub_scan','baj_scan','tim_inicio_scan','tim_fin_scan','f_mae_area','f_mae_mkt','f_mae_proveedor'];
    public $timestamps = false;

}
