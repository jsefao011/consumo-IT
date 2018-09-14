<?php
namespace App\Data\Consumo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Consumo\SI_MAE_GRUPO
 *
 * @property int $p_mae_grupo
 * @property string|null $no_grupo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_GRUPO whereNoGrupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Data\Consumo\SI_MAE_GRUPO wherePMaeGrupo($value)
 * @mixin \Eloquent
 */
class SI_MAE_GRUPO extends Model
{
    protected $table = 'si_mae_grupo';
    protected $primaryKey = 'p_mae_grupo';
    protected $fillable = ['p_mae_grupo','no_grupo'];
    public $timestamps = false;

}
