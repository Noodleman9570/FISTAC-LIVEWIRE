<?php
$cont = 0;
?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            display: flex;
        }

        .estampilla {
            width: 220px;
            height: 150px;
            border: 1px solid #aaa;
            position: relative;
        }

        .fondo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .qr {
            position: absolute;
            bottom: 5px;
            left: 2px;
            display: flex;
            align-items: center;
        }

        .codigo {
            position: absolute;
            bottom: 42px;
            left: 3px;
            font-size: 5px;
            font-weight: bold;
        }

        .qr {
            width: 32px;
            height: 32px;
            margin-right: 10px;
        }

        .texto {
            text-align: left;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 1.1em;
        }
    </style>
</head>

<body>



    <div class="estampilla">

        <div class="fondo">
            <img src="./storage/Timbre_Electronico/electronico.jpeg">
        </div>

        <img class="qr" src="./storage/qr/{{ $timbresGenerated }}.jpg">

        <span class='codigo'>{{ $timbresGenerated}}</span>

    </div>
    </td>





</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
