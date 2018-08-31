<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_AREA extends Model
{
    protected $table = 'si_mae_area';
    protected $primaryKey = 'p_mae_area';
    protected $fillable = ['p_mae_area','no_area','des_area','jerarquia','f_mae_encargado','f_mae_entidad','f_mae_estado','f_mae_area','f_mae_departameto','f_mae_mkt'];
    public $timestamps = false;

}
