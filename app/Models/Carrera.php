<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table = "config_races_day";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        // 'name','day','time_start','time_final','premio','cantidad'
        // 'name','start','end'
        'inicio','final','id_ax','id_px','px_1','px_2','race_state'
    ];

    public function Status()
    {
        return $this->belongsTo(EstadoPremio::class,'race_state');
    }
    // public function Ticket()
    // {
    //     return $this->
    // }
    public function Premio()
    {
        return $this->belongsTo(TipoPremio::class,'id_px');
    }

}