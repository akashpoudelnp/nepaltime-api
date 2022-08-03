<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> @yield('title') </title>
    <meta name="twitter:title" content="Nepali Date Converter">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:image" content="img/icon-main.png">
    @stack('seo')
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="/img/icon-main.png">
    <meta name="twitter:description"
        content="Convert BS to AD and AD to BS. With this tool you can easily convert AD to nepali date and nepali date to AD.">
    <link rel="icon" type="image/png" sizes="512x512" href="/img/logopng-fav.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/img/logopng-fav.png">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist@4.5.0/swagger-ui.css" />
    @stack('css')
</head>

<body style="background: rgb(246,246,246);font-family: lato;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}"><span
                    class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"
                    style="background: transparent;"><img src="/img/icon-main.png" width="39"
                        height="31"></span><span style="color: var(--ref-gray-700);">| Nepal Time</span></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="{{ route('api.home') }}" class="nav-link">API Documentation</a>
                    </li>
                </ul><a class="btn btn-primary shadow" role="button" href="https://github.com/akashpoudelnp"
                    style="background: teal;border-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-github"
                        style="margin-right: 4px;">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                        </path>
                    </svg><span>GitHub</span></a>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-primary-gradient " style="background: #f4f4f4;">
        <div class="container py-4 py-lg-5">
            <div class="text-muted d-flex justify-content-center align-items-center pt-3">
                <p class="mb-0" style="text-align: center;">Copyright © 2022 Aakash Poudel | Nepal Time</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.min.js"></script>
    @stack('js')
</body>

</html>
