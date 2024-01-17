<?php

namespace App\Models;

use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

 protected $table = "book";


    protected $fillable = [
        "id_book",
        "id_petugas",
        "author_name",
        "deskripsi",
        "publisher_name",
        "image_cover",
        "status",

    ];


   
 
    public function petugas()
    {
        return $this->belongsTo(UserController::class);
    }
}
