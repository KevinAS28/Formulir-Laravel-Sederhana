<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelForm extends Model
{
    protected $table = "formulir";
    protected $fillable = ["nama", "umur"];
}
