<?php
/** Model dari tabel student */
/** Model ini digunakan pada halaman biodata siswa */

namespace App;

use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    //Using Mass Assignment from Laravel
    protected $guarded = ['id'];

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class, 'nilai')->withPivot(['h1','h2','h3','h4','h5','h6','h7','h8','hph','hpts','hpas','hpa']);
    }
}


