<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_REL_EMPLEADO extends Model
{
    protected $table = 'si_rel_empleado';
    protected $primaryKey = '';
    protected $fillable = ['f_mae_persona','f_mae_entidad','f_mae_grupo'];
    public $timestamps = false;

}
