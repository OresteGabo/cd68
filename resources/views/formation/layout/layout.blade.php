<!DOCTYPE html>
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
            color: #333; /* Dark text color */
        }

        .course-info h4 {
            font-weight: bold;
            color: #007bff; /* Blue color for headings */
        }

        .course-info p {
            margin-bottom: 0;
        }

        .dollar-icon {
            font-size: 500px;
            color: #007bff; /* Blue color for the dollar sign */
            border: 1px solid #000; /* Black border around the icon */
        }
        /* Navbar styles */
        .navbar {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* Text color */
        }

        .navbar-brand {
            font-size: 1.5rem; /* Increase brand font size */
        }

        .nav-link {
            color: #ffffff; /* Link text color */
        }

        /* Header section styles */
        #intro {
            background-color: #f8f9fa; /* Light background color */
            padding: 40px;
        }

        h1.text-primary {
            color: #343a40; /* Dark text color */
        }

        /* Main content sections */
        .bg-secondary {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* Text color */
        }

        h2, h4 {
            color: #ffffff; /* Heading text color */
        }

        .bg-primary {
            background-color: #007bff; /* Primary color background */
            color: #ffffff; /* Text color */
        }

        .btn-primary {
            background-color: #007bff; /* Primary color for buttons */
        }

        /* Footer styles */
        footer {
            background-color: #f8f9fa; /* Light background color */
            color: #343a40; /* Text color */
        }

        /* Override Bootstrap's default link color */
        a {
            color: #007bff;
        }

        a:hover {
            color: #0056b3; /* Slightly darker blue on hover */
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
