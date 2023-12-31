<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'matricule', 'telephone'];
   // protected $guarded = ['nom', 'prenom', 'matricule', 'telephone']; pour inhiber
}
