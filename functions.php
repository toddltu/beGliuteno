<?php
function blockFixer(String $name = null)
{
    global $Wcms;
    $value = '';

    $list = [
        // head
        'head_title' => 'Jauskitės geriau valgydami viską',
        'head_underText' => 'mėgaukis skaniu gyvenimu be gliuteno',
        'head_blocks_a' => 'Viskas atrinkta rankomis',
        'head_blocks_b' => 'Viskas atrinkta rankomis',
        'head_blocks_c' => 'Viskas atrinkta rankomis',
        'head_blocks_d' => 'Viskas atrinkta rankomis',
        'head_block' => '<div><span class="block-item">Viskas atrinkta rankomis</span></div><div><span class="block-item">Viskas atrinkta rankomis</span></div><div><span class="block-item">Viskas atrinkta rankomis</span></div>',
        // b0
        'b0_h2' => 'Mėgaukitės maistu, kuris padeda jums jaustis gerai!',
        'b0_underText' => 'Viskas prasidėjo nuo diagnuozuotos celiakijos.<br/><br/>Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.<br/><br/>Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.',
        'b0_ul' => '<li>Išbandyti ir atrinkti produktai</li><li>Išbandyti ir atrinkti produktai</li><li>Išbandyti ir atrinkti produktai</li><li>Išbandyti ir atrinkti produktai</li>',
        'b0_button' => 'Žiūrėti 100% be gliuteno produktus',
        // b1
        'b1_h2' => 'Mėgaukitės maistu, kuris padeda jums jaustis gerai!',
        'b1_underText' => 'Viskas prasidėjo nuo diagnuozuotos celiakijos.<br/><br/>Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.<br/><br/>Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.',
        'b1_ul' => '<li>Išbandyti ir atrinkti produktai</li><li>Išbandyti ir atrinkti produktai</li><li>Išbandyti ir atrinkti produktai</li><li>Išbandyti ir atrinkti produktai</li>',
        'b1_button' => 'Žiūrėti 100% be gliuteno produktus',
        // b2
        'b2_h2' => 'Atsisakius tiek nedaug, gauname tiek daug!',
        'b2_underText' => 'Viskas prasidėjo nuo diagnuozuotos celiakijos.',
        'b2_imagesL1' => '<a href="./assets/img/bg-l-0.jpg"><img data-src="./assets/img/bg-l-0.jpg" uk-img></a><a href="./assets/img/bg-r-0.jpg"><img data-src="./assets/img/bg-r-0.jpg" uk-img></a><a href="./assets/img/bg-l-0.jpg"><img data-src="./assets/img/bg-l-0.jpg" uk-img></a>',
        'b2_imagesL2' => '<a href="./assets/img/bg-r-0.jpg"><img data-src="./assets/img/bg-r-0.jpg" uk-img></a><a href="./assets/img/bg-l-0.jpg"><img data-src="./assets/img/bg-l-0.jpg" uk-img></a><a href="./assets/img/bg-r-0.jpg"><img data-src="./assets/img/bg-r-0.jpg" uk-img></a>',
        'b2_button' => 'Žiūrėti 100% be gliuteno produktus',
        // b3,
        'b3_h2' => 'Jauskitės geriau valgydami viską',
        'b3_block_a' => 'Man buvo diagnozuota celiakija vos prieš kelis mėnesius. Iš pradžių tikrai viskas atrodė sudėtinga, tiesiog nežinojau, ką dabar valgyti. Juk įpratus visa šeima prie normalaus maisto, turime savo rutiną. Ieškojau informacijos ir prekių internete, tačiau po kelių valandų tiesiog visko atrodo per daug. Netyčia atradau šią parduotuvę ir labai džiugiuosi, kadangi čia radau žmogišką kontaktą, Jurgita visą tą patį praėjo pati ir galėjo man patarti, pasidalinti su manimi būtent tuo, ko man labiausiai reikėjo.',
        'b3_block_b' => 'Man buvo diagnozuota celiakija vos prieš kelis mėnesius. Iš pradžių tikrai viskas atrodė sudėtinga, tiesiog nežinojau, ką dabar valgyti. Juk įpratus visa šeima prie normalaus maisto, turime savo rutiną. Ieškojau informacijos ir prekių internete, tačiau po kelių valandų tiesiog visko atrodo per daug. Netyčia atradau šią parduotuvę ir labai džiugiuosi, kadangi čia radau žmogišką kontaktą, Jurgita visą tą patį praėjo pati ir galėjo man patarti, pasidalinti su manimi būtent tuo, ko man labiausiai reikėjo.',
        'b3_button' => 'Žiūrėti 100% be gliuteno produktus',
        // b4
        'b4_h2' => 'Griaunu mitą, kad sveikas maistas neskanus ir brangus',
        'b4_underText' => 'Mūsų partneriai, kurie rūpinasi, kad kiekvieną dieną jaustumėtes gerai ir turėtumėte daugiau energijos',
        'b4_images' => '<div><img data-src="./assets/img/just-img.jpg" uk-img></div><div><img data-src="./assets/img/just-img.jpg" uk-img></div>',
        'b4_button' => 'Žiūrėti 100% be gliuteno produktus'
    ];

    if($name !== null && !empty($name)) {
// Check if the newEditableArea area is already exists, if not, create it
        if (empty($Wcms->get('blocks', $name))) {
            $content = (!empty($list[$name]))? $list[$name] : 'Your content here.';
            $Wcms->set('blocks', $name, 'content', $content);
        }

// Fetch the value of the newEditableArea from database
        $value = $Wcms->get('blocks', $name, 'content');

// If value is empty, let's put something in it by default
        if (empty($value)) {
            $value = '';
        }
    }
    if ($Wcms->loggedIn) {
// If logged in, return block in editable mode
        return $Wcms->block($name);
    }
// If not logged in, return block in non-editable mode
        return $value;
}

?>
