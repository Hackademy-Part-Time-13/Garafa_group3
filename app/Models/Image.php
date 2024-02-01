<?php

namespace App\Models;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    protected $casts = [
        'labels' => 'array'
    ];

    public function ad() {
        return $this->belongsTo(Ad::class);
    }

    public static function getUrlByFilePath($filepath, $w = null, $h = null){
        if(!$w && !$h){
            return Storage::url($filepath);

        }
        $path = dirname($filepath);
        $fileName = basename($filepath);
        $file = "{$path}/crop_{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }
    
    public function getUrl($w = null, $h = null){
        return Image::getUrlByFilePath($this->path, $w, $h);
    }

    public function delete()
    {
        // Elimina il file dallo storage prima di eliminare la riga nel database
        Storage::delete($this->path);

        parent::delete();
    }
}
