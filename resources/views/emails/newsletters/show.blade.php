<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $newsletter->title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Dosis', sans-serif;
            font-weight: 900;
        }

        p {
            font-family: 'Open Sans', sans-serif;
            font-size: medium;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            {!! $newsletter->content_html !!}

            Regards, <br>
            {{ Config('app.name') }}

        </div>
    </div>
</div>

</body>
</html>