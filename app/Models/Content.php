<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'data_content';

    protected $fillable = [
        'nama_content',
        'deskripsi_content'
    ];

    public function funnel(){
        return $this->hasMany(Funnel::class);
    }

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
