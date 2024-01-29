<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Manipulation; 
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Spatie\Image\Manipulations;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $fileName;
    private $path;

    public function __construct($filepath, $w, $h)
    {
        $this->path = dirname($filepath);
        $this->fileName  = basename($filepath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;

        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;
        
        $croppedimage = Image::load($srcPath)->crop(Manipulations::CROP_CENTER, $w,$h);
        
        $croppedimage->watermark(base_path('public/storage/images/watermark.png'))
            ->watermarkOpacity(50)
            ->watermarkHeight(40, Manipulations::UNIT_PERCENT)
            ->watermarkWidth(20, Manipulations::UNIT_PERCENT)
            ->watermarkPadding(5, 5, Manipulations::UNIT_PERCENT)->save($destPath);
            
            
    }
}
