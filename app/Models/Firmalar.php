<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firmalar extends Model
{
    use HasFactory;

     protected $table = 'firmalar';
      


     protected $fillable = [
         'firma_tam_unvan',
         'firma_kisa_adi',
         'firma_sgk_no',
         'firma_tehlike_sinifi',
         'firma_tip',
     ];
}
