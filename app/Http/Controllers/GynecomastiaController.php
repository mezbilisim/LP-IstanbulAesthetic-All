<?php

namespace App\Http\Controllers;


class GynecomastiaController extends BaseController
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
            'token' => "3XasA8gWa42z7Ho3RFaAgqQ8G8Lj4CZ8k4f7qmqQ",
            'url' => "https://medical.mezesoft.com/api/form",
            'landing_id' => 45,
        ];
        $this->data['api_information'] = $api_information;

        ## Custom Header Codes
        $this->custom_header = "
         <!-- Google Tag Manager -->
                <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-M47GDCK');</script>
                <!-- End Google Tag Manager -->

         <!-- Yandex.Metrika counter -->
<script type=\"text/javascript\" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

   ym(92738017, \"init\", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/92738017\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- /Yandex.Metrika counter -->
        ";

        ## Custom Body Codes
        $this->custom_body = "
           <!-- Google Tag Manager (noscript) -->
        <noscript>
        <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-M47GDCK\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->";

        $this->languageCheck();
    }

    public function home()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'gynecomastia';
        $this->data['service'] = 'Gynecomastia Surgery';
        $this->data['adLocale'] = 'EN';
        $this->data['phoneText'] = '+90 (555) 879 77 71';
        $this->data['phoneLink'] = '905558797771';
        $this->data['email'] = 'nazliyildirim@istanbulaestheticsurgery.com';

        ## $faqs ve $testimonials için daha mantıklı bir şey düşüneceğim. şimdilik böyle kullanabilirsin
        $faqs = [];
        $testimonials = [];

        $medicalTrip= [
            ['imageName' => 'istanbul1.jpg'],
            ['imageName' => 'istanbul2.jpg'],
            ['imageName' => 'istanbul3.jpg'],
            ['imageName' => 'istanbul4.jpg'],
            ['imageName' => 'istanbul5.jpg'],

        ];

      $beforeAfterPhotos = [ /*
            ['imageName' => 'ba1.jpg'],
            ['imageName' => 'ba2.jpg'],
            ['imageName' => 'ba3.jpg'],
            ['imageName' => 'ba4.jpg'],
            ['imageName' => 'ba5.jpg'],
            ['imageName' => 'ba6.jpg'],*/
        ];
        if ($this->data['userLocale'] == 'en') {
            $faqs = [
                ["question" => "What is the correct method for gynecomastia surgery?", "answer" => "In gynecomastia operations, I use surgery + vaser liposuction, that is, a combination of two techniques, in order to prevent this problem from recurring and to flatten the area in a proportional and aesthetic way, and I mostly recommend this treatment technique. With the bodytite technique I use while removing fat, I make the chest muscle shadow (in suitable patients) become noticeable. In this way, more athletic and masculine results appear after the operation.  In glandular type enlargement (ie in people with enlarged breast tissue), it is important to remove the gland tissues with a half-moon incision. Otherwise, the gynecomastia problem carries the risk of recurrence after 5-6 years. The vast majority of these patients are those who are tried to be treated only with liposuction. As a surgeon who deals between 10 and 20 gynecomastia cases per month, my preference is to combine both methods. In other words, an incision of 4-5 millimeters is made in a part close to the armpit. "],
                ["question" => "I am researching the surgery, what should I pay attention to?", "answer" => "First of all, gynecomastia surgery is one of the aesthetic cases that must be performed by a plastic surgeon. It is very important to ideally shape the area with the technique of removing gland tissues without damaging the muscles and then vaser liposuction. As a result, it should not be forgotten that it is an aesthetic operation. So the first point is to research a good plastic surgeon. The second important point is to question how often the plastic surgeon you have received information from performs this operation and the satisfaction rate. Third, of course, it is very important that you receive service in a good hospital. A fully-fledged, state-of-the-art operating room is very important."],
                ["question" => "Will gynecomastia recur in the future?", "answer" => "We provide a lifetime warranty for Gynecomastia operations performed by Plastic Surgery Specialist Assoc. Dr. Dağhan Işık. We can easily say that the gynecomastia problem will not repeat. This guarantee only breaks down by heavy hormone drugs used in sex change. You will completely get rid of the gynecomastia problem since gynecomastia tissue will never be left inside."],
                ["question" => "I decided to have the surgery, how is the process going?", "answer" => "First of all, you come to our hospital with an empty stomach on the date of surgery (without eating and drinking after midnight). Then we do tests for your surgery. The results of the tests come within 45 minutes. He operation takes 45 minutes and is performed under general anesthesia. You will be taken to your room after the operation and you will be discharged from the hospital on the evening of the same day after the last checks."],
                ["question" => "How many days should I stay in Istanbul? (Overseas Guest)", "answer" => "3 days. First day examination and analysis. 2nd day operation. 3rd day return. Gynecomastia surgery is an operation where we can follow the recovery process with photos via WhatsApp and the recovery process is comfortable."],
                ];
            $testimonials = [
                ["gender" => "female", "name" => "Christine O'Sullivan", "title" => "", "comment" => "Such a professionally friendly, fantastic team of people i would highly recommend. Getting cosmetic surgery abroad is a scary thought, and with all the advertising and offers, it is difficult to know who to trust. I had contacted hundreds of doctors and clinics but was fortunate to talk to a lady who recommended Doc Dr Daghan Isik. He is so welcoming, friendly, and professional. Not only ask but listen and be honest and upfront with what can be safely achieved. It was heartwarming when he asked for my parents' number so he could update them during the surgery of how it was going and the stages they were at. So considerate of him. In addition to all these doctors' fantastic qualities and skills is a remarkable lady ... The Angel by his side Nurse Nazli. So professional, supportive and compared to other clinics and services she knows the best things to do in any eventuality and provides a solution to every problem and an answer to every question you may have. Part of the reason for getting this surgery was to love my body again. It was so hard to even look at it myself, let alone let anyone see me with no clothes on. She made this so much easier. Highly recommend! Be treated like an individual with their own cosmetic goals instead of a number on a target board. Thank you for making mine and my families week so much easier. You are the hidden gems of Istanbul"],
                ["gender" => "female", "name" => "Birgit Detscher", "title" => "", "comment" => "I have travelled to Istanbul twice, from Canada, to undergo aesthetic surgery by Dr. Isik. The results of both surgeries exceeded my expectations. Dr.Isik and his team went over and above their call of duty, answering my questions, REALLY listening to me, my expectations, starting with my first inquiry, and continuing after care, long after I had returned to Canada. Expert skills, sophisticated, safe procedures, and state of the art facilities. Dr. Isik is very kind, easy to talk to, never evasive."],
                ["gender" => "female", "name" => "Billie Wright", "title" => "", "comment" => " I Had My Surgery Done By Dr Daghan Isik only 5days ago however my results are already showing to be amazing, I cannot wait to see the full results once fully healed I cannot fault any of the team as they have all been amazing from the start. I would highly recommend 👌"],
                ["gender" => "female", "name" => "George", "title" => "", "comment" => "My experience was 5 stars from the moment I submitted my contact info and find you can get your procedure done alongside another treatment, that was such a good bonus. Dr. Dağhan IŞIK is such a nice person, very smart, and someone who you can talk to about your surgery and any doubt you can have. It was so lovely visiting Istanbul, and I have no doubt I to repeat my experience if I need to."],
                ["gender" => "female", "name" => "Ana", "title" => "", "comment" => "Had a mummy makeover recently. The surgeon Dr. Dağhan IŞIK was extremely professional and has done a great job. So happy with the results!!! Special thanks to Berfin, my travel coordinator to Erdem , My after care Specialist , Asil and Salieha , the hosts and to all the great team. I highly recomend Clinic Center to anyone . You will be highly looked after . Thank you Clinic Centre for great experience!!! Will definetly be back."],
                ["gender" => "female", "name" => "Ms Syron", "title" => "", "comment" => "My entire experience from my first phone call to now I am back home after surgery was 👌💯percent . I honestly could not be happier . Every member of staff from co ordinator Damla my interpreter Volkan n my AMAZING TALENTED COMPASSIONATE SURGEON DAGHAN ISIK n his lovey assistant . The nursing care amazing . The whole package was really positive n my result far better than I anticipated . Many many thanks team . Leonie"],
                ["gender" => "female", "name" => "Samantha Rogers", "title" => "", "comment" => "I couldn’t recommend surgery tr enough I was very scared travelling to a different country to get my mummy make over, but from the minute we arrived in turkey we where treated with nothing but kindness our translator was amazing and met us at the hotel before we left for the surgery stayed with us the hotel and also transferred us back and forth the hotel and hospital for all the check ups. The surgeon dr.daghan isik and his team where amazing talked me through the procedure before I went down and the results are absolutely amazing. I was cared for in a 5* way in a way you would never think possible and have been assured my after care continues when I arrive back to the uk. I have had my final check up today and I couldn’t be happier with the results thank you surgery tr you really have made my dream come true."],
                ["gender" => "female", "name" => "Abby Holder", "title" => "", "comment" => "I’ve just settled back in at home and just wanted to message you to say how amazing the service I received from surgery tr was. I was so nervous coming to a different country to have surgery but from the time I got picked up until the time I got dropped of back at the airport the service has been second to non… dr daghan isik made me feel at ease the moment I met him and I’m so so happy with my results so far he has completely changed my life and his 2 assistants were amazing too… I had emre and hamza as my patient co ordinators most of my stay and they both were very helpful especially emre he is so full of life and just a pleasure to be around. Nothing was ever to much for him. Selin has also been absolutely amazing always at the end of the phone to answer any questions and to see if I’m ok… Thank you so much for everything and I will highly recommend surgery tr to anyone. P.s the hotel was amazing too and the staff there was very nice and helpful 😊"],
            ];
        }

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.home', compact('data', 'faqs', 'testimonials', 'beforeAfterPhotos', 'medicalTrip'));
    }

    public function gallery()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'gynecomastia';
        $this->data['service'] = 'Gynecomastia Surgery';
        $this->data['adLocale'] = 'EN';
        $this->data['phoneText'] = '+90 (555) 879 77 71';
        $this->data['phoneLink'] = '905558797771';
        $this->data['email'] = 'nazliyildirim@istanbulaestheticsurgery.com';




        $beforeAfterPhotos = [
          /*  ['imageName' => 'ba1.jpg'],
            ['imageName' => 'ba2.jpg'],
            ['imageName' => 'ba3.jpg'],
            ['imageName' => 'ba4.jpg'],
            ['imageName' => 'ba5.jpg'],
            ['imageName' => 'ba6.jpg'],
            ['imageName' => 'ba7.jpg'],
            ['imageName' => 'ba9.jpg'],
            ['imageName' => 'ba10.jpg'],
            ['imageName' => 'ba11.jpg'],
            ['imageName' => 'ba12.jpg'],
            ['imageName' => 'ba13.jpg'],
            ['imageName' => 'ba14.jpg'],
            ['imageName' => 'ba15.jpg'],
            ['imageName' => 'ba16.jpg'],
            ['imageName' => 'ba17.jpg'], */
        ];

        $medicalTrip= [
            ['imageName' => 'istanbul1.jpg'],
            ['imageName' => 'istanbul2.jpg'],
            ['imageName' => 'istanbul3.jpg'],
            ['imageName' => 'istanbul4.jpg'],
            ['imageName' => 'istanbul5.jpg'],

        ];
        if ($this->data['userLocale'] == 'it') {
            $this->data['phoneText'] = '+90 (501) 277 74 71';
            $this->data['phoneLink'] = '905012777471';
        }

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.gallery', compact('data', 'beforeAfterPhotos', 'medicalTrip'));
    }
}
