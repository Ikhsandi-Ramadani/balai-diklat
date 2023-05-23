<?php

namespace App\Models;

use App\Models\Peserta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesertaDetail extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peserta_detail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['peserta_id', 'fc_kk', 'fc_ktp', 'surat_sehat', 'surat_usaha', 'ijazah', 'foto'];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }
}
