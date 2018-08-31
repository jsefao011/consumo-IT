<?php
namespace App\Entities\local2;

use Illuminate\Database\Eloquent\Model;

class ST_MAE_MKT extends Model
{
    protected $table = 'st_mae_mkt';
    protected $primaryKey = 'p_mae_mkt';
    protected $fillable = ['p_mae_mkt','no_mkt','ip','us_mkt','psw_mkt','f_mae_estado'];
    public $timestamps = false;

}
