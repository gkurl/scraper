<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scraper</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>
<div class="form">

    <form action="{{route('store')}}" method="get">
        Search Terms
        <input type="text" name="q" placeholder="Search..."/>
        <input type="button" value="Submit" name="submit"/>
    </form>


</div>
</body>
</html>
