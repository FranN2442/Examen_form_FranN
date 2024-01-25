<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T6oi4vSk5BhHwOzEqCvFTB1PKUfyG8puDKkqPPIoPFRlfnj4GgBzi06Isu7Bsi2i" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-dZpL5s5ExF06eLqamHrNxFV9r1L+gPWXaGnrq3DmgXJcd/1i6pFeG5thA99aCIaV" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>

        body{

            margin: 0%

        }
        table{
            border: solid 2px black;
            border-collapse: collapse;
        }
        table th,td{

            border: solid 2px black;
            border-collapse: collapse;
        }

    </style>
</head>
<body>

    @include('layouts.partials.nav')

    @yield('content')


</body>
</html>