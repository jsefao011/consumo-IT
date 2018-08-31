<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_GRUPO extends Model
{
    protected $table = 'si_mae_grupo';
    protected $primaryKey = 'p_mae_grupo';
    protected $fillable = ['p_mae_grupo','no_grupo'];
    public $timestamps = false;

}
