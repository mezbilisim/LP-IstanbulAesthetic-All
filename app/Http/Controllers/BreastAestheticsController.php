<?php

namespace App\Http\Controllers;


class BreastAestheticsController extends BaseController
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
            'token' => "wb6i2L3Y54vCTviet3114bSoH9dYKQC1HfCiPoNi",
            'url' => "https://medical.mezesoft.com/api/form",
            'landing_id' => 25,
        ];
        $this->data['api_information'] = $api_information;

        ## Custom Header Codes
        $this->custom_header = "
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TL48ZKX');</script>
            <!-- End Google Tag Manager -->

            <!-- Yandex.Metrika counter -->
            <script type=\"text/javascript\" >
               (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
               m[i].l=1*new Date();
               for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
               k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
               (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

               ym(90345397, \"init\", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
               });
            </script>
            <noscript><div><img src=\"https://mc.yandex.ru/watch/90345397\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
        ";

        ## Custom Body Codes
        $this->custom_body = "
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TL48ZKX\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        ";

        $this->languageCheck();
    }

    public function home()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'breast-aesthetics';
        $this->data['service'] = 'Breast Aesthetics';
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
                ["question" => "When does the patient return to her daily life after breast aesthetic surgery?", "answer" => "Breast aesthetic surgeries can be divided into two as breast reduction and breast augmentation. Breast lift is a combination of these. In breast augmentation and breast reduction surgeries, our patients usually return to work within 3-4 days. However, there is a little less pain in breast reduction operations and these patients are expected to recover more easily. Breast augmentation surgeries may cause a more compressing feeling. However, this feeling can also subside in 7-10 days. Breast aesthetic surgeries are not very painful procedures since the breast is an external organ, it does not have vital vessels, nerves and has no tissue to sense the pain critically. Therefore, it is unnecessary to be afraid of breast reduction surgeries. By trusting our doctor, you can get back to work quickly after a breast surgery."],
                ["question" => "Will there be loss of sensation at the nipple?", "answer" => "There may be loss of sensation on the nipple following the surgery. In spite of this, often the feeling slowly returns. However, loss of sensation in breast reduction surgeries is risky."],
                 ["question" => "How long will I have pain?", "answer" => "Although you may have pain for a few days, most of our patients are not uncomfortable with this. After the surgery, you will be prescribed the appropriate painkiller which greatly reduces your pains."],
                ["question" => "How to get natural but beautiful results in breast augmentation?", "answer" => "Natural results in breast augmentation are due to several important factors. First of all your body should be evaluated very well by your doctor and the size and shape of the silicone to be used should be determined very carefully. It will not be very difficult for physicians who are busy with breast surgeries to identify them. Particularly, it is an important key to success of individuals to share the appearance they desire with their doctor and the exact overlap of the physician and patient expectations at a realistic point."],
                ["question" => "What is the life span of silicones in breast enlargement surgery?", "answer" => "Silicone has no expiration date, you can use it for life. However, as people age, a deformation, sagging, and a decrease in existing breast tissue are observed, which are not due to silicone. In such cases, the replacement of the prosthesis or chest recovery operations can be planned."],
                ["question" => "How are the prices determined in breast aesthetic operations?", "answer" => "The factors that determine the prices in breast aesthetic operations are the elements of the operation. In other words, how well the hospital where the surgery will take place, how good are the materials used in the surgery, how much the silicon, which is going to be used in the surgery if breast augmentation procedure is carried out, known, whether or not the silicone is the product of a good company and can be used for life are the basic factors determine the price."],
                ["question" => "Is there any loss of sensation after breast aesthetic operation?", "answer" => "The loss of sensation after breast augmentation operations varies greatly from person to person. In particular, the loss of sensation in breast augmentation surgery is a very rarely seen problem and therefore our patients have very few complaints. Especially in breast augmentation operations, the nipple is not affected and loss of sensation is not seen when they are performed under the breast. Apart from that, the type of surgical technique in breast reduction operations is one of the most important processes regarding the loss of sensation of the nipple. With the use of appropriate techniques, there should not be any change in the nipple sensitivity since we preserve the place of the nerves located in the nipple and pay great attention to them during the surgery. Especially in breast reduction surgeries, very large breast impose a risk of decreased nipple sensation."],
                ["question" => "Do breast operations prevent breastfeeding?", "answer" => "Breast surgeries, especially breast augmentation operations, will not prevent pregnancy and breastfeeding in the future. This can be explained like this: some of our patients undergo breast augmentation operations after giving birth and they have given birth and breastfed. Afterwards, we perform breast augmentation operations. Our patients can breastfeed their other baby very easily."],
                ["question" => "How long does the recovery take?", "answer" => "Patients usually spend 1 night in the hospital following the procedure. There may be slight bruises and swelling on breasts and surrounding areas and they last around 1 to 2 weeks. Swelling of the breasts can continue for a few weeks. You can start your normal activity again in 1 or 2 days. However, you should avoid heavy exercises for 3-4 weeks following your surgery."],
                ["question" => "Which drugs will I use after the surgery?", "answer" => "Usually, two different groups of painkillers will be given to you as prescriptions. You can take one or the other to control your pain. An oral antibiotic is also prescribed."],
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
                ["question" => "Meme estetiği ameliyatı sonrası günlük hayata ne zaman dönebilirim?", "answer" => "Meme estetiği ameliyatları meme küçültme ve meme büyütme olarak ikiye ayrılabilir. Göğüs dikleştirme bunların bir kombinasyonudur. Meme büyütme ve meme küçültme ameliyatlarında hastalarımız genellikle 1 hafta içinde işlerine dönerler. Meme ameliyatları diğer estetik ameliyatlara oran ile ağrılı ameliyatlar değildirler."],
                ["question" => "Meme ucunda his kaybı olur mu?", "answer" => "Ameliyat sonrası meme ucunda his kaybı olabilir. Ancak bu his kaybı yavaş yavaş geri döner."],
                ["question" => "Ne kadar ağrım olacak?", "answer" => "Birkaç gün ağrınız olsa da hastalarımızın çoğu bu ağrıdan rahatsız olmuyor. Ameliyattan sonra size ağrılarınızı büyük ölçüde azaltan uygun ağrı kesiciler reçete edilecektir."],
                ["question" => "Meme büyütmede doğal ama güzel sonuçlar nasıl alınır?", "answer" => "Göğüs büyütmede doğal sonuçlar birkaç önemli faktöre bağlıdır. Öncelikle vücudunuz doktorunuz tarafından çok iyi değerlendirilmeli ve kullanılacak silikonun boyutu ve şekli çok dikkatli bir şekilde belirlenmelidir. Özellikle bireylerin arzu ettikleri görünümü, hekim ve hasta beklentilerinin birebir örtüşmesini gerçekçi bir noktada doktoruyla paylaşmaları başarının önemli bir anahtarıdır."],
                ["question" => "Meme büyütme ameliyatında silikonların ömrü ne kadardır?", "answer" => "Silikonun son kullanma tarihi yoktur, ömür boyu kullanabilirsiniz. Ancak yaş ilerledikçe silikona bağlı olmayan deformasyon, sarkma ve var olan meme dokusunda azalma gözlenir. Bu gibi durumlarda protezin değiştirilmesi veya göğüs dikleştirme operasyonları planlanabilir."],
                ["question" => "Meme estetiği operasyonlarında fiyatlar nasıl belirlenir?", "answer" => "Meme estetiği operasyonlarında fiyatları belirleyen unsurlar operasyonun unsurlarıdır. Yani ameliyatın yapılacağı hastanenin ne kadar iyi olduğu, ameliyatta kullanılan malzemelerin ne kadar iyi olduğu, meme büyütme işlemi yapılırsa ameliyatta kullanılacak silikonun ne kadar iyi olacağı (silikonun iyi bir firmanın ürünü olup olmaması ve ömür boyu kullanılabilmesi) fiyatı belirleyen temel unsurlardır."],
                ["question" => "Meme estetiği operasyonu sonrası his kaybı olur mu?", "answer" => "Meme büyütme operasyonları sonrası his kaybı kişiden kişiye büyük farklılıklar gösterir. Özellikle meme büyütme ameliyatında his kaybı çok nadir görülen bir sorundur ve bu nedenle hastalarımızın şikayetleri çok azdır. Özellikle meme büyütme operasyonlarında meme altından yapıldığında meme başı etkilenmez ve his kaybı görülmez. Bunun dışında meme küçültme ameliyatlarında uygulanan cerrahi tekniğin türü meme ucunun his kaybı ile ilgili en önemli süreçlerden biridir. Uygun tekniklerin kullanılması ile meme ucunda bulunan sinirlerin yerini koruduğumuz ve ameliyat sırasında onlara çok dikkat ettiğimiz için meme ucunda hassasiyette herhangi bir değişiklik olmamalıdır. Özellikle meme küçültme ameliyatlarında çok büyük meme, meme ucu hissinde azalma riski taşır.	"],
                ["question" => "Meme ameliyatları emzirmeyi engeller mi?", "answer" => "Özellikle meme büyütme operasyonları, ileride hamileliği ve emzirmeyi engellemeyecektir. "],
                ["question" => "Ne zaman iyileşirim?", "answer" => "Hastalar işlem sonrası genellikle 1 gece hastanede kalırlar. Göğüslerde ve çevresinde hafif morluklar ve ödem olabilir ve bunlar 1-2 hafta kadar sürer. Göğüslerideki ödem birkaç hafta devam edebilir. 1 veya 2 gün sonra normal aktivitenize tekrar başlayabilirsiniz. Ancak ameliyattan sonraki 3-4 hafta boyunca ağır egzersizlerden kaçınmalısınız."],
                ["question" => "Ameliyattan sonra hangi ilaçları kullanacağım?", "answer" => "Genellikle size reçete olarak iki farklı ağrı kesici ilaç verilecektir. Ağrılarınızı kontrol altına almak için birini tercih etmeniz yeterli olacaktır."],
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
        $this->data['landing_slug'] = 'breast-aesthetics';
        $this->data['service'] = 'Breast Aesthetics';
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

        ];
        if ($this->data['userLocale'] == 'tr') {
            $this->data['adLocale'] = 'TR';
        }
        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.gallery', compact('data', 'beforeAfterPhotos'));
    }
}
