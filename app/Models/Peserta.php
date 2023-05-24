<?php

namespace App\Models;

use App\Models\PesertaDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Peserta extends Authenticatable
{
    use HasFactory;

    protected $guard = 'peserta';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peserta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'nik', 'tempat_lahir', 'tanggal_lahir', 'email', 'password', 'no_telp', 'alamat'];

    public function peserta_detail()
    {
        return $this->hasOne(PesertaDetail::class);
    }
}
