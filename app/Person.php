<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function getGenderAttribute($attribute)
    {
        return [
            'm' => 'Laki-Laki',
            'f' => 'Perempuan'
        ][$attribute];
    }

    public function getDistrictAttribute($attribute)
    {
        return [
            0 => 'Sokan',
            1 => 'Tanah Pinoh Barat',
            2 => 'Tanah Pinoh',
            3 => 'Sayan',
            4 => 'Belimbing Hulu',
            5 => 'Belimbing',
            6 => 'Pinoh Selatan',
            7 => 'Nanga Pinoh',
            8 => 'Pinoh Utara',
            9 => 'Ella Hilir',
            10 => 'Menukung'
        ][$attribute];
    }

    public function getStatusAttribute($attribute)
    {
        return [
            0 => 'Pengawasan',
            1 => 'Aman',
            2 => 'Dirawat',
            3 => 'Negatif',
            4 => 'Meninggal ?',
            5 => 'Positif',
            6 => 'Meninggal Positif',
            7 => 'Sembuh'
        ][$attribute];
    }

    public function logs()
    {
        return $this->hasMany('App\Log', 'person_id', 'id');
    }
}
