<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
    <meta name="description" content="<?= $Wcms->page('description') ?>">
    <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

    <meta property="og:url" content="<?= $this->url() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
    <meta property="og:title" content="<?= $Wcms->page('title') ?>" />
    <meta name="twitter:site" content="<?= $this->url() ?>" />
    <meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
    <meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    <!-- CSS Style -->
    <link rel="stylesheet" rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- UIkit CSS -->
    <link rel="stylesheet" rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" crossorigin="anonymous"/>
    <!-- site css -->
<!--    <link rel="stylesheet" rel="preload" as="style" href="./css/style.css" />-->
    <link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('assets/css/style.css') ?>">

    <?= $Wcms->css() ?>
</head>
<body>
<!-- nav bar -->
<div class="uk-background-default">
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#">
                    <img data-src="./img/logo.jpg" uk-img />
                </a>
            </div>
        </nav>
    </div>
</div>

<!-- section head -->
<section class="sec-head uk-background-cover uk-section" data-src="./img/header.jpg" uk-img>
    <div class="uk-container">
        <h1>Jauskitės geriau valgydami viską</h1>
        <div class="h1-u underText">mėgaukis skaniu gyvenimu be gliuteno</div>
        <div class="blocks uk-child-width-1-1@s uk-child-width-expand@m uk-margin-large-top" uk-grid>
            <div><span class="block-item">Viskas atrinkta rankomis</span></div>
            <div><span class="block-item">Viskas atrinkta rankomis</span></div>
            <div><span class="block-item">Viskas atrinkta rankomis</span></div>
        </div>
    </div>
</section>

<!-- section b0 -->
<section class="sec-b0 uk-section">
    <div class="uk-custom-cheat-bg uk-background-contain uk-background-center-right uk-background-image@m" data-src="./img/cheat-img-0.jpg" uk-img>
        <div class="uk-container">
            <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                <div>
                    <h2>Mėgaukitės maistu, kuris padeda jums jaustis gerai!</h2>
                    <div class="h2-u underText">
                        Viskas prasidėjo nuo diagnuozuotos celiakijos.<br/><br/>
                        Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.
                        Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.<br/><br/>
                        Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.
                        Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.
                    </div>
                    <ul class="uk-custom-ul uk-list uk-list-striped">
                        <li>Išbandyti ir atrinkti produktai</li>
                        <li>Išbandyti ir atrinkti produktai</li>
                        <li>Išbandyti ir atrinkti produktai</li>
                        <li>Išbandyti ir atrinkti produktai</li>
                    </ul>
                    <div class="uk-custom-green-button uk-margin-top uk-button">Žiūrėti 100% be gliuteno produktus</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section b1 -->
<section class="sec-b1 uk-section uk-background-cover" data-src="./img/bg-m-0.jpg" uk-img>
    <div class="uk-custom-cheat-bg uk-background-contain uk-background-center-left uk-background-image@m" data-src="./img/bg-l-0.jpg" uk-img>
        <div class="uk-container">
            <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                <div></div>
                <div>
                    <h2>Mėgaukitės maistu, kuris padeda jums jaustis gerai!</h2>
                    <div class="h2-u underText">
                        Viskas prasidėjo nuo diagnuozuotos celiakijos.<br/><br/>
                        Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.
                        Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.<br/><br/>
                        Perėjau visus iššūkius, su kuriais susiduria valgantys be gliuteno.
                        Todėl dabar galiu pasidalinti su jumis tuo, ką atradau geriausio.
                    </div>
                    <ul class="uk-custom-ul uk-list uk-list-striped">
                        <li>Išbandyti ir atrinkti produktai</li>
                        <li>Išbandyti ir atrinkti produktai</li>
                        <li>Išbandyti ir atrinkti produktai</li>
                        <li>Išbandyti ir atrinkti produktai</li>
                    </ul>
                    <div class="uk-custom-green-button uk-margin-top uk-button">Žiūrėti 100% be gliuteno produktus</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section b2 -->
<section class="sec-b2 uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid uk-lightbox>
            <div class="uk-custom-self-center">
                <div>
                    <h2>Atsisakius tiek nedaug, gauname tiek daug!</h2>
                    <div class="h2-u underText">Viskas prasidėjo nuo diagnuozuotos celiakijos.</div>
                    <a href="./img/bg-l-0.jpg" class="uk-custom-green-button uk-margin-top uk-button">Žiūrėti 100% be gliuteno produktus</a>
                </div>
            </div>
            <div class="uk-custom-gallery">
                <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-text-center" uk-grid="parallax: 150">
                    <!-- first line -->
                    <div>
                        <a href="./img/bg-l-0.jpg">
                            <img data-src="./img/bg-l-0.jpg" uk-img>
                        </a>
                        <a href="./img/bg-r-0.jpg">
                            <img data-src="./img/bg-r-0.jpg" uk-img>
                        </a>
                        <a href="./img/bg-l-0.jpg">
                            <img data-src="./img/bg-l-0.jpg" uk-img>
                        </a>
                    </div>
                    <!-- second line -->
                    <div>
                        <a href="./img/bg-r-0.jpg">
                            <img data-src="./img/bg-r-0.jpg" uk-img>
                        </a>
                        <a href="./img/bg-l-0.jpg">
                            <img data-src="./img/bg-l-0.jpg" uk-img>
                        </a>
                        <a href="./img/bg-r-0.jpg">
                            <img data-src="./img/bg-r-0.jpg" uk-img>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section b3 -->
<section class="sec-b3 uk-section uk-background-cover" data-src="./img/bg-m-0.jpg" uk-img>
    <div class="uk-container">
        <h2>Jauskitės geriau valgydami viską</h2>
        <div class="uk-custom-grid uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
            <div>
                <div>Man buvo diagnozuota celiakija vos prieš kelis mėnesius. Iš pradžių tikrai viskas atrodė sudėtinga, tiesiog nežinojau, ką dabar valgyti. Juk įpratus visa šeima prie normalaus maisto, turime savo rutiną. Ieškojau informacijos ir prekių internete, tačiau po kelių valandų tiesiog visko atrodo per daug. Netyčia atradau šią parduotuvę ir labai džiugiuosi, kadangi čia radau žmogišką kontaktą, Jurgita visą tą patį praėjo pati ir galėjo man patarti, pasidalinti su manimi būtent tuo, ko man labiausiai reikėjo.</div>
            </div>
            <div>
                <div>Man buvo diagnozuota celiakija vos prieš kelis mėnesius. Iš pradžių tikrai viskas atrodė sudėtinga, tiesiog nežinojau, ką dabar valgyti. Juk įpratus visa šeima prie normalaus maisto, turime savo rutiną. Ieškojau informacijos ir prekių internete, tačiau po kelių valandų tiesiog visko atrodo per daug. Netyčia atradau šią parduotuvę ir labai džiugiuosi, kadangi čia radau žmogišką kontaktą, Jurgita visą tą patį praėjo pati ir galėjo man patarti, pasidalinti su manimi būtent tuo, ko man labiausiai reikėjo.</div>
            </div>
        </div>
        <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
            <div>
                <div class="uk-custom-green-button uk-margin-top uk-button">Žiūrėti 100% be gliuteno produktus</div>
            </div>
            <div class="uk-text-right uk-margin-top">
                <img data-src="./img/text-0.png" uk-img>
            </div>
        </div>
    </div>
</section>

<!-- section b4 -->
<section class="sec-b4 uk-section">
    <div class="uk-container">
        <div class="h2">Griaunu mitą, kad sveikas maistas neskanus ir brangus</div>
        <div class="h2-u underText">Mūsų partneriai, kurie rūpinasi, kad kiekvieną dieną jaustumėtes gerai ir turėtumėte daugiau energijos</div>
        <div class="uk-flex-center uk-child-width-auto uk-margin-large-top uk-margin-large-bottom" uk-grid>
            <div>
                <img data-src="./img/just-img.jpg" uk-img>
            </div>
            <div>
                <img data-src="./img/just-img.jpg" uk-img>
            </div>
            <div>
                <img data-src="./img/just-img.jpg" uk-img>
            </div>
            <div>
                <img data-src="./img/just-img.jpg" uk-img>
            </div>
            <div>
                <img data-src="./img/just-img.jpg" uk-img>
            </div>
        </div>
        <div class="uk-text-center">
            <div class="uk-custom-green-button uk-margin-top uk-button">Žiūrėti 100% be gliuteno produktus</div>
        </div>
    </div>
</section>


<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js" crossorigin="anonymous" defer></script>
</body>
</html>
