<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_MAE_ACCESO
 *
 * @property int $p_mae_acceso
 * @property string|null $no_acceso
 * @property string|null $url_acceso
 * @property int|null $f_mae_acceso
 * @property string|null $ico_acceso
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ACCESO whereFMaeAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ACCESO whereIcoAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ACCESO whereNoAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ACCESO wherePMaeAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_ACCESO whereUrlAcceso($value)
 * @mixin \Eloquent
 */
class SI_MAE_ACCESO extends Model
{
    protected $table = 'si_mae_acceso';
    protected $primaryKey = 'p_mae_acceso';
    protected $fillable = ['p_mae_acceso','no_acceso','url_acceso','f_mae_acceso','ico_acceso'];
    public $timestamps = false;

}
