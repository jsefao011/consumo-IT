<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\ST_MAE_DEPARTAMENTO
 *
 * @property int $p_mae_departameto
 * @property string|null $nv_asinet_departamento
 * @property string|null $nv_zw_departamento
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_DEPARTAMENTO whereNvAsinetDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_DEPARTAMENTO whereNvZwDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_DEPARTAMENTO wherePMaeDepartameto($value)
 * @mixin \Eloquent
 */
class ST_MAE_DEPARTAMENTO extends Model
{
    protected $table = 'st_mae_departamento';
    protected $primaryKey = 'p_mae_departameto';
    protected $fillable = ['p_mae_departameto','nv_asinet_departamento','nv_zw_departamento'];
    public $timestamps = false;

}
