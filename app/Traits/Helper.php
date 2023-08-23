<?php

namespace App\Traits;


trait Helper
{

    /*
     * Komplex dizilerde arama yapan ve sonucun key değerini döndüren fonksiyon
     */
    public function getArrayKey($key, $array, $search)
    {
        foreach ($array as $k => $v) {
            if ($key == null) {
                if ($v == $search) {
                    return $k;
                }
            } else {
                if ($v[$key] == $search) {
                    return $k;
                }
            }
        }
        return null;
    }

    /*
     * Kullanıcı locale değerine göre
     */
}
