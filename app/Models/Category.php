<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PodCategory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'photo',
        'created_at',
        'updated_at',
    ];
    protected $table = 'category';

    public function podcategorys()
    {
        return $this->HasMany(\App\Models\PodCategory::class);
    }
}
