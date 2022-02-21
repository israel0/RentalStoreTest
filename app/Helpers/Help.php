<?php

namespace App\Helpers;

use Hashids\Hashids;

class Help 
{
  
    public static function getDefaultLogo()
    {
        return asset('dist/images/logo.svg');
    }

    
    public static function getDefaultUserImage()
    {
        return asset('dist/images/profile-13.jpg');
    }

    public static function getPublicUploadPath()
    {
        return 'uploads/';
    }

    public static function getUserUploadPath()
    {
        return 'uploads/'.date('Y').'/'.date('m').'/'.date('d').'/';
    }

    public static function getUploadPath($item_id)
    {
        return 'uploads/'.$item_id.'/';
    }

    public static function getFileMetaData($file)
    {
        //$dataFile['name'] = $file->getClientOriginalName();
        $dataFile['ext'] = $file->getClientOriginalExtension();
        $dataFile['type'] = $file->getClientMimeType();
        $dataFile['size'] = self::formatBytes($file->getSize());
        return $dataFile;
    }

    public static function formatBytes($size, $precision = 2)
    {
        $base = log($size, 1024);
        $suffixes = array('B', 'KB', 'MB', 'GB', 'TB');

        return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
    }

    public static function displaySuccess($msg)
    {
        return '
              <div class="alert alert-success alert-bordered">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button> '.
        $msg.'  </div>
                ';
    }

    public static function hash($id) 
    {
        $date = date('dMY').'rentalstore';
        $hash = new Hashids($date, 14);
        return $hash->encode($id);
    }

    public static function decodeHash($str, $toString = true)
    {
        $date = date('dMY').'rentalstore';
        $hash = new Hashids($date, 14);
        $decoded = $hash->decode($str);
        return $toString ? implode(',', $decoded) : $decoded;
    }


    

}