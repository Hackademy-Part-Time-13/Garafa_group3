<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id',
    ];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'description' =>$this->description
        ];
        return $array;
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }
}
