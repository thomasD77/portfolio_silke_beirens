@extends('layouts.frontend_template')
@section('content')


<main class="container-fluid">
    <div id="app"></div>

<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mt-4">
                    <img class="img-fluid mt-5" src="{{asset('images/frontend/silke_strand.jpg')}}" alt="SilkeBeirens">
                    <h1 id="wie" class="my-5">Wie is Silke Beirens...</h1>
                    <p>Ik ben Silke Beirens. Net 40 jaar geworden. Geboren en getogen in Oostende. Opgegroeid met de
                        zoute Keignaert en het Oostendse krekengebied in mijn achtertuin (letterlijk). Als jonge vrouw
                        zag ik langs mijn fietsroute naar centrum Oostende het Stadsrandbos gestaag groeien.
                        <br><br>
                        Toen ik in 1999 mijn studies Afrikanistiek aanvatte in universiteitsstad Gent, ben ik ten volle
                        beginnen beseffen, dat ik een meisje van de zee was en altijd zal zijn.
                        <br><br>
                        Samen met mijn zus Aagje en enkele jeugdvrienden trok ik de wereld rond, van Midden-Amerika tot
                        Azië, maar ik verloor mijn hart op het Afrikaanse continent.
                        <br><br>
                        Op professioneel vlak heb ik al wat watertjes doorzwommen: ik begon mijn carrière in het
                        stadhuis van Oostende als Noord-Zuidambtenaar, verkaste daarna voor 2 jaar naar Rwanda waar ik
                        boerencoöperatieven begeleidde om bij terugkeer op Belgische bodem bij de Provinciale
                        Ontwikkelingsmaatschappij (POM) West-Vlaanderen aan de slag te gaan. Ik werkte er 10 jaar en
                        begeleidde startende ondernemers om hun internationale ambities waar te maken.
                        <br><br>
                        Ik werd ook zelf ondernemer en baatte 2,5 jaar De Lunchbar uit op de Groentemarkt in hartje
                        Oostende.
                        <br><br>
                        Ondertussen leerde ik mijn partner-in-crime en liefde van mijn leven Tom Pitteljon kennen en
                        werd ik plusmama van een toffe kerel Aaron.
                        <br><br>
                        In 2018 veranderde mijn leven voorgoed, ik engageerde me voor de Gemeenteraadsverkiezingen en
                        werd tegelijkertijd zwanger.
                        <br><br>
                        In oktober 2018 werd mijn dochter Anna Martha geboren, en vanuit de materniteit volgde ik de
                        bestuursonderhandelingen van nabij op.
                        <br><br>
                        Enkele weken later startte mijn nieuwe professionele avontuur als schepen van Mens en Milieu van
                        de stad Oostende.
                        <br><br>
                        Ik ben een echte levensgenieter, altijd goed geluimd, enthousiast en leergierig. Ik hou van
                        lekkere koffie met een vleugje melk en zelfgebakken wafels.</p>

                    <h2 id="waarom" class="my-3">Waarom in de Politiek gestapt?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.</p>
                </div>
            </div>
            <div class="col-md-8 offset-md-2 mb-5">
                <div class="row">
                    <h2 id="bevoegdheden" class="my-3">Wat zijn Silke haar bevoegdheden?</h2>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Democratie en overheid gradient.jpg')}}" alt="mens">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Integratie en gelijke kansen</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Europa gradient.jpg')}}" alt="Cultuur">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Internationale samenwerking</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Klimaat gradient.jpg')}}" alt="klimaat">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Natuur</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Milieuvervuiling gradient.jpg')}}" alt="milieu">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Milieu</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Kinderen en jongeren gradient.jpg')}}" alt="kinderen">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Kinderopvang</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Diverse samenleving gradient.jpg')}}" alt="Economie">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Strandreddingsdienst</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Dierenwelzijn gradient.jpg')}}" alt="Dierenwelzijn">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Dierenwelzijn</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Natuur, biodiversiteit en welzijn gradient.jpg')}}" alt="belastingen">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Landbouw & voedselstrategie</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@stop
