<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pelatihan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'gambar', 'nama', 'deskripsi', 'awal_pendaftaran', 'akhir_pendaftaran', 'awal_pelatihan', 'akhir_pelatihan', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function peserta_detail()
    {
        return $this->hasMany(PesertaDetail::class);
    }
}
