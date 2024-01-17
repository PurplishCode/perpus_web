<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    use Notifiable;

    protected $table = 'users';
    
    protected $fillable = ['username','email','password','full_name','address', 'role'];

    protected function type(): Attribute{return new Attribute(get: fn ($value) =>  ["pengguna", "petugas", "admin"][$value],);}

public function gallery()
{
return $this->hasOne(Gallery::class, "id_book");    
}
}
