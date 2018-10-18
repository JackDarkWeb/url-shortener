<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 25/09/2018
 * Time: 19:46
 */

namespace App\Services;

use App\models\url;

class UrlService extends url
{
    static function getRowForUrlOrCreateNewUrl($url)
    {
        $row = url::where('url', $url)->first();
        if ($row) {
            return $row;
        }
        $create = url::create([
            'url' => $url,
            'shortened' => url::getUniqueShortUrl()
        ]);
        if($create){
            return $create;
        }
    }
}