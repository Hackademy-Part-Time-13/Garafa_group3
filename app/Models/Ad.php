<?php

namespace App\Models;

use App\Models\Image;
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

    public function images(){
        return $this->hasMany(Image::class);
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

    public static function toBeRevisionedCount(){
        return Ad::where('is_accepted',null)
        ->where('user_id', '!=', auth()->user()->id)->get()->count();
    }
    
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
}
