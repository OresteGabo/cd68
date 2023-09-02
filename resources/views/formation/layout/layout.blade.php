<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDAFAL 68 - Site des formations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        section {
            padding: 60px 0;
        }

        .course-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .course-info h4 {
            font-weight: bold;
        }

        .course-info p {
            margin-bottom: 0;
        }


        /*  Dollar sign design */
        .course-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .course-info h4 {
            font-weight: bold;
        }

        .course-info p {
            margin-bottom: 0;
        }

        .dollar-icon {
            font-size: 500px;
            color: #007bff;
            border: 1px solid black;
        }

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
</head>
<body>
<!-- navbar -->
@include('formation.layout.nav')
@yield('content')
{{--@include('formation.layout.about')--}}
@include('formation.layout.common-elements.footer')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script>
    const tooltips = document.querySelectorAll('.tt')
    tooltips.forEach(t => {
        new bootstrap.Tooltip(t)
    })
</script>
</body>
</html>


