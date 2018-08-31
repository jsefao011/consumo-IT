<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class ST_MAE_DEPARTAMENTO extends Model
{
    protected $table = 'st_mae_departamento';
    protected $primaryKey = 'p_mae_departameto';
    protected $fillable = ['p_mae_departameto','nv_asinet_departamento','nv_zw_departamento'];
    public $timestamps = false;

}
