<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta content="Silke Beirens" name="author">
    <meta content="Portfolio pagina van Silke Beirens" name="description">
    <meta content="Portfolio pagina van Silke Beirens" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta property="og:title" content="Silke Beirens" />
    <meta property="og:type" content="Portfolio" />
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:image" content="{{  $post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" />
    <meta property="og:site_name" content="GROEN" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:alt" content="Portfolio foto van Silke Beirens van de partij Groen in Oostende" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Silke Beirens">
    <meta name="twitter:creator" content="Silke Beirens">
    <meta name="twitter:title" content="Portfolio pagina van Silke Beirens">
    <meta name="twitter:description" content="Kom hier meer te weten over Silke Beirens">
    <meta name="twitter:image" content="{{  $post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}">


    <title>Silke Beirens</title>
    <!-- Styles -->
    <link href="{{ asset('css/front-app.css') }}" rel="stylesheet">
</head>
