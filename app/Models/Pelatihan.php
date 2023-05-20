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
    protected $fillable = ['gambar', 'nama', 'category_id', 'deskripsi', 'awal_pendaftaran', 'akhir_pendaftaran', 'awal_pelatihan', 'akhir_pelatihan'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
