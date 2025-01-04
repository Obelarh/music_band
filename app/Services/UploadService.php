<?php

namespace App\Services;

use Illuminate\Support\Str;

class UploadService
{

    public static function upload($file, $folder,$name)
    {
        if ($file) {

            // Store on local server if file is not image or video

                $directoryPath = 'uploads/'.$folder;
                $publicURL = 'uploads/'.$folder;

                $fileName = $name;
                //$fileName = $name.'-'.Str::random(10).'.'.$file->extension();
            $send = $file->move($directoryPath, $fileName);

            if ($send) {
                //$asset = env('APP_URL');
                return $publicURL.'/'.$fileName; // str_replace('uploads/','',asset($publicURL.'/'.$fileName));
            }
        }

        return 'Error';
    }


}
