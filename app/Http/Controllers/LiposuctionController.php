<?php

namespace App\Http\Controllers;


class LiposuctionController extends BaseController
{
    public $custom_header, $custom_body;

    public function __construct()
    {
        ## Available Locales
        $available_locales = [
            ['locale' => 'en', 'name' => 'English'],
        ];
        $this->data['available_locales'] = $available_locales;

        ## API Information
        $api_information = [
            'token' => "HD4QDSXNkjt7jbwtF1C6526xb6Cp9weRQmHMkzNX",
            'url' => "https://medical.mezesoft.com/api/form",
            'landing_id' => 28,
        ];
        $this->data['api_information'] = $api_information;

        ## Custom Header Codes
        $this->custom_header = "
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WWM54G3');</script>
            <!-- End Google Tag Manager -->

            <!-- Yandex.Metrika counter -->
            <script type=\"text/javascript\" >
               (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
               m[i].l=1*new Date();
               for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
               k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
               (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

               ym(90345430, \"init\", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
               });
            </script>
            <noscript><div><img src=\"https://mc.yandex.ru/watch/90345430\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
        ";

        ## Custom Body Codes
        $this->custom_body = "
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-WWM54G3\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        ";

        $this->languageCheck();
    }

    public function home()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'liposuction';
        $this->data['service'] = 'Liposuction';
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
                ["question" => "Am I a good candidate for lipo?", "answer" => "Good candidates for liposuction have areas of excess localized fat that can be easily removed without a lot of weight changes. If you are healthy, but still have stubborn fat that you cannot get rid of with exercise, liposuction may be a good option for you."],
                ["question" => "Will I be in pain after the procedure?", "answer" => "Liposuction is a surgical procedure, so there will be some swelling, pain and discomfort in the first few days of your recovery. Most people report feeling post-op pain up to four or five days, but it subsides quickly, and any lingering discomfort can be managed easily."],
                ["question" => "Liposuction can help you lose weight", "answer" => "The reality is that most patients only lose about two to five pounds in total. The best candidates, in fact, are generally within 30 percent of a healthy weight range and have localized fat pockets they would like to reduce."],
                ["question" => "How much does liposuction cost in Turkey?", "answer" => "Liposuction in Turkey is a popular procedure used by both men and women who are struggling to lose the last few stubborn pockets of fat. The costs of liposuction in Turkey are attractive when compared with UK prices."],
                ["question" => "What are the options that shape the areas of the body?", "answer" => "There are multiple surgical procedures, one of them is liposuction, also known as Fat Removal. Fat removal is a surgical procedure via which the person can achieve his/her dreamed body by getting rid of the excess fat. Fat removal is generally performed while the patient is under general anesthetics. General anesthetics are more preferred by surgeons because general anesthetics are more comfortable for the patients for the long-term recovery process. Not only general anesthetics provide a comfortable surgical procedure for the patient but the surgeons as well."],
                ["question" => "Is Liposuction Safe?", "answer" => "The procedure has the same risks as any other operation. However, every precaution and planning is made before the operation and patients do not need to worry about the risks."],
                ["question" => "Liposuction can treat cellulite", "answer" => "Cellulite is not simply an irregular pocket of fat – it occurs when subcutaneous fat pushes connective tissue bands beneath the skin, causing those characteristic dimples and bumps. Because liposuction is only able to remove soft, fatty tissue (and does not directly affect the skin or other tissues), the fibrous connecting bands causing cellulite are not altered."],
            ];
            $testimonials = [
                ["gender" => "female", "name" => "Ophelia A.", "title" => "", "comment" => " Having successfully completed my aesthetic, Assoc. Dr. Thanks to Dağhan Işık. My post-operative period went very well. I followed the advice given. I didn't have much pain. I can say that I am better now."],
                ["gender" => "female", "name" => "Jenny H.", "title" => "", "comment" => "I am quite happy with the results. I feel more aesthetic and better. I did not have much pain as I followed the advice given after the surgery."],
                ["gender" => "female", "name" => "Kasey I.", "title" => "", "comment" => "I immediately bought a plane ticket and flew to Istanbul for my plastic surgery. After the airport, a vehicle picked me up and dropped me off at my hotel. After a nice stay, my surgery process started right away. The surgery was very successful and the results were very satisfactory."],
                ["gender" => "female", "name" => "Sandy R.", "title" => "", "comment" => "I came to Turkey from abroad to have an operation and I encountered a truly professional service. After VIP services and a nice operation, I returned to my country."],
            ];
        }

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.home', compact('data', 'faqs', 'testimonials', 'beforeAfterPhotos'));
    }

    public function gallery()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'liposuction';
        $this->data['service'] = 'Liposuction';
        $this->data['adLocale'] = 'EN';
        $this->data['phoneText'] = '90 (555) 879 77 71';
        $this->data['phoneLink'] = '905558797771';
        $this->data['email'] = 'nazliyildirim@istanbulaestheticsurgery.com';

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
            ['imageName' => 'ba10.jpg'],
            ['imageName' => 'ba11.jpg'],
        ];

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.gallery', compact('data', 'beforeAfterPhotos'));
    }
}
