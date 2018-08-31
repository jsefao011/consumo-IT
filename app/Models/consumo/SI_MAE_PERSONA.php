<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class SI_MAE_PERSONA extends Model
{
    protected $table = 'si_mae_persona';
    protected $primaryKey = 'p_mae_persona';
    protected $fillable = ['p_mae_persona','no_persona','ap_persona','dni_persona','tlf_persona'];
    public $timestamps = false;

}
