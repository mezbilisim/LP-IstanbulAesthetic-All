<?php

namespace App\Http\Controllers;


class MM2Controller extends BaseController
{
    public $custom_header, $custom_body;

    public function __construct()
    {
        ## Available Locales
        $available_locales = [
            ['locale' => 'en', 'name' => 'English'],
            ['locale' => 'es', 'name' => 'Español'],
            ['locale' => 'it', 'name' => 'Italia'],
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
        $this->data['landing_slug'] = 'mm2';
        $this->data['service'] = 'Mommy Makeover Surgery';
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
                ["question" => "Is Turkey a popular destination for mommy makeovers?", "answer" => "Yes, Turkey has become a sought-after destination for mommy makeovers due to its reputable clinics, experienced surgeons, and affordable prices. Many women from around the world choose Turkey as their preferred location for this procedure."],
                ["question" => "How much does a mommy makeover in Turkey typically cost?", "answer" => "The cost of a mommy makeover in Turkey can vary depending on several factors, including the specific procedures involved, the clinic or surgeon you choose, and additional services such as accommodation or transportation. However, on average, the cost of a mommy makeover in Turkey can be significantly lower compared to other countries, often offering cost savings of 50% or more. "],
                ["question" => "What is the quality of healthcare in Turkey for mommy makeovers?", "answer" => "Turkey has a well-established healthcare system and is known for its high standard of medical care. The country has numerous modern clinics and hospitals equipped with state-of-the-art facilities and advanced technology. Many Turkish surgeons are internationally trained and experienced in performing mommy makeovers, ensuring a high level of expertise and safety."],
                ["question" => "How do I choose a reliable clinic or surgeon for my mommy makeover in Turkey?", "answer" => "When selecting a clinic or surgeon in Turkey, it's important to research and choose a reputable and accredited facility. Look for clinics that have a good track record, positive patient reviews, and certifications from recognized organizations. Additionally, consider the surgeon's qualifications, experience, and specialization in mommy makeover procedures. "],
                ["question" => "What are the advantages of having a mommy makeover in Turkey?", "answer" => "Opting for a mommy makeover in Turkey offers several advantages. Besides the cost savings, you can benefit from the expertise of experienced surgeons who are skilled in performing mommy makeovers. Moreover, the opportunity to combine your procedure with a relaxing vacation in Turkey can make the overall experience more enjoyable."],


                ["question" => "What is a mommy makeover?", "answer" => "A mommy makeover surgery is a single stage meant to rejuvenate the areas most impacted by pregnancy: the breasts and abdomen. The surgery is a breast procedure combined with an abdominal procedure, although you may add arm or leg procedures like an arm lift or thigh lift. "],
                ["question" => "Am I a good candidate for a mommy makeover?", "answer" => "Ideal candidates for a mommy makeover are in good health, at a healthy weight, and are not planning on becoming pregnant again. You will be able to have children after a mommy makeover but it may reverse the effects of the surgery. If you have any questions or concerns about whether a mommy makeover is right for you, Assoc. Prof. Dağhan Işık will be happy to answer them at your consultation."],
                ["question" => "Is the Mommy Makeover done all at one time?", "answer" => "It can be done in one or two stages, depending on how many areas need to be addressed."],
                ["question" => "Can I have more kids after my Mommy Makeover?", "answer" => "If more children are planned in the near future, it is better to wait, especially on the abdominoplasty. Additional pregnancies are possible following abdominoplasty. However, the final result may not be as good if the tissues are stretched again with another pregnancy."],
                ["question" => "Will I have significant scarring after a mommy makeover?", "answer" => "There is always scarring associated with surgery. An abdominoplasty, a breast lift, as well as a breast augmentation all involve some type of scarring; however, these generally heal very well and are well hidden by any bikini or bra garments."],
                ["question" => "Is it necessary to wear a corset after Mommy Makeover?", "answer" => "It is almost compulsory to wear a corset, especially after liposuction which is performed during the surgery."],
                ["question" => "Can Mommy Makeover have an impact on breastfeeding?", "answer" => "Breast Reconstruction surgeries that are performed during Mommy Makeover do not have impacts on breastfeeding at all. During the operation, the techniques that preserve the milk ducts are performed and the patients are free to breastfeed after the surgery.  "],
            ];
            $testimonials = [
                    ["gender" => "female", "name" => "Ophelia A.", "title" => "", "comment" => " Having successfully completed my aesthetic, Assoc. Dr. Thanks to Dağhan Işık. My post-operative period went very well. I followed the advice given. I didn't have much pain. I can say that I am better now."],
                    ["gender" => "female", "name" => "Jenny H.", "title" => "", "comment" => "I am quite happy with the results. I feel more aesthetic and better. I did not have much pain as I followed the advice given after the surgery."],
                    ["gender" => "female", "name" => "Kasey I.", "title" => "", "comment" => "I immediately bought a plane ticket and flew to Istanbul for my plastic surgery. After the airport, a vehicle picked me up and dropped me off at my hotel. After a nice stay, my surgery process started right away. The surgery was very successful and the results were very satisfactory."],
                    ["gender" => "female", "name" => "Sandy R.", "title" => "", "comment" => "I came to Turkey from abroad to have an operation and I encountered a truly professional service. After VIP services and a nice operation, I returned to my country."],

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
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.home', compact('data', 'faqs', 'testimonials', 'beforeAfterPhotos'));
    }

    public function gallery()
    {
        $this->data['custom_header'] = $this->custom_header;
        $this->data['custom_body'] = $this->custom_body;
        $this->data['landing_slug'] = 'mm2';
        $this->data['service'] = 'Mommy Makeover Surgery';
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
        if ($this->data['userLocale'] == 'it') {
            $this->data['phoneText'] = '+90 (501) 277 74 71';
            $this->data['phoneLink'] = '905012777471';
        }

        $data = $this->data;
        return view('landings.' . $this->data['landing_slug'] . '.' . $this->data['userLocale'] . '.gallery', compact('data', 'beforeAfterPhotos'));
    }
}
