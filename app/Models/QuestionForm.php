<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionForm extends Model
{
    public $timestamps = false;

    protected $table = "questionforms";
    use HasFactory;
}
