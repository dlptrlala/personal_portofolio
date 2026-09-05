@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero section" id="home">
    <div class="container hero-grid">

        <div class="hero-text">
            <p class="eyebrow">Hi, I'm</p>

            <h1>
                Margareta
                <br>
                <span>Novianti</span>
            </h1>

            <h2>
                Informatics Student &amp; Aspiring Data Professional
            </h2>

            <p class="hero-description">
                I enjoy turning data and ideas into useful digital solutions.
                I am interested in Data Science, Back-End Development,
                and Front-End Development.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn">
                    View My Projects
                </a>

                <a href="#contact" class="btn btn-outline">
                    Contact Me
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="photo-circle">
                <!-- <img
                    src="{{ asset('assets/images/profile.jpg') }}"
                    alt="Foto Margareta Novianti Adilaputri"
                > -->
                @if($profile?->hero_image)

                <div
                    class="hero-photo"
                    style="
                        --position-x: {{ $profile->hero_position_x }}%;
                        --position-y: {{ $profile->hero_position_y }}%;
                        --rotation: {{ $profile->hero_rotation }}deg;
                    ">
                    <img
                        src="{{ asset('storage/' . $profile->hero_image) }}"
                        alt="Margareta">
                </div>

                @endif
            </div>

            <div class="socials">
                <a href="https://github.com/username" target="_blank" rel="noopener">
                    <i class="fa-brands fa-github"></i>
                </a>

                <a href="https://www.linkedin.com/in/username/" target="_blank" rel="noopener">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="https://www.instagram.com/username/" target="_blank" rel="noopener">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="mailto:emailkamu@example.com">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>

    </div>
</section>


<section class="about section" id="about">
    <div class="container about-grid">

        <div class="about-image">
            <div class="photo-frame">
                <!-- <img
                    src="{{ asset('assets/images/profile-2.jpg') }}"
                    alt="Margareta"> -->
                @if($profile?->about_image)

                <div
                    class="about-photo"
                    style="
                        --position-x: {{ $profile->about_position_x }}%;
                        --position-y: {{ $profile->about_position_y }}%;
                        --rotation: {{ $profile->about_rotation }}deg;
                    ">
                    <img
                        src="{{ asset('storage/' . $profile->about_image) }}"
                        alt="Margareta">
                </div>

                @endif
            </div>
        </div>

        <div class="about-content">
            <p class="section-label">Get To Know Me</p>

            <h2 class="section-title">
                About Me
            </h2>

            <p>
                I am an Informatics student at Sanata Dharma University
                with an interest in data, software development,
                and building practical digital products.
            </p>

            <p>
                I have worked with Python, Java, PHP, HTML/CSS, SQL,
                Excel, Power BI, and several machine-learning tools.
                I enjoy learning new technologies and paying attention
                to details when working on a project.
            </p>

            <div class="skills">

                <div class="skill">
                    <div class="skill-info">
                        <span>Python &amp; Data Analysis</span>
                        <span>85%</span>
                    </div>

                    <div class="progress">
                        <span style="width:85%"></span>
                    </div>
                </div>

                <div class="skill">
                    <div class="skill-info">
                        <span>SQL &amp; Database</span>
                        <span>80%</span>
                    </div>

                    <div class="progress">
                        <span style="width:80%"></span>
                    </div>
                </div>

                <div class="skill">
                    <div class="skill-info">
                        <span>Web Development</span>
                        <span>75%</span>
                    </div>

                    <div class="progress">
                        <span style="width:75%"></span>
                    </div>
                </div>

                <div class="skill">
                    <div class="skill-info">
                        <span>Machine Learning</span>
                        <span>80%</span>
                    </div>

                    <div class="progress">
                        <span style="width:80%"></span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<section class="services section" id="services">
    <div class="container">

        <div class="section-heading">
            <p class="section-label">What I Can Do</p>

            <h2 class="section-title">
                Services
            </h2>

            <p>
                Some areas where I can contribute to a project or team.
            </p>
        </div>

        <div class="service-grid">

            <article class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <h3>Data Analysis</h3>

                <p>
                    Data cleaning, exploration, visualization,
                    and extracting useful insights from datasets.
                </p>
            </article>

            <article class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-brain"></i>
                </div>

                <h3>Machine Learning</h3>

                <p>
                    Building and evaluating classification models
                    using Python and machine-learning libraries.
                </p>
            </article>

            <article class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-database"></i>
                </div>

                <h3>Database &amp; SQL</h3>

                <p>
                    Working with relational databases, SQL queries,
                    data manipulation, and database concepts.
                </p>
            </article>

            <article class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <h3>Web Development</h3>

                <p>
                    Creating responsive web interfaces and applications
                    using HTML, CSS, JavaScript, PHP, and Laravel.
                </p>
            </article>

        </div>
    </div>
</section>


<section class="projects section" id="projects">
    <div class="container">

        <div class="section-heading">
            <p class="section-label">My Recent Work</p>

            <h2 class="section-title">
                My Projects
            </h2>

            <p>
                A selection of projects from my studies and learning journey.
            </p>
        </div>

        <div class="filter-buttons">

            <button class="filter-btn active" data-filter="all" type="button">
                All
            </button>

            <button class="filter-btn" data-filter="data" type="button">
                Data
            </button>

            <button class="filter-btn" data-filter="web" type="button">
                Web
            </button>

            <button class="filter-btn" data-filter="java" type="button">
                Java
            </button>

        </div>

        <div class="project-grid">

            @forelse($projects as $project)

            <article
                class="project-card"
                data-category="{{ $project->category }}">

                <div class="project-image">

                    @if($project->image)
                    <img
                        src="{{ asset('storage/' . $project->image) }}"
                        alt="{{ $project->title }}">
                    @else
                    <div class="project-placeholder">
                        <i class="fa-solid fa-image"></i>
                    </div>
                    @endif

                </div>

                <div class="project-info">

                    <span>
                        {{ $project->category_label }}
                    </span>

                    <h3>
                        {{ $project->title }}
                    </h3>

                    <p>
                        {{ $project->description }}
                    </p>

                    @if($project->technology)
                    <small>
                        {{ $project->technology }}
                    </small>
                    @endif

                    <div class="project-links">

                        @if($project->github_url)
                        <a
                            href="{{ $project->github_url }}"
                            target="_blank"
                            rel="noopener"
                            class="project-link">
                            GitHub
                            <i class="fa-brands fa-github"></i>
                        </a>
                        @endif

                        @if($project->demo_url)
                        <a
                            href="{{ $project->demo_url }}"
                            target="_blank"
                            rel="noopener"
                            class="project-link">
                            Demo
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                        @endif

                    </div>

                </div>

            </article>

            @empty

            <div class="empty-projects">
                Belum ada project.
            </div>

            @endforelse

        </div>

    </div>
</section>


<section class="contact section" id="contact">
    <div class="container contact-box">

        <div class="section-heading">

            <p class="section-label">
                Have A Project In Mind?
            </p>

            <h2 class="section-title">
                Let's Work Together
            </h2>

            <p>
                Feel free to contact me for opportunities,
                collaboration, or just to say hello.
            </p>

        </div>

        <div class="contact-buttons">

            <a
                href="mailto:emailkamu@example.com"
                class="btn">
                <i class="fa-solid fa-envelope"></i>
                Email Me
            </a>

            <a
                href="https://www.linkedin.com/in/username/"
                target="_blank"
                rel="noopener"
                class="btn btn-outline">
                <i class="fa-brands fa-linkedin-in"></i>
                LinkedIn
            </a>

            <a
                href="https://github.com/username"
                target="_blank"
                rel="noopener"
                class="btn btn-outline">
                <i class="fa-brands fa-github"></i>
                GitHub
            </a>

        </div>

    </div>
</section>

@endsection