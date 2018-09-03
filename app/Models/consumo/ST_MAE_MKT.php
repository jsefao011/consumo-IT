<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\local2\ST_MAE_MKT
 *
 * @property int $p_mae_mkt
 * @property string|null $no_mkt
 * @property string|null $ip
 * @property string|null $us_mkt
 * @property string|null $psw_mkt
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereNoMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT wherePMaeMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT wherePswMkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\local2\ST_MAE_MKT whereUsMkt($value)
 * @mixin \Eloquent
 */
class ST_MAE_MKT extends Model
{
    protected $table = 'st_mae_mkt';
    protected $primaryKey = 'p_mae_mkt';
    protected $fillable = ['p_mae_mkt','no_mkt','ip','us_mkt','psw_mkt','f_mae_estado'];
    public $timestamps = false;

}
