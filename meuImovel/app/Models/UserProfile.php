<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile'; // é porque deu erro do nome da tabela estar no plural, entao
    // ou fazia isso ou mudava o nome da tabela no banco.

    protected $fillable = [
        'phone', 'mobile_phone', 'about', 'social_networks',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
