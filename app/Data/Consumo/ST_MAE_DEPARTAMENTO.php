<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\ST_MAE_DEPARTAMENTO
 *
 * @property int $p_mae_departameto
 * @property string|null $nv_asinet_departamento
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_MAE_DEPARTAMENTO whereNvAsinetDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\ST_MAE_DEPARTAMENTO wherePMaeDepartameto($value)
 * @mixin \Eloquent
 */
class ST_MAE_DEPARTAMENTO extends Model
{
    protected $table = 'st_mae_departamento';
    protected $primaryKey = 'p_mae_departameto';
    protected $fillable = ['p_mae_departameto','nv_asinet_departamento'];
    public $timestamps = false;

}
