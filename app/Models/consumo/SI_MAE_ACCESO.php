<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_ACCESO extends Model
{
    protected $table = 'si_mae_acceso';
    protected $primaryKey = 'p_mae_acceso';
    protected $fillable = ['p_mae_acceso','no_acceso','url_acceso','f_mae_acceso','ico_acceso'];
    public $timestamps = false;

}
