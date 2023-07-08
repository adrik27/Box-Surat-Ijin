<?php

namespace App\Models;

use App\Models\User;
use App\Models\Status;
use App\Models\KategoriSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function User()
    {
        return $this->hasMany(User::class, 'User_id');
    }

    public function KategoriSurat()
    {
        return $this->belongsTo(KategoriSurat::class, 'KategoriSurat_id');
    }

    public function Status()
    {
        return $this->belongsTo(Status::class, 'Status_id');
    }
}
