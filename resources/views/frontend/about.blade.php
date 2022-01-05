@extends('layouts.frontend_template')
@section('content')


<main class="container-fluid">
    <div id="app"></div>

<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mt-4 mb-lg-5">
                    <img class="img-fluid mt-5" src="{{asset('images/frontend/wie is silke.jpg')}}" alt="SilkeBeirens">
                    <h1 id="wie" class="my-5">Geëngageerd, gepassioneerd en geïnspireerd door Oostende</h1>
                    <h2 class="my-3" id="begon">Hoe het begon</h2>
                    <p>
                        Ik werd in 1981 geboren in Oostende en groeide er op. De Grote Keignaert en het Oostendse
                        krekengebied lagen letterlijk in mijn achtertuin. In mijn jeugd zag ik tijdens de vele
                        fietstochten naar het centrum van Oostende, het Stadsrandbos gestaag groeien. In 1999 begon ik
                        mijn studies Afrikanistiek in Gent. Met mijn zus Aagje en enkele jeugdvrienden trok ik de wereld
                        rond, van Midden-Amerika tot Azië. Ik verloor mijn hart op het Afrikaanse continent maar zal
                        altijd het meisje van de zee blijven.
                    </p>
                    <h2 id="carriere" class="my-3">Carrière & gezin</h2>
                    <p>
                        Ik startte mijn loopbaan in het stadhuis van Oostende als Noord-Zuidambtenaar. Aansluitend
                        verkaste ik twee jaar naar Rwanda, waar ik boerencoöperatieven begeleidde. Bij terugkeer op
                        Belgische bodem ging ik bij de Provinciale Ontwikkelingsmaatschappij West-Vlaanderen (POM) aan
                        de slag. Ik hielp startende ondernemers om hun internationale ambities waar te maken. Daarnaast
                        baatte ik twee jaar De Lunchbar uit, op de Groentemarkt in hartje Oostende. Tussendoor leerde ik
                        mijn partner-in-crime en grote liefde Tom Pitteljon kennen. Ik ben plusmama van zijn zoon Aaron
                        en samen hebben we ook een dochter Anna.
                    </p>

                    <h2 class="my-5 text-center">‘Ik ben een bewuste en leergierige levensgenieter’</h2>

                    <h2 id="politiek" class="my-3">Politiek</h2>
                    <p>In 2018 engageerde ik me voor de Gemeenteraadsverkiezingen. Het was het jaar waarin ik zwanger
                        werd. Vanuit de materniteit volgde ik, met Anna aan mijn zijde, de bestuursonderhandelingen van
                        nabij op. Enkele weken later werd ik schepen van Mens en Milieu van de stad Oostende. Ik
                        profileer me in de job als een bewuste levensgenieter die goedgeluimd, enthousiast en leergierig
                        is. Goed om weten: ik hou van een kop stevige koffie met een vleugje melk en zelfgebakken
                        wafels!
                    </p>

                    <h2 id="toekomst" class="my-3">Rechtvaardigheid & toekomst</h2>
                    <p>
                        Ik werd niet als politica pur sang geboren maar heb een groot rechtvaardigheidsgevoel. Vrienden
                        noemen me ondernemend, ambitieus en strijdvaardig. Het politieke toneel schrok me af, tot Wouter
                        De Vriendt en Natacha Waldmann (Groen) me in november 2017 uitnodigden voor een verkennend
                        gesprek in Oostende. Het was een kantelmoment. Onder de slogan ‘Een nieuw begin’ voerden we in
                        2018 een succesvolle campagne, die leidde tot deelname aan het bestuur. Ik werd aangesteld als
                        schepen van Mens en Milieu.
                        De grote uitdagingen van deze eeuw liggen voor ons. Ik maak met enige trots deel uit van de
                        generatie politici die het verschil wil maken op het vlak van klimaat, natuurbehoud en
                        samenleven. Daar ga ik samen met mijn team in investeren, op basis van mijn werk- en
                        levenservaring.
                    </p>
                </div>
            </div>
{{--            <div class="col-md-8 offset-md-2 mb-5">--}}
{{--                <div class="row">--}}
{{--                    <h2 id="bevoegdheden" class="my-3">Wat zijn Silke haar bevoegdheden?</h2>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Democratie en overheid gradient.jpg')}}" alt="mens">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Integratie en gelijke kansen</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Europa gradient.jpg')}}" alt="Cultuur">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Internationale samenwerking</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Klimaat gradient.jpg')}}" alt="klimaat">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Natuur</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Milieuvervuiling gradient.jpg')}}" alt="milieu">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Milieu</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Kinderen en jongeren gradient.jpg')}}" alt="kinderen">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Kinderopvang</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Diverse samenleving gradient.jpg')}}" alt="Economie">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Strandreddingsdienst</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Dierenwelzijn gradient.jpg')}}" alt="Dierenwelzijn">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Dierenwelzijn</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 d-flex flex-column justify-content-center">--}}
{{--                        <img class="img-fluid" src="{{asset('images/frontend/Natuur, biodiversiteit en welzijn gradient.jpg')}}" alt="belastingen">--}}
{{--                        <h3 class="text-center text-uppercase mosgroen pb-2">Landbouw & voedselstrategie</h3>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>


@stop
