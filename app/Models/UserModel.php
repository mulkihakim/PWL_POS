<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'm_user';        //Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id';  //Mendefinisikan primary key dari tabel yang digunakan
    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password'
    ];
    protected $hidden = [
        'password',
    ];
    public function getJWTIdentifier(): string
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims(): array
    {
        return [];
    }
    public function level(): BelongsTo{
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
    public function stok(): HasMany
    {
        return $this->hasMany(StokModel::class, 'user_id', 'user_id');
    }
    public function penjualan(): HasMany
    {
        return $this->hasMany(PenjualanModel::class, 'user_id', 'user_id');
    }
}
