<?php

namespace App;

use App\individuo;
use Illuminate\Database\Eloquent\Model;

class hogar_seccion_cuatro extends Model
{
	protected $table = 'hogar_seccion_cuatros';
    protected $fillable = ['hogar_id', 'individuo_id', 'CH01', 'CH02', 'CH03', 'CH04', 'CH05', 'CH06', 'CH07', 'CH08', 'CH08_A', 'CH08_B', 'CH08_C', 'CH08_D', 'CH09', 'CH10', 'CH10_E', 'CH10_M', 'CH10_G', 'CH11', 'CH12', 'CH13', 'CH14', 'CH15', 'CH15_Cod', 'CH16', 'CH16_Cod', 'CH24', 'CH25'];

    public function individuo()
    {
        return $this->belongsTo(individuo::class, 'individuo_id', 'id');
    }
}
