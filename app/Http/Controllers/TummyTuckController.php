<?php

namespace App\Http\Controllers;


class TummyTuckController extends BaseController
{
    public $custom_header, $custom_body;

    public function __construct()
    {
        ## Available Locales
        $available_locales = [
            ['locale' => 'en', 'name' => 'English'],
            ['locale' => 'tr', 'name' => 'Türkçe'],
        ];
        $this->data['available_locales'] = $available_locales;

        ## API Information
        $api_information = [
            'token' => "e0Ecu2Q3rJE9YAsBt0TBmtg1IH3hTWI9YvZi3PQZ",
            'url' => "https://medical.mezesoft.com/api/form",
            'landing_id' => 26,
        ];
        $this->data['api_information'] = $api_information;

        ## Custom Header Codes
        $this->custom_header = "
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-P99P5QB');</script>
            <!-- End Google Tag Manager -->

            <!-- Yandex.Metrika counter -->
            <script type=\"text/javascript\" >
               (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
               m[i].l=1*new Date();
               for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
               k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
               (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

               ym(90345413, \"init\", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
               });
            </script>
            <noscript><div><img src=\"https://mc.yandex.ru/watch/90345413\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
        ";

        ## Custom Body Codes
        $this->custom_body = "
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-P99P5QB\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        ";

        $this->languageCheck();
    }

    public function home()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'tummy-tuck';
        $this->data['service'] = 'Tummy Tuck';
        $this->data['adLocale'] = 'EN';
        $this->data['phoneText'] = '90 (555) 879 77 71';
        $this->data['phoneLink'] = '905558797771';
        $this->data['email'] = 'nazliyildirim@istanbulaestheticsurgery.com';

        ## $faqs ve $testimonials için daha mantıklı bir şey düşüneceğim. şimdilik böyle kullanabilirsin
        $faqs = [];
        $testimonials = [];
        $beforeAfterPhotos = [
            ['imageName' => 'ba1.jpg'],
            ['imageName' => 'ba2.jpg'],
            ['imageName' => 'ba3.jpg'],
            ['imageName' => 'ba4.jpg'],
            ['imageName' => 'ba5.jpg'],
            ['imageName' => 'ba6.jpg'],
        ];
        if ($this->data['userLocale'] == 'en') {
            $faqs = [
                ["question" => "Will I have a lot of pain after tummy tuck surgery and how much will my movements be restricted?", "answer" => "Tightening the abdominal muscles may cause restrictions in the first few days after surgery. However, after 1 week, patients can easily return to their daily lives. they can return."],
                ["question" => "Will I get rid of stretch marks after tummy tuck surgery?", "answer" => "In tummy tuck surgery, sagging skin and cracks under the belly button will also be removed."],
                ["question" => "Can I get pregnant after tummy tuck surgery?", "answer" => "It is okay to get pregnant 2 years after tummy tuck surgery."],
                ["question" => "Are the results of tummy tuck surgery permanent?", "answer" => "As long as the patients pay attention to their diet, the results are permanent. However, with aging, as in the whole body, sagging of the abdominal skin occurs over time."],
                ["question" => "How long do I need to wear a corset?", "answer" => "A corset is worn between 4-6 weeks after the procedure. Special warnings will be given by your doctor during use."],
            ];
            $testimonials = [
                ["gender" => "female", "name" => "Ophelia A.", "title" => "", "comment" => " Having successfully completed my aesthetic, Assoc. Dr. Thanks to Dağhan Işık. My post-operative period went very well. I followed the advice given. I didn't have much pain. I can say that I am better now."],
                ["gender" => "female", "name" => "Jenny H.", "title" => "", "comment" => "I am quite happy with the results. I feel more aesthetic and better. I did not have much pain as I followed the advice given after the surgery."],
                ["gender" => "female", "name" => "Kasey I.", "title" => "", "comment" => "I immediately bought a plane ticket and flew to Istanbul for my plastic surgery. After the airport, a vehicle picked me up and dropped me off at my hotel. After a nice stay, my surgery process started right away. The surgery was very successful and the results were very satisfactory."],
                ["gender" => "female", "name" => "Sandy R.", "title" => "", "comment" => "I came to Turkey from abroad to have an operation and I encountered a truly professional service. After VIP services and a nice operation, I returned to my country."],
            ];
        }
       else if ($this->data['userLocale'] == 'tr') {
           $this->data['adLocale'] = 'TR';
           $this->data['phoneText'] = '+90 (555) 879 77 71';
           $this->data['phoneLink'] = '905558797771';
           $faqs = [
               ["question" => "Karın germe ameliyatı sonrası ağrım çok olacak mı ve hareketlerim ne kadar kısıtlanacak mı?", "answer" => "Karın kaslarının sıkılması ameliyattan sonraki ilk birkaç gün kısıtlamalara neden olabilir. Ancak 1 hafta sonra hastalar rahatlıkla günlük hayatlarına dönebilirler."],
               ["question" => "Karın germe ameliyatı sonrası çatlaklardan kurtulur muyum?", "answer" => "Karın Germe ameliyatında sarkık cilt ile birlikte göbek deliğinin altında kalan çatlaklar da giderilecektir."],
               ["question" => "Karın germe ameliyatı olduktan sonra hamile kalabilir miyim?", "answer" => "Karın germe ameliyatından 2 yıl sonra hamile kalınmasında bir sakınca yoktur."],
               ["question" => "Karın germe ameliyatı sonuçları kalıcı mıdır?", "answer" => "Hastalar diyetlerine dikkat ettiği  sürece sonuçlar kalıcıdır. Ancak yaşlanmayla beraber tüm vücutta olduğu gibi zamanla karın derisinde de sarkmalar olur."],
               ["question" => "Ne kadar süre korse giymem gerekiyor?", "answer" => "İşlem sonrası 4- 6  hafta arasında korse giyilir. Kullanım sırasında doktorunuz tarafından size özel uyarılar yapılacaktır."],
           ];
            $testimonials = [
                ["gender" => "female", "name" => "Ophelia A.", "title" => "", "comment" => " Estetik ameliyatımı başarıyla tamamlayan Doç. Dr. Dağhan Işık'a teşekkürler. Ameliyat sonrası dönemim çok iyi geçti. Verilen tavsiyelere uydum ve çok ağrım olmad."],
                ["gender" => "female", "name" => "Jenny H.", "title" => "", "comment" => "Sonuçlardan oldukça memnunum. Kendimi daha estetik ve daha iyi hissediyorum. Ameliyat sonrası verilen tavsiyelere uyduğum için çok ağrım olmadı."],
                ["gender" => "female", "name" => "Kasey I.", "title" => "", "comment" => "İstanbul'da estetik ameliyatı olmak için hemen bir uçak bileti aldım. Havaalanında özel bir araç beni karşıladı ve otelime bıraktı. Güzel bir konaklamanın ardından hemen ameliyat sürecim başladı. Ameliyat çok başarılı geçti ve sonuçlar çok tatmin ediciydi."],
                ["gender" => "female", "name" => "Sandy R.", "title" => "", "comment" => "Türkiye'ye yurtdışından ameliyat olmak için geldim ve gerçekten profesyonel bir hizmetle karşılaştım. VIP hizmetleri ve güzel bir operasyondan sonra ülkeme döndüm."],
            ];
        }

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.home', compact('data', 'faqs', 'testimonials', 'beforeAfterPhotos'));
    }

    public function gallery()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'tummy-tuck';
        $this->data['service'] = 'Tummy Tuck';
        $this->data['adLocale'] = 'EN';
        $this->data['phoneText'] = '90 (555) 879 77 71';
        $this->data['phoneLink'] = '905558797771';
        $this->data['email'] = 'nazliyildirim@istanbulaestheticsurgery.com';

        if ($this->data['userLocale'] == 'tr') {
            $this->data['adLocale'] = 'TR';
        }

        $beforeAfterPhotos = [
            ['imageName' => 'ba1.jpg'],
            ['imageName' => 'ba2.jpg'],
            ['imageName' => 'ba3.jpg'],
            ['imageName' => 'ba4.jpg'],
            ['imageName' => 'ba5.jpg'],
            ['imageName' => 'ba6.jpg'],
            ['imageName' => 'ba7.jpg'],
            ['imageName' => 'ba8.jpg'],
            ['imageName' => 'ba9.jpg'],
        ];

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.gallery', compact('data', 'beforeAfterPhotos'));
    }
}
