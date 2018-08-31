<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class ST_MAE_ACTIVO extends Model
{
    protected $table = 'st_mae_activo';
    protected $primaryKey = 'p_mae_activo';
    protected $fillable = ['p_mae_activo','des_activo','f_mae_estado'];
    public $timestamps = false;

}
