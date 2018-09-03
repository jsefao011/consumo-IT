<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\ST_MAE_PERIODO
 *
 * @property int $p_mae_periodo
 * @property string|null $no_periodo
 * @property int|null $ci_perido
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_PERIODO whereCiPerido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_PERIODO whereNoPeriodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_PERIODO wherePMaePeriodo($value)
 * @mixin \Eloquent
 */
class ST_MAE_PERIODO extends Model
{
    protected $table = 'st_mae_periodo';
    protected $primaryKey = 'p_mae_periodo';
    protected $fillable = ['p_mae_periodo','no_periodo','ci_perido'];
    public $timestamps = false;

}
