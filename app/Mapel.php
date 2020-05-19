<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //
    protected $table = 'mapel';
    protected $fillable = ['nama_mapel', 'kode', 'kkm'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'nilai')->withPivot(['h1','h2','h3','h4','h5','h6','h7','h8','hph','hpts','hpas','hpa']);
        //->withPivot(['nilai']);
    }
}
