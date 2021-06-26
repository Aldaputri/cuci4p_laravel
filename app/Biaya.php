<?php

namespace App;

use App\Biaya;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    protected $table        = 'biaya';
    protected $fillable     = ['id_biaya', 'jenis', 'biaya'];
    protected $primarykey   = 'id_biaya';
    public $timestamps      = false;
}
