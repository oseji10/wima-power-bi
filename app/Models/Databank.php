<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databank extends Model
{
    use HasFactory;
    public $table = 'databank';
    protected $fillable = ['userId', 'name'];
    // protected $primaryKey = 'languageId';

   
}
