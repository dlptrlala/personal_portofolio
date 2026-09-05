<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Personal portfolio Margareta Novianti Adilaputri">

    <title>
        Margareta Novianti A
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')
</head>

<body>

    <header class="header" id="header">
        <nav class="navbar container">

            <a href="{{ route('home') }}" class="logo">
                <span>M</span>argareta.
            </a>

            <button
                class="menu-toggle"
                id="menu-toggle"
                type="button"
                aria-label="Buka menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul class="nav-menu" id="nav-menu">
                <li><a href="{{ route('home') }}#home">Home</a></li>
                <li><a href="{{ route('home') }}#about">About Me</a></li>
                <li><a href="{{ route('home') }}#services">Skills</a></li>
                <li><a href="{{ route('home') }}#projects">Projects</a></li>
                <li><a href="{{ route('home') }}#contact">Contact</a></li>

                @auth
                <li>
                    <a href="{{ route('admin.projects.index') }}" class="nav-admin">
                        Admin
                    </a>
                </li>
                @endauth

                <li>
                    <!-- <a
                        href="{{ asset('assets/CV-Margareta.pdf') }}"
                        class="btn btn-small"
                        download>
                        Download CV
                    </a> -->
                    @if($resume)

                    <a
                        href="{{ route('resume.download') }}"
                        class="btn btn-small">
                        Download CV
                    </a>

                    @endif
                </li>
            </ul>

        </nav>
    </header>

    <main>
        @if(session('success'))
        <div class="flash-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer-content">

            <a href="{{ route('home') }}" class="logo">
                <span>M</span>argareta.
            </a>

            <p>
                Building, learning, and growing one project at a time.
            </p>

            <div class="footer-nav">
                <a href="{{ route('home') }}#home">Home</a>
                <a href="{{ route('home') }}#about">About Me</a>
                <a href="{{ route('home') }}#services">Skills/a>
                <a href="{{ route('home') }}#projects">Projects</a>
                <a href="{{ route('home') }}#contact">Contact</a>
            </div>

            <div class="footer-socials">
                <a href="https://github.com/dlptrlala" target="_blank" rel="noopener">
                    <i class="fa-brands fa-github"></i>
                </a>

                <a href="https://www.linkedin.com/in/margareta-novianti-adilaputri-2a0340247" target="_blank" rel="noopener">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="https://www.instagram.com/marg.dilaaaa/" target="_blank" rel="noopener">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>

            <p class="copyright">
                © {{ date('Y') }} Margareta Novianti Adilaputri.
                All Rights Reserved.
            </p>

        </div>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('scripts')

</body>

</html>