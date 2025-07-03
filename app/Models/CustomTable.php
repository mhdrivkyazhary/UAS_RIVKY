<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomTable extends Model
{
    use HasFactory;

    protected $table = 'custom_table_17';
    protected $fillable = [
        'field_1',
        'field_2',
        'description'];
}
