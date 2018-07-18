<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'koordinator@skolaplus.sk';
    $subject = "Škola plus má novú správu od: $name $surname";

    $headers = "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email "."\r\n";

    $body ="$message";
    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Zadajte Vaše meno';
    }

    if (!$_POST['surname']) {
        $errSurname = 'Zadajte Vaše priezvisko';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Zadajte Váš e-mail';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Položka pre správu je prázdna';
    }
    /*//Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }*/
// If there are no errors, send the email
    if (!$errName && !$errSurname && !$errEmail && !$errMessage) {
        if (mail ($to, $subject, $body, $headers)) {
            $result='<div class="alert alert-success"> Správa sa odoslala! V najbližšej dobe Vás budeme kontaktovať!</div>';
        } else {
            $result='<div class="alert alert-danger">Správa sa neodoslala! Prosím, skúste to neskôr.</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="skolaplus-favicon.png"/>
    <title>Škola plus s.r.o.│ Kredity pre učiteľov, aktualizačné vzdelávanie</title>
    <meta name="description" content="Akreditované vzdelávacie programy pre učiteľov, akreditované programy kontinuálneho vzdelávania, kredity pre učiteľov, aktualizačné vzdelávanie">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylecode.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false" aria-controls="skolaplus-navbar-collapse-1"> <!--aria-expanded="true"-->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>-->

            <div class="logo">
                <a href="index.php"><h1 class="skola"></h1></a>
            </div>
        </div>

        <div class="navbar-collapse collapse" id="bs-navbar">


            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#onas"><h1>O nás</h1></a>
                </li>
                <li>
                    <a class="page-scroll" href="#programy"><h1>Programy</h1></a>
                </li>
                <li>
                    <a class="page-scroll" href="#kontakt"><h1>Kontakt</h1></a>
                </li>
                <li>
                    <a target="_blank" href="https://www.facebook.com/skolaplus.sk/" class="facebook-button"><h1><i class="fa fa-facebook" aria-hidden="true"></i></h1></a>
                </li>

</nav>

<div class="carousel slide" id="carousel-example-captions" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <div class="item">
            <img src="img/Ucitel-pre-nizsie-stredne-vzdelavanie.jpg" alt="Učiteľ pre nižšie stredné vzdelávanie">
            <div class="carousel-caption">
                <h3>Učiteľ pre nižšie stredné vzdelávanie</h3>
            </div>
        </div>

        <div class="item">
            <img src="img/Ucitel-pre-nizsie-stredne-odborne-vzdelavanie.jpg" alt="Učiteľ pre nižšie stredné odborné vzdelávanie">

            <div class="carousel-caption">
                <h3>Učiteľ pre nižšie stredné odborné vzdelávanie</h3>
            </div>
        </div>

        <div class="item">
            <img src="img/Majster-odborneho-vycviku.jpg" alt="Majster odborného výcviku">
            <div class="carousel-caption">
                <h3>Majster odbornej výchovy</h3>
            </div>
        </div>
        <div class="item">
            <img src="img/Ucitel-pre-stredne-odborne-vzdelavanie.jpg" alt="Učiteľ pre stredné odborné vzdelávanie">
            <div class="carousel-caption">
                <h3>Učiteľ pre stredné odborné vzdelávanie </h3>
            </div>
        </div>

        <div class="item">
            <img src="img/Ucitel-pre-uplne-stredne-vseobecne-vzdelavanie.jpg" alt="Učiteľ pre úplné stredné všeobecné vzdelávanie">
            <div class="carousel-caption">
                <h3>Učiteľ pre úplné stredné všeobecné vzdelávanie</h3>
            </div>
        </div>

        <div class="item active">
            <img src="img/Ucitel-pre-primarne-vzdelavanie.jpg" alt="Učiteľ pre primárne vzdelávanie">
            <div class="carousel-caption">
                <h3>Učiteľ pre primárne vzdelávanie</h3>
            </div>
        </div>
    </div>
    <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>


    <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
<section class="action-text">
    <marquee behavior="scroll" direction="left"><!--<b><a href="#programy">OTVÁRAME NOVÝ PROGRAM:</a> od roku 2O18 otvárame
            nový akreditovaný vzdelávací program <a href="#programy">ŠPECIFIKÁ NOVÉHO ŠKOLSKÉHO VZDELÁVACIEHO PROGRAMU
                PREDPRIMÁRNEHO VZDELÁVANIA PRE MATERSKÉ ŠKOLY</a>,ktorý je schválený Ministerstvom školstva, vedy, výskumu a športu SR.
            || <b><a href="#programy">OTVÁRAME PRIHLASOVANIE</a> na akreditovaný vzdelávací program
                <a href="#programy">NÁRODNÝ ŠTANDARD FINANČNEJ GRAMOTNOSTI V ŠKOLSKOM VZDELÁVACOM PROGRAME</a>,
                ktorý sa uskutoční v dňoch 2O. - 21.1.2O18. V prípade ďalších informácii nás neváhajte
                kontakovať na e-mailovej adrese koordinator@skolaplus.sk-->

        <b><a href="#programy">JÚNOVÉ A JÚLOVÉ TERMÍNY ŠKOLENÍ PREBIEHAJÚCE V PREŠOVE:</a>
            INOVATÍVNE METÓDY V EDUKÁCII<a href="#programy"> 23.6. - 24.6.2018</a>.
            NÁRODNÝ ŠTANDARD FINANČNEJ GRAMOTNOSTI<a href="#programy"> 7. - 8.7.2018</a>
            METODIKA TVORBY CIEĽOV VÝCHOVY A VZDELÁVANIA<a href="#programy"> 14.7. - 15.7.2018</a>.
            PRIHLASOVAŤ NA UVEDENÉ TERMÍNY, SA MÔŽETE PROSTREDNÍCTVOM KONTAKTNÉHO FORMULÁRU ALEBO NA E-MAILOVEJ ADRESE KOORDINATOR@SKOLAPLUS.SK.
        </b>
</b></marquee>



</section>


<section class="pre-body">
    <div class="container onas" id="onas">
        <h1>O NÁS</h1>
    </div>
</section>


<section class="main-body">
    <div class="container">
        <p> Škola plus s.r.o. vznikla v roku 2OO8 s cieľom pomôcť pedagogickým a odborným zamestnancom získať kredity a podporiť školy pri zabezpečovaní vzdelávacích potrieb svojich zamestnancov. Viac ako 1O rokov sme oprávneným poskytovateľom kontinuálneho vzdelávania. Naše portfólio tvorí 5 akreditovaných programov, ktorých garantom je Doc. PaedDr. Ivan Pavlov, PhD., ktorý so svojim tímom špičkových odborníkov z praxe stojí za vznikom Školy plus s.r.o. Od roku 2OO8 sme vytvorili širokú databázu spokojných účastníkov našich kurzov, ktorých je približne 5O tisíc.
        </p>
    </div>
</section>

<div class="container programy" id="programy"><h1 class="about">PROGRAMY</h1></div>

<div class="container">
    <div class="row first">
        <div class="col-md-4">
            <div>
                <img src="img/narodny-standard-financnej-gramotnosti-icon.png" alt="Národný štandard finančnej gramotnosti" class="#" data-target=".bs-example-modal-lg1">
                <h2>Národný štandard finančnej gramotnosti</h2>
                <p>Počet získaných kreditov: 7</p>
                <h3>Cena: 8O €</h3>
                <button type="button" class="btn btn-primary" id="modal_one" data-toggle="modal" data-target=".bs-example-modal-lg1">Zistiť viac</button>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="img/metodika-tvorby-cielov-vychovy-a-vzdelavania-icon.png" alt="Metodika tvroby cieľov výchovy a vzdelávania" class="#">
                <h2>METODIKA TVORBY CIEĽOV VÝCHOVY A VZDELÁVANIA</h2>
                <p>Počet získaných kreditov: 12</p>
                <h3>Cena: 12O €</h3>
                <button type="button" class="btn btn-primary" id="modal_two" data-toggle="modal" data-target=".bs-example-modal-lg2">Zistiť viac</button>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="img/citatelska-gramotnost-v-edukacii-icon.png" alt="Čitateľská gramotnosť v edukácii" class="#">
                <h2>Čitateľská gramotnosť <br>v edukácii</h2>
                <p>Počet získaných kreditov: 9</p>
                <h3>Cena: 1OO €</h3>
                <button type="button" class="btn btn-primary" id="modal_three" data-toggle="modal" data-target=".bs-example-modal-lg3">Zistiť viac</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row second">
        <div class="col-md-4">
            <div>
                <img src="img/inovativne-metody-v-edukacii-icon.png" alt="Inovatívne metódy v edukácii" class="#">
                <h2>Inovatívne metódy <br>v edukácii</h2>
                <p>Počet získaných kreditov: 1O</p>
                <h3>Cena: 1OO €</h3>
                <button type="button" class="btn btn-primary" id="modal_four" data-toggle="modal" data-target=".bs-example-modal-lg4">Zistiť viac</button>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="img/nove-trendy-vychovy-a-vzdelavania-v-oblasti-ludskych-prav-icon.png" alt="Nové trendy výchovy a vzdelávania v oblasti ľudských práv" class="#">
                <h2>NOVÉ TRENDY VÝCHOVY A VZDELÁVANIA V OBLASTI ĽUDSKÝCH PRÁV</h2>
                <p>Počet získaných kreditov: 7</p>
                <h3>Cena: 7O €</h3>
                <button type="button" class="btn btn-primary" id="modal_five" data-toggle="modal" data-target=".bs-example-modal-lg5">Zistiť viac</button>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="img/pen.png" alt="Pripravujeme..." class="#">
                <h2>ŠPECIFIKÁ NOVÉHO ŠVP PREDPRIMÁRNEHO VZDELÁVANIA PRE MATERSKÉ ŠKOLY</h2>
                <p>Počet získaných kreditov: 17</p>
                <h3>Cena: 17O €</h3>
                <button type="button" class="btn btn-primary" id="modal_six" data-toggle="modal" data-target=".bs-example-modal-lg6">Zistiť viac</button>
            </div>
        </div>
    </div>
</div>


<!--<div>
    <img src="img/pripravujeme-icon.png" alt="Pripravujeme..." class="#">
    <h2>PRIPRAVUJEME NOVÉ AKREDITOVANÉ VZDELÁVACIE PROGRAMY</h2>
    <p>Termín: v roku 2O18</p>
    <h3>5 nových programov</h3>
    <button type="button" class="btn btn-primary" id="modal_six" data-toggle="modal" data-target=".bs-example-modal-lg6">Zistiť viac</button>
</div>-->

<div class="modal fade bs-example-modal-lg1" tabindex="-1" id="modal_one" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <div class="logotype-top-modal">
                    <a href="index.php"><h1 class="logo-top-modal"></h1></a>
                </div>

                <h1>Národný štandard finančnej gramotnosti</h1>
                <br>

                <span class="label label-primary">Najbližší termín: 7. - 8.7.2018</span>

                <h2>Aktualizačné vzdelávanie reflektuje na súčasné potreby, požiadavky vyplývajúce z pedagogických dokumentov (POP) a záujem pedagogických zamestnancov zdokonaliť svoje profesijné kompetencie v problematike finančnej gramotnosti.</h2>


                <p><b>Druh kontinuálneho vzdelávania:</b> aktualizačné vzdelávanie</p>
                <p><b>Rozsah vzdelávacieho programu:</b> 25 hodín – z toho 20 hodín prezenčne a 5 hodín dištančne</p>

                <p><b>Trvanie vzdelávacieho programu:</b> najviac 6 mesiacov</p>

                <p><b>Kategória:</b> učiteľ, majster odbornej výchovy<p></p>

                <p><b>Podkategória:</b> učiteľ pre primárne vzdelávanie (učiteľ prvého stupňa základnej školy), učiteľ pre nižšie stredné vzdelávanie (učiteľ druhého stupňa základnej školy), učiteľ pre nižšie stredné odborné vzdelávanie, stredné odborné vzdelávanie, úplné stredné všeobecné vzdelávanie, úplné stredné odborné vzdelávanie  a učiteľ pre vyššie odborné vzdelávanie (učiteľ strednej školy)</p>

                <p><b>Kariérový stupeň:</b> samostatný pedagogický zamestnanec, pedagogický zamestnanec s prvou atestáciou,pedagogický zamestnanec s druhou atestáciou</p>

                <p><b>Spôsob ukončenia:</b> aktualizačné vzdelávanie sa ukončuje záverečnou prezentáciou pred účastníkmi vzdelávania a lektorom.</p>

                <p><b>Garant vzdelávacieho programu:</b> Doc. PaedDr. Ivan Pavlov, PhD.</p>

                <p>Podrobnejšie informácie o programe nájdete <a href="doc/narodny-standard-financnej-gramotnosti-rozhodnutie-o-akreditacii.pdf">tu</a> alebo nám napíšte na koordinator@skolaplus.sk.</p>

                <a href="doc/Prihláška-Národný-štandard-finančnej-gramotnosti.pdf" class="btn btn-primary" target="_blank" title="Prihláška">Prihláška</a>

            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg2" tabindex="-1" id="modal_two" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <div class="logotype-top-modal">
                    <a href="index.php"><h1 class="logo-top-modal"></h1></a>
                </div>

                <h1>Metodika tvorby cieľov výchovy a vzdelávania</h1>
                <br>

                <span class="label label-primary">Najbližší termín: 14.7. - 15.7.2018</span>
                <h2>Cieľom programu je prehĺbiť a rozšíriť profesijné kompetencie učiteľov potrebné na štandardný výkon pedagogickej činnosti v spôsobilosti efektívne projektovať ciele výchovy a vzdelávania podľa kľúčových kompetencií žiakov.</h2>

                <p><b>Druh kontinuálneho vzdelávania:</b> aktualizačné vzdelávanie</p>
                <p><b>Rozsah vzdelávacieho programu:</b> 45 hodín – z toho 20 hodín prezenčne a 25 hodín dištančne</p>

                <p><b>Kategória:</b> učiteľ</p>

                <p><b>Podkategória:</b> učiteľ pre primárne vzdelávanie,učiteľ pre nižšie stredné vzdelávanie, učiteľ pre nižšie stredné odborné vzdelávanie, stredné odborné vzdelávanie, úplné stredné všeobecné vzdelávanie, úplné stredné odborné vzdelávanie a učiteľ pre vyššie odborné vzdelávanie</p>

                <p><b>Kariérový stupeň:</b> samostatný pedagogický zamestnanec, pedagogický zamestnanec s prvou atestáciou,pedagogický zamestnanec s druhou atestáciou</p>

                <p><b>Spôsob ukončenia:</b> aktualizačné vzdelávanie sa ukončuje záverečnou prezentáciou pred účastníkmi vzdelávania a lektorom
                </p>

                <p><b>Garant vzdelávacieho programu:</b> Doc. PaedDr. Ivan Pavlov, PhD.</p>

                <p>Podrobnejšie informácie o programe nájdete <a href="doc/metodika-tvorby-cielov-vychovy-a-vzdelavania-rozhodnutie-o-akreditacii.pdf">tu</a> alebo nám napíšte na koordinator@skolaplus.sk.</p>

                <a href="doc/Prihláška-Metodika-tvorby-cieľov-výchovy-a-vzdelávania.pdf" class="btn btn-primary" target="_blank" title="Prihláška">Prihláška</a>

            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg3" tabindex="-1" id="modal_three" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <div class="logotype-top-modal">
                    <a href="index.php"><h1 class="logo-top-modal"></h1></a>
                </div>

                <h1>Čitateľská gramotnosť v edukácii</h1>
                <br>

                <span class="label label-primary">Najbližší termín: júl 2018</span>

                <h2>Aktualizačné vzdelávanie reflektuje na súčasné potreby a záujem pedagogických zamestnancov zdokonaliť svoje profesijné kompetencie v problematike čitateľskej gramotnosti a implementovať ju do edukačného procesu.
                </h2>


                <p><b>Druh kontinuálneho vzdelávania:</b> aktualizačné vzdelávanie</p>
                <p><b>Rozsah vzdelávacieho programu:</b> 35 hodín – z toho 16 hodín prezenčne a 19 hodín dištančne</p>

                <p><b>Kategória:</b> učiteľ<p></p>

                <p><b>Podkategória:</b> učiteľ pre primárne vzdelávanie,učiteľ pre nižšie stredné vzdelávanie, učiteľ pre nižšie stredné odborné vzdelávanie, stredné odborné vzdelávanie, úplné stredné všeobecné vzdelávanie, úplné stredné odborné vzdelávanie a učiteľ pre vyššie odborné vzdelávanie</p>

                <p><b>Kariérový stupeň:</b> samostatný pedagogický zamestnanec, pedagogický zamestnanec s prvou atestáciou,pedagogický zamestnanec s druhou atestáciou</p>

                <p><b>Spôsob ukončenia:</b> aktualizačné vzdelávanie sa ukončuje záverečnou prezentáciou pred účastníkmi vzdelávania a lektorom.</p>

                <p><b>Garant vzdelávacieho programu:</b> Doc. PaedDr. Ivan Pavlov, PhD.</p>

                <p>Podrobnejšie informácie o programe nájdete <a href="doc/citatelska-gramotnost-v-edukacii-rozhodnutie-o-akreditacii.pdf">tu</a> alebo nám napíšte na koordinator@skolaplus.sk.</p>

                <a href="doc/Prihláška-Čitateľská-gramotnosť-v-edukácii.pdf" class="btn btn-primary" target="_blank" title="Prihláška">Prihláška</a>

            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg4" tabindex="-1" id="modal_four" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <div class="logotype-top-modal">
                    <a href="index.php"><h1 class="logo-top-modal"></h1></a>
                </div>

                <h1>Inovatívne metódy v edukácii</h1>
                <br>

                <span class="label label-primary">Najbližší termín: 23.6. - 24.6.2018</span>

                <h2>Tento vzdelávací program poskytuje systematický aparát inovačných metód a koncepcií edukačného procesu podporujúceho kreativitu a efektívnu súčinnosť žiakov, je osnovaný na základe princípov výchovy a vzdelávania, ktoré vyplývajú zo zákona 245/2008 Z. z. – Zákona o výchove a vzdelávaní (školského zákona) a o zmene a doplnení niektorých zákonov.</h2>


                <p><b>Druh kontinuálneho vzdelávania:</b> aktualizačné vzdelávanie</p>
                <p><b>Rozsah vzdelávacieho programu:</b> 35 hodín – z toho 20 hodín prezenčne a 15 hodín dištančne</p>

                <p><b>Kategória:</b> učiteľ<p></p>

                <p><b>Podkategória:</b> učiteľ pre primárne vzdelávanie,učiteľ pre nižšie stredné vzdelávanie, učiteľ pre nižšie stredné odborné vzdelávanie, stredné odborné vzdelávanie, úplné stredné všeobecné vzdelávanie, úplné stredné odborné vzdelávanie a učiteľ pre vyššie odborné vzdelávanie</p>

                <p><b>Kariérový stupeň:</b> samostatný pedagogický zamestnanec, pedagogický zamestnanec s prvou atestáciou,pedagogický zamestnanec s druhou atestáciou
                </p>

                <p><b>Spôsob ukončenia:</b> aktualizačné vzdelávanie sa ukončuje záverečnou prezentáciou a pohovorom pred trojčlennou skúšobnou komisiou z oblasti príslušného obsahu vzdelávania</p>

                <p><b>Garant vzdelávacieho programu:</b> Doc. PaedDr. Ivan Pavlov, PhD.</p>

                <p>Podrobnejšie informácie o programe nájdete <a href="doc/inovativne-metody-v-edukacii-rozhodnutie-o-akreditacii.pdf">tu</a> alebo nám napíšte na koordinator@skolaplus.sk.</p>

                <a href="doc/Prihláška-Inovatívne-metódy-v-edukácii.pdf" class="btn btn-primary" target="_blank" title="Prihláška">Prihláška</a>

            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg5" tabindex="-1" id="modal_five" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <div class="logotype-top-modal">
                    <a href="index.php"><h1 class="logo-top-modal"></h1></a>
                </div>

                <h1>Nové trendy výchovy a vzdelávania v oblasti ľudských práv</h1>
                <br>

                <span class="label label-primary">Najbližší termín: júl 2018</span>

                <h2>Vzdelávací program je zameraný na zdokonalenie profesijných kompetencií pedagogických zamestnancov, ktoré sú nevyhnutné na realizáciu vytýčených úloh v oblasti ľudských práv. Hlavným cieľom je rozšíriť a prehĺbiť profesijné kompetencie pedagogických zamestnancov potrebné na efektívnu implementáciu problematiky ľudských práv do edukačného procesu s humanizačným a demokratizačným zámerom.</h2>

                <p><b>Druh kontinuálneho vzdelávania:</b> aktualizačné vzdelávanie</p>
                <p><b>Rozsah vzdelávacieho programu:</b> 25 hodín – z toho 20 hodín prezenčne a 5 hodín dištančne</p>

                <p><b>Kategória:</b> učiteľ<p></p>

                <p><b>Podkategória:</b> učiteľ pre primárne vzdelávanie,učiteľ pre nižšie stredné vzdelávanie, učiteľ pre nižšie stredné odborné vzdelávanie, stredné odborné vzdelávanie, úplné stredné všeobecné vzdelávanie, úplné stredné odborné vzdelávanie a učiteľ pre vyššie odborné vzdelávanie
                </p>

                <p><b>Kariérový stupeň:</b> samostatný pedagogický zamestnanec, pedagogický zamestnanec s prvou atestáciou,pedagogický zamestnanec s druhou atestáciou
                </p>

                <p><b>Spôsob ukončenia:</b> aktualizačné vzdelávanie sa ukončuje záverečnou prezentáciou pred účastníkmi vzdelávania a lektorom</p>

                <p><b>Garant vzdelávacieho programu:</b> Doc. PaedDr. Ivan Pavlov, PhD.</p>

                <p>Podrobnejšie informácie o programe nájdete <a href="doc/nove-trendy-vychovy-a-vzdelavania-v-oblasti-ludskych-prav-rozhodnutie-o-akreditacii.pdf">tu</a> alebo nám napíšte na koordinator@skolaplus.sk.</p>

                <a href="doc/Prihláška-Nové-trendy-výchovy-a-vzdelávania-v-oblasti-ľudských-práv.pdf" class="btn btn-primary" target="_blank" title="Prihláška">Prihláška</a>

            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg6" tabindex="-1" id="modal_six" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <div class="logotype-top-modal">
                    <a href="index.php"><h1 class="logo-top-modal"></h1></a>
                </div>

                <h1>Špecifiká nového Štátneho vzdelávacieho programu predprimárneho vzdelávania pre materské školy</h1>
                <br>

                <span class="label label-primary">Najbližší termín: júl 2O18</span>
                <span class="label label-danger">NOVINKA</span>

                <h2><b>Špecifikácia programu</b> <br>Hlavným cieľom programu je udržať, aktualizovať a inovovať kompetencie pedagogických
                    zamestnancov pre oblasť predprimárneho vzdelávania v súvislosti s požiadavkami nového schváleného ŠVP. </h2>

                <h2><b>Profil absolventa</b> <br>Absolvent vzdelávacieho programu má ucelený pohľad na špecifiká nového obsahového
                    a výkonového štandardu a evalvačných otázok, má kompetencie aplikovať poznatky a zručnosti
                    z príslušného vzdelávania v materskej škole v súlade s koncepciou jednotlivých vzdelávacích oblastí
                    v zmysle nového ŠVP pre MŠ. Vie analyzovať a interpretovať získané poznatky a skúsenosti z aplikácie
                    činností a hier v edukačnom procese materskej školy. Zvolené metodické postupy dokáže projektovať,
                    prezentovať a zdôvodniť. Absolvent si rozšíri vedomosti a zručnosti potrebné pri tvorbe evalvačných otázok.</h2>

                <p><b>Druh kontinuálneho vzdelávania:</b> inovačné vzdelávanie</p>
                <p><b>Rozsah vzdelávacieho programu:</b> 7O hodín – z toho 44 hodín prezenčne a 26 hodín dištančne</p>

                <p><b>Kategória:</b> učiteľ<p></p>

                <p><b>Podkategória:</b>  učiteľ pre predprimárne vzdelávanie (učiteľ materskej školy), učiteľ pre úplné stredné odborné vzdelávanie, učiteľ pre kontinuálne vzdelávanie.
                </p>

                <p><b>Kariérový stupeň:</b> začínajúci pedagogický zamestnanec, pri dodržaní podmienky §35 odst. 9 zákona č. 317/ 2009 Z. z. v znení neskorších predpisov, samostatný pedagogický zamestnanec, pedagogický zamestnanec s prvou atestáciou, pedagogický zamestnanec s druhou atestáciou.
                </p>

                <p><b>Spôsob ukončenia:</b> inovačné vzdelávanie končí odovzdaním vypracovaných dištančných výstupov a záverečnou prezentáciou pred trojčlennou skúšobnou komisiou.</p>

                <p><b>Garant vzdelávacieho programu:</b> Prof., Doc. Branislav Pupala, CsC.</p>

                <p>Podrobnejšie informácie o programe nájdete <a target="_blank" href="doc/Špecifiká-NŠVP-pre-materské-školy-rozhodnutie-o-akreditacii.pdf">tu</a> alebo nám napíšte na koordinator@skolaplus.sk.</p>

                <a href="doc/PRIHLÁŠKA-ŠVP.pdf" class="btn btn-primary" target="_blank" title="Prihláška">Prihláška</a>

            </div>
        </div>
    </div>
</div>

<section class="subscribe-mailer">

    <div class="col-md-5 col-md-offset-2">
    <p class="subscribe-text"><b>Prihláste sa na odber noviniek a budete informovaný o aktuálnych termínoch školení, novinkách v našich vzdelávacích programoch a ich zľavách!</b></p>
    </div>

    <div class="col-md-4"><a href="https://landing.mailerlite.com/webforms/landing/x6u5s5" class="btn-danger subscribe-btn text-center"><b>PRIHLÁSIŤ SA NA ODBER</b></a></div>


</section>

<footer id="kontakt">
    <div class="container background">
        <h1>KONTAKT</h1>
    </div>
</footer>


<section class="form-main">
    <div class="container foot-content">
        <div class="row">
            <!--<div class="col-md-3">

            </div>-->

            <div class="col-md-5 col-md-offset-3">
                <form class="form-horizontal" role="form" method="post" action="index.php#kontakt">
                    <div class="form-group name">
                        <!--<label for="name">Meno*</label>-->
                        <div class="input-group">
                            <span class="input-group-addon frst">MENO</span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        </div>
                        <?php echo "<p class='text-danger'>$errName</p>";?>

                    </div>

                    <div class="form-group telephone">
                        <div class="input-group">
                            <span class="input-group-addon scnd">PRIEZVISKO</span>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="" value="<?php echo htmlspecialchars($_POST['surname']); ?>">
                        </div>
                        <?php echo "<p class='text-danger'>$errSurname</p>";?>
                    </div>

                    <div class="form-group email">
                        <div class="input-group">
                            <span class="input-group-addon thrd">E-MAIL</span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="@" value="@<?php echo htmlspecialchars($_POST['email']); ?>">
                        </div>
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>


                    <div class="form-group telephone">
                        <div class="input-group">
                            <span class="input-group-addon four">SPRÁVA</span>
                            <textarea class="form-control" rows="8" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <!--<input type="tel" size="10" class="form-control" id="telephone" name="telephone" placeholder="" value="<?php echo htmlspecialchars($_POST['message']); ?>">-->
                        </div>
                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                    </div>


                    <div class="form-group submit">
                        <input id="submit" name="submit" type="submit" value="ODOSLAŤ" class="btn btn-default">

                    </div>


                    <div class="form-group after-submit">
                        <div class="col-md-12 pop-up">
                            <?php echo $result; ?>
                        </div>

                    </div>

                </form>


            </div>

        </div>
    </div>
</section>

<section class="footer-menu">
    <div class="row">
    <div class="col-md-3 col-md-offset-1 information">
        <p class="contact-info-head"><b>Kontaktné informácie</b></p>
        <br><p><b>ŠKOLA PLUS, s.r.o.</b></p>
        <p>Sabinovská 145</p>
        <p>080 01 Prešov</p>
        <p>IČO: 44 O49 447<br>
            IČ DPH: SK2O2259189O<br>
            DIČ: 2O2259189O<br>
            IBAN: SK4911000000002928829165</p>
        <a class="secure" href="ochrana-osobnych-udajov.html">Ochrana osobných údajov</a>

    </div>

    <div class="col-md-4">
        <p class="write-message"><b>Korešpondenčná adresa</b></p>
        <br><p class="p"><b>ŠKOLA PLUS, s.r.o.</b></p>
        <p class="p">Levočská 4</p>
        <p class="p">080 01 Prešov</p>
        <p class="write-message"><b>Napíšte nám na náš e-mail</b></p>
        <br><p class="p">koordinator@skolaplus.sk</p>
    </div>

    <div class="col-md-4">
        <p class="write-message"><b>Prihláste sa na odber noviniek</b></p>
        <br><p class="p">a budete informovaný o pripravovaných školeniach vždy včas.</p>
        <a href="https://landing.mailerlite.com/webforms/landing/x6u5s5" class=""><div class="subscribe"><p class="odber"><b>Prihlásiť sa na odber</b></p></div></a>
        <br><br><p class="p">Sledujte nás na Facebooku</p>
        <a target="_blank" href="https://www.facebook.com/skolaplus.sk/"><div class="fb-box"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>

    </div>
    </div>
</section>


<div class="container post-footer">

    <p>Copyright ©2O18 Škola Plus s.r.o. Všetky práva vyhradené. <span>Made by <a target="_blank" href="https://pnpmarketing.sk/">PNP marketing</a></span></p>
</div>
<data data-token="a331d7ed03ca7362f35fc6a322d49115" class="mj-w-data" data-apikey="2CoR" data-w-id="4Ev" data-lang="en_US" data-base="https://app.mailjet.com" data-width="640" data-height="514" data-statics="statics"></data>

<script type="text/javascript" id="cookieinfo"
        src="//cookieinfoscript.com/js/cookieinfo.min.js"
        data-font-family="Dosis"
        data-bg="#333333"
        data-fg="#ffffff"
        data-divlinkbg="#2081c4"
        data-divlink="#ffffff"
        data-link="#ffffff"
        data-cookie="CookieInfoScript"
        data-linkmsg="Viac informácií"
        data-moreinfo="http://skolaplus.sk/cookies.html"
        data-text-align="right"
        data-message="Pre účely marketingu a uloženia Vašich nastavení používame súbory cookies. Súhlasíte s ich používaním?"
        data-close-text="SÚHLASÍM">
</script>


</body>

<script type="text/javascript" src="https://app.mailjet.com/statics/js/widget.modal.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src='js/wow.min.js'></script>
<script src="js/script.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-102732633-1', 'auto');
    ga('send', 'pageview');

</script>
</html>