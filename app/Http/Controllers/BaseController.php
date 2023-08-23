<?php

namespace App\Http\Controllers;

use App\Traits\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class BaseController extends Controller
{
    use Helper;

    public $data;

    public function languageCheck()
    {
        ## URL ile dil değiştirme işlemi yapılıp yapılmadığı kontrol ediliyor
        $selected_locale = request()->route()->parameter('locale');

        ## Desteklenen Diller. Kullanıcı konumuna göre dil bilgisi getirilecek
        $available_locales = $this->data['available_locales'];

        ## Linkteki locale değeri kullanılabilir değerlerde var ise key değerini döndürecek
        $locale_key = $this->getArrayKey('locale', $available_locales, $selected_locale);

        ## Sistemde Kayıtlı Ülkeler ve Telefon Kodları Getiriliyor
        $countries = config('country');

        ## Formların alıcıları belirleniyor. (array format)
        $receivers = [
            'mail@mezbilisim.com',
            #'nazliyildirim@istanbulaestheticsurgery.com'
        ];

        ## Reklamın Yayınlandığı Ülke Bilgisi Getiriliyor
        $ad_locale = null;

        ## IP ye göre kullanıcı konumu tespit ediliyor
        $geoip = geoip(request()->ip());

        if ($selected_locale && $locale_key !== null) {
            App::setLocale($available_locales[$locale_key]['locale']);

            ## Kullanıcı konum bilgileri tespit ediliyor
            $userLocale  = $available_locales[$locale_key]['locale'] ?? config('app.default_locale');
            $phoneLocale = $geoip['iso_code'];
            $userCountry = $geoip['country'] ?? null;
            $dial = isset($countries[$phoneLocale]) ? $countries[$phoneLocale]['phone_code'] : '+1';

            ## API Bilgileri Kontrol Ediliyor
            $api_information = $this->data['api_information'];
        } else {
            ## Cookielerde 'lang' değeri kontrol ediliyor.
            $cookie = Cookie::get('lang');

            ## Konum tespit edilemezse varsayılan dile ayarlanıyor. Genellikle localhost için
            if($geoip == null) {
                ## Cookie verisi varsa yönlendiriliyor
                if (!isset($cookie) && !empty($cookie)) {
                    App::setLocale($cookie);
                }

                ## Cookie yoksa varsayılan dile ayarlanıyor
                App::setLocale(config('app.default_locale'));
            }

            ## Kullanıcının ülkesinin iso kodu tespit ediliyor
            $iso_code = mb_strtolower($geoip['iso_code']);

            if (!empty($cookie)) {
                ## Kullanıcının önceden seçtiği dil ayarlandı
                App::setLocale($cookie);
            } else {
                ## Kullanıcının konumu desteklenen ülkeler ile karşılaştırılıyor
                if (in_array($iso_code, array_keys($available_locales))) {
                    ## Kullanıcı ülkesine göre dil ayarlanıyor
                    App::setLocale($iso_code);
                } else {
                    ## Kullanıcının dili desteklenenler arasında yoksa varsayılana ayarlanıyor
                    App::setLocale(config('app.default_locale'));
                }
            }

            ## Kullanıcı konum bilgileri tespit ediliyor
            $userLocale  = $available_locales[$locale_key]['locale'] ?? config('app.default_locale');
            $phoneLocale =  $geoip['iso_code'];
            $userCountry = $geoip['country'] ?? null;
            $dial = isset($countries[$phoneLocale]) ? $countries[$phoneLocale]['phone_code'] : '+1';

            ## API Bilgileri Kontrol Ediliyor
            $api_information = $this->data['api_information'];
        }

        ## Controllerda kullanılacak data oluşturulup isteğe ekleniyor
        $this->data = [
            'adPlatform'        => request()->source ?? '',
            'campaign_type'     => request()->campaign_type ?? '',
            'force_validate_campaign_type' => 'Max Performance',
            'ip'                => request()->ip(),
            'hostName'          => request()->getHost(),
            'adLocale'          => $ad_locale,
            'userLocale'        => $userLocale,
            'phoneLocale'       => $phoneLocale,
            'userCountry'       => $userCountry,
            'dial'              => $dial,
            'available_locales' => $available_locales,
            'api_information'   => $api_information,
            'receivers'         => $receivers
        ];
    }
}
