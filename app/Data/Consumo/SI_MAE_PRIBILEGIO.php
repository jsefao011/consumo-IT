<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_MAE_PRIBILEGIO
 *
 * @property int $p_mae_pribilegio
 * @property int|null $f_mae_grupo
 * @property int|null $f_mae_acceso
 * @property int|null $f_mae_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PRIBILEGIO whereFMaeAcceso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PRIBILEGIO whereFMaeEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PRIBILEGIO whereFMaeGrupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_PRIBILEGIO wherePMaePribilegio($value)
 * @mixin \Eloquent
 */
class SI_MAE_PRIBILEGIO extends Model
{
    protected $table = 'si_mae_pribilegio';
    protected $primaryKey = 'p_mae_pribilegio';
    protected $fillable = ['p_mae_pribilegio','f_mae_grupo','f_mae_acceso','f_mae_estado'];
    public $timestamps = false;

}
