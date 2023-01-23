<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'murid';

    protected $fillable = [
        'nama_lengkap',
        'nisn',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'asal_sekolah',
        'umur',
        'status',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'kebutuhan_khusus',
        'disabilitas',
        'nomor',
        'kip',
        'nama_ayah_kandung',
        'nama_ibu_kandung',
        'nama_wali',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
