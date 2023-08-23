<?php

namespace App\Http\Controllers;


class MommyMakeoverController extends BaseController
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
            'token' => "T5aEAZ3hp8jW2Nzeevm0vkRAJbZ9oQsWaDBcL627",
            'url' => "https://medical.mezesoft.com/api/form",
            'landing_id' => 24,
        ];
        $this->data['api_information'] = $api_information;

        ## Custom Header Codes
        $this->custom_header = "
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MXPCV47');</script>
            <!-- End Google Tag Manager -->

            <!-- Yandex.Metrika counter -->
            <script type=\"text/javascript\" >
               (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
               m[i].l=1*new Date();
               for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
               k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
               (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

               ym(89863424, \"init\", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
               });
            </script>
            <noscript><div><img src=\"https://mc.yandex.ru/watch/89863424\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
        ";

        ## Custom Body Codes
        $this->custom_body = "
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MXPCV47\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        ";

        $this->languageCheck();
    }

    public function home()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'mommy-makeover';
        $this->data['service'] = 'Mommy Makeover Surgery';
        $this->data['adLocale'] = 'EN';
        $this->data['phoneText'] = '+90 (555) 879 77 71';
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

        $medicalTrip= [
            ['imageName' => 'istanbul1.jpg'],
            ['imageName' => 'istanbul2.jpg'],
            ['imageName' => 'istanbul3.jpg'],
            ['imageName' => 'istanbul4.jpg'],
            ['imageName' => 'istanbul5.jpg'],

        ];

        if ($this->data['userLocale'] == 'en') {
            $faqs = [
                ["question" => "Is Turkey a popular destination for mommy makeovers?", "answer" => "Yes, Turkey has become a sought-after destination for mommy makeovers due to its reputable clinics, experienced surgeons, and affordable prices. Many women from around the world choose Turkey as their preferred location for this procedure."],
                ["question" => "How much does a mommy makeover in Turkey typically cost?", "answer" => "The cost of a mommy makeover in Turkey can vary depending on several factors, including the specific procedures involved, the clinic or surgeon you choose, and additional services such as accommodation or transportation. However, on average, the cost of a mommy makeover in Turkey can be significantly lower compared to other countries, often offering cost savings of 50% or more. "],
                ["question" => "What is the quality of healthcare in Turkey for mommy makeovers?", "answer" => "Turkey has a well-established healthcare system and is known for its high standard of medical care. The country has numerous modern clinics and hospitals equipped with state-of-the-art facilities and advanced technology. Many Turkish surgeons are internationally trained and experienced in performing mommy makeovers, ensuring a high level of expertise and safety."],
                ["question" => "How do I choose a reliable clinic or surgeon for my mommy makeover in Turkey?", "answer" => "When selecting a clinic or surgeon in Turkey, it's important to research and choose a reputable and accredited facility. Look for clinics that have a good track record, positive patient reviews, and certifications from recognized organizations. Additionally, consider the surgeon's qualifications, experience, and specialization in mommy makeover procedures. "],
                ["question" => "What are the advantages of having a mommy makeover in Turkey?", "answer" => "Opting for a mommy makeover in Turkey offers several advantages. Besides the cost savings, you can benefit from the expertise of experienced surgeons who are skilled in performing mommy makeovers. Moreover, the opportunity to combine your procedure with a relaxing vacation in Turkey can make the overall experience more enjoyable."],


                ["question" => "Which surgeries can be combined in Mommy Makeover?", "answer" => "Mommy Makeover can include many different combinations of surgeries. The term ‘Mommy Makeover’ became very well-known since there are some deformities caused by pregnancy such as difficulty in losing weight that is gained during pregnancy or getting loose vaginal muscles, having to sag after rapid weight loss, etc. Under the term, Mommy Makeover surgeries such as breast reduction and lift, tummy tuck, liposuction, vaginoplasty, and labiaplasty can be combined and performed as long as it is suitable for the patient’s health as well."],
                ["question" => "What are the aesthetic problems that occur after giving birth?", "answer" => "It is quite normal for people to gain a certain amount of weight during pregnancy, and most of this weight is lost in a short time after giving birth. However, the abdominal muscles stretch during pregnancy and the stretch marks often cannot return to their original shape after giving birth. For this reason, the skin remains saggy, and the belly may look swollen as a result of stretched muscles. The breast may also sag during or after the breastfeeding period. In addition to all these, natural births may cause the vaginal muscles to stretch and loosen. Thanks to Mommy Makeover combined surgeries, all of these deformities can be changed into the way how they have been before pregnancy."],
                ["question" => "How many hours does a Mommy Makeover operation take?", "answer" => "The duration of Mommy Makeover surgery depends on which surgeries will be combined. However, Mommy Makeover surgeries generally take 4-6 hours in general."],
                ["question" => "Are the results of Mommy Makeover permanent?", "answer" => "After Mommy Makeover surgery, people should pay attention to their diet and activities. Rapid weight gain after the surgery and getting pregnant again shortly after the surgery may adversely affect the results of the surgery."],
                ["question" => "What should be done to preserve the results of Mommy Makeover for a long time?", "answer" => "Patients, who want to preserve the results after the surgery, should be determined. They should follow the surgeon’s recommendations. It is important not to plan another pregnancy in a short time after the surgery to keep the weight and the fat level stable. After the surgery, the patient should exercise regularly, follow a balanced diet and wear the garment as much as possible."],
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
        else if ($this->data['userLocale'] == 'es') {
            $faqs = [
                ["question" => "¿Qué es un cambio de imagen de mamá?", "answer" => "Una cirugía de cambio de imagen para mamás es una etapa única destinada a rejuvenecer las áreas más afectadas por el embarazo: los senos y el abdomen. La cirugía es un procedimiento de senos combinado con un procedimiento abdominal, aunque puede agregar procedimientos de brazos o piernas como un levantamiento de brazos o muslos."],
                ["question" => "¿Soy un buen candidato para un cambio de imagen de mamá?", "answer" => "Las candidatas ideales para un mommy makeover gozan de buena salud, tienen un peso saludable y no planean volver a quedar embarazadas. Podrá tener hijos después de un cambio de imagen de mamá, pero puede revertir los efectos de la cirugía. Si tiene alguna pregunta o inquietud sobre si un cambio de imagen para mamás es adecuado para usted, el Assoc. Prof. Dağhan Işık estará encantado de responderlas en su consulta."],
                ["question" => "¿Se hace todo el Mommy Makeover al mismo tiempo?", "answer" => "Se puede hacer en una o dos etapas, dependiendo de cuántas áreas se necesiten abordar."],
                ["question" => "¿Puedo tener más hijos después de mi Mommy Makeover?", "answer" => "Si se planean más niños en un futuro cercano, es mejor esperar, especialmente en la abdominoplastia. Los embarazos adicionales son posibles después de la abdominoplastia. Sin embargo, el resultado final puede no ser tan bueno si los tejidos se estiran nuevamente con otro embarazo."],
                ["question" => "¿Tendré cicatrices significativas después de un cambio de imagen para mamás?", "answer" => "Siempre hay cicatrices asociadas con la cirugía. Una abdominoplastia, un levantamiento de senos y un aumento de senos implican algún tipo de cicatrización; sin embargo, estos generalmente cicatrizan muy bien y quedan bien disimulados por cualquier prenda de bikini o sujetador."],
                ["question" => "¿Es necesario usar corsé después de Mommy Makeover?", "answer" => "Es casi obligatorio el uso de corsé, especialmente después de la liposucción que se realiza durante la cirugía."],
                ["question" => "¿Puede Mommy Makeover tener un impacto en la lactancia?", "answer" => "Las cirugías de reconstrucción mamaria que se realizan durante Mommy Makeover no tienen ningún impacto en la lactancia materna. Durante la operación se realizan las técnicas que preservan los conductos galactóforos y las pacientes quedan libres para amamantar después de la cirugía."],
            ];
            $testimonials = [
                    ["gender" => "female", "name" => "Ophelia A.", "title" => "", "comment" => "Habiendo completado con éxito mi estética, Assoc. Dr. Gracias a Dağhan Işık. Mi postoperatorio fue muy bien. Seguí los consejos dados. No tuve mucho dolor. Puedo decir que estoy mejor ahora."],
                    ["gender" => "female", "name" => "Jenny H.", "title" => "", "comment" => "Estoy bastante contento con los resultados. Me siento más estética y mejor. No tuve mucho dolor ya que seguí los consejos dados después de la cirugía."],
                    ["gender" => "female", "name" => "Kasey I.", "title" => "", "comment" => "Inmediatamente compré un boleto de avión y volé a Estambul para mi cirugía plástica. Después del aeropuerto, un vehículo me recogió y me dejó en mi hotel. Después de una agradable estadía, mi proceso de cirugía comenzó de inmediato. La cirugía fue muy exitosa y los resultados fueron muy satisfactorios."],
                    ["gender" => "female", "name" => "Sandy R.", "title" => "", "comment" => "Vine a Turquía desde el extranjero para operarme y me encontré con un servicio verdaderamente profesional. Después de servicios VIP y una buena operación, regresé a mi país."],
                    ];
        }
        else if ($this->data['userLocale'] == 'it') {
            $this->data['phoneText'] = '+90 (501) 277 74 71';
            $this->data['phoneLink'] = '905012777471';
            $faqs = [
                ["question" => "Che cos'è un rifacimento della mamma?", "answer" => "Un intervento di restyling della mamma è una fase unica volta a ringiovanire le zone più colpite dalla gravidanza: il seno e l'addome. L'intervento chirurgico è una procedura al seno combinata con una procedura addominale, sebbene sia possibile aggiungere procedure per braccia o gambe come un sollevamento del braccio o della coscia."],
                ["question" => "Sono un buon candidato per un restyling della mamma?", "answer" => "I candidati ideali per un restyling della mamma sono in buona salute, con un peso sano e non hanno intenzione di rimanere incinta di nuovo. Sarai in grado di avere figli dopo un rifacimento della mamma, ma puoi invertire gli effetti dell'intervento chirurgico. Se hai domande o dubbi sul fatto che un restyling della mamma sia giusto per te, Assoc. Il Prof. Dağhan Işık sarà lieto di rispondere alla vostra consultazione."],
                ["question" => "L'intero Mommy Makeover è fatto allo stesso tempo?", "answer" => "Può essere fatto in una o due fasi, a seconda di quante aree devono essere affrontate."],
                ["question" => "Posso avere più figli dopo la mia mamma Makeover?", "answer" => "Se sono previsti più bambini nel prossimo futuro, è meglio aspettare, soprattutto in addominoplastica. Ulteriori gravidanze sono possibili dopo l'addominoplastica. Tuttavia, il risultato finale potrebbe non essere così buono se i tessuti vengono nuovamente stirati con un'altra gravidanza."],
                ["question" => "Avrò cicatrici significative dopo un restyling della mamma?", "answer" => "Ci sono sempre cicatrici associate alla chirurgia. Un'addominoplastica, un sollevamento del seno e un aumento del seno comportano tutti un qualche tipo di cicatrice; tuttavia, questi generalmente guariscono molto bene e sono ben nascosti da qualsiasi bikini o reggiseno."],
                ["question" => "È necessario indossare un corsetto dopo Mommy Makeover?", "answer" => "L'uso di un corsetto è quasi obbligatorio, soprattutto dopo la liposuzione che viene eseguita durante l'intervento chirurgico."],
                ["question" => "Mommy Makeover può avere un impatto sull'allattamento al seno?", "answer" => "Gli interventi di ricostruzione del seno eseguiti durante il Mommy Makeover non hanno alcun impatto sull'allattamento al seno. Durante l'operazione vengono eseguite tecniche che preservano i dotti lattiferi e le pazienti sono libere di allattare al seno dopo l'intervento chirurgico."],
            ];
            $testimonials = [
                ["gender" => "female", "name" => "Ophelia A.", "title" => "", "comment" => " Dopo aver completato con successo la mia estetica, Assoc. Dr. Grazie a Dağhan Işık. Il mio post-operatorio è andato molto bene. Ho seguito il consiglio dato. Non ho avuto molto dolore. Posso dire che ora sto meglio."],
                ["gender" => "female", "name" => "Jenny H.", "title" => "", "comment" => "Sono abbastanza contento dei risultati. Mi sento più estetico e migliore. Non ho avuto molto dolore poiché ho seguito i consigli dati dopo l'intervento."],
                ["gender" => "female", "name" => "Kasey I.", "title" => "", "comment" => "Comprai immediatamente un biglietto aereo e volai a Istanbul per la mia chirurgia plastica. Dopo l'aeroporto, un veicolo mi è venuto a prendere e mi ha lasciato al mio hotel. Dopo un bel soggiorno, il mio percorso chirurgico è iniziato subito. L'intervento ha avuto molto successo e i risultati sono stati molto soddisfacenti."],
                ["gender" => "female", "name" => "Sandy R.", "title" => "", "comment" => "Sono venuto in Turchia dall'estero per un'operazione e ho riscontrato un servizio davvero professionale. Dopo i servizi VIP e una bella operazione, sono tornato nel mio paese."],


            ];
        }

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.home', compact('data', 'faqs', 'testimonials', 'beforeAfterPhotos', 'medicalTrip'));
    }

    public function gallery()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'mommy-makeover';
        $this->data['service'] = 'Mommy Makeover Surgery';
        $this->data['adLocale'] = 'EN';
        $this->data['phoneText'] = '+90 (555) 879 77 71';
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
            ['imageName' => 'ba9.jpg'],
            ['imageName' => 'ba10.jpg'],
            ['imageName' => 'ba11.jpg'],
            ['imageName' => 'ba12.jpg'],
            ['imageName' => 'ba13.jpg'],
            ['imageName' => 'ba14.jpg'],
            ['imageName' => 'ba15.jpg'],
            ['imageName' => 'ba16.jpg'],
            ['imageName' => 'ba17.jpg'],
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
