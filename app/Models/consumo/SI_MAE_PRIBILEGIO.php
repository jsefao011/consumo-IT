<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_PRIBILEGIO extends Model
{
    protected $table = 'si_mae_pribilegio';
    protected $primaryKey = 'p_mae_pribilegio';
    protected $fillable = ['p_mae_pribilegio','f_mae_grupo','f_mae_acceso','f_mae_estado'];
    public $timestamps = false;

}
