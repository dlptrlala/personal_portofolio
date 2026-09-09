@extends('layouts.app')

<!-- @section('title', 'Home') -->

@section('content')

<section class="hero section" id="home">
    <div class="container hero-grid">

        <div class="hero-text">
            <p class="eyebrow">Halo, Saya</p>

            <h1>
                Margareta
                <br>
                <span>Novianti Adilaputri</span>
            </h1>

            <h2>
                Lulusan Informatika
            </h2>

            <p class="hero-description">
                Saya senang mengembangkan aplikasi web yang memecahkan masalah nyata,
                dengan fokus pada pengembangan back-end menggunakan PHP dan Laravel.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn">
                    Lihat Proyek Saya
                </a>

                <a href="#contact" class="btn btn-outline">
                    Hubungi Saya
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
                <a href="https://github.com/dlptrlala" target="_blank" rel="noopener">
                    <i class="fa-brands fa-github"></i>
                </a>

                <a href="https://www.linkedin.com/in/margareta-novianti-adilaputri-2a0340247" target="_blank" rel="noopener">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="https://www.instagram.com/marg.dilaaaa/" target="_blank" rel="noopener">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="mailto:margaretanovianti79@gmail.com">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>

    </div>
</section>


<section class="about-section section" id="about">

    <div class="container">

        <div class="about-heading">

            <p class="section-label">
                Kenali Saya
            </p>

            <h2 class="section-title">
                Tentang Saya
            </h2>

            <p class="about-intro">
                Saya adalah lulusan Informatika yang memiliki fokus pada
                pengembangan Backend menggunakan PHP dan Laravel/CodeIgniter.
                Saya telah mengembangkan dan menyelesaikan berbagai proyek nyata,
                termasuk sistem internal perusahaan selama menjalani program
                magang yang hingga saat ini masih digunakan secara aktif.
                Saya senang menerjemahkan kebutuhan menjadi solusi yang
                terstruktur dan dapat digunakan dengan baik. Selain itu,
                saya memiliki pengalaman di bidang Machine Learning melalui
                tugas akhir saya. Saat ini, saya sedang mencari kesempatan
                untuk berkembang sebagai Junior Backend/Full-Stack Developer.
            </p>

        </div>


        <div class="about-cards">

            <!-- WEB DEVELOPMENT -->
            <article class="about-card">

                <div class="about-card-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <h3>
                    Web Development
                </h3>

                <p>
                    Membuat aplikasi web dan antarmuka menggunakan HTML,
                    CSS, JavaScript, PHP, dan Laravel.
                </p>

            </article>


            <!-- DATABASE & SQL -->
            <article class="about-card">

                <div class="about-card-icon">
                    <i class="fa-solid fa-database"></i>
                </div>

                <h3>
                    Database & SQL
                </h3>

                <p>
                    Menulis query SQL, mengelola data relasional,
                    dan mengimplementasikan operasi CRUD.
                </p>

            </article>


            <!-- MACHINE LEARNING -->
            <article class="about-card">

                <div class="about-card-icon">
                    <i class="fa-solid fa-brain"></i>
                </div>

                <h3>
                    Machine Learning
                </h3>

                <p>
                    Membangun dan mengevaluasi model klasifikasi
                    menggunakan Python dan library Machine Learning.
                </p>

            </article>

        </div>

    </div>

</section>


<section class="skills-section section" id="services">

    <div class="container">

        <div class="section-heading">
            <p class="section-label">Teknologi yang saya gunakan</p>

            <h2 class="section-title">
                Keahlian
            </h2>

            <p>
                Teknologi dan tools yang saya gunakan untuk membangun solusi digital.
            </p>
        </div>


        <div class="skills-grid">

            <!-- FRONTEND -->
            <div class="skill-card">

                <div class="skill-card-header">
                    <i class="fa-solid fa-code"></i>

                    <h3>Frontend</h3>
                </div>

                <div class="skill-items">

                    <span class="skill-item">
                        <i class="fa-brands fa-html5"></i>
                        HTML
                    </span>

                    <span class="skill-item">
                        <i class="fa-brands fa-css3-alt"></i>
                        CSS
                    </span>

                    <span class="skill-item">
                        <i class="fa-brands fa-js"></i>
                        JavaScript
                    </span>

                </div>

            </div>


            <!-- FRAMEWORK -->
            <div class="skill-card">

                <div class="skill-card-header">
                    <i class="fa-solid fa-layer-group"></i>

                    <h3>Framework</h3>
                </div>

                <div class="skill-items">

                    <span class="skill-item">
                        <i class="fa-brands fa-laravel"></i>
                        Laravel
                    </span>

                    <span class="skill-item">
                        <i class="fa-solid fa-fire"></i>
                        CodeIgniter
                    </span>

                </div>

            </div>


            <!-- BACKEND -->
            <div class="skill-card">

                <div class="skill-card-header">
                    <i class="fa-solid fa-server"></i>

                    <h3>Backend</h3>
                </div>

                <div class="skill-items">

                    <span class="skill-item">
                        <i class="fa-brands fa-php"></i>
                        PHP
                    </span>

                    <span class="skill-item">
                        <i class="fa-brands fa-java"></i>
                        Java
                    </span>

                </div>

            </div>


            <!-- MACHINE LEARNING -->
            <div class="skill-card">

                <div class="skill-card-header">
                    <i class="fa-solid fa-brain"></i>

                    <h3>Machine Learning</h3>
                </div>

                <div class="skill-items">

                    <span class="skill-item">
                        <i class="fa-brands fa-python"></i>
                        Python
                    </span>

                </div>

            </div>


            <!-- TOOLS -->
            <div class="skill-card">

                <div class="skill-card-header">
                    <i class="fa-solid fa-toolbox"></i>

                    <h3>Tools</h3>
                </div>

                <div class="skill-items">

                    <span class="skill-item">
                        <i class="fa-brands fa-git-alt"></i>
                        Git
                    </span>

                    <span class="skill-item">
                        <i class="fa-brands fa-github"></i>
                        GitHub
                    </span>

                    <span class="skill-item">
                        <span class="skill-text-logo">VS</span>
                        VS Code
                    </span>

                    <span class="skill-item">
                        <span class="skill-text-logo">NB</span>
                        NetBeans
                    </span>

                    <span class="skill-item">
                        <span class="skill-text-logo">F</span>
                        Figma
                    </span>

                </div>

            </div>


            <!-- DATABASE -->
            <div class="skill-card">

                <div class="skill-card-header">
                    <i class="fa-solid fa-database"></i>

                    <h3>Database</h3>
                </div>

                <div class="skill-items">

                    <span class="skill-item">
                        <i class="fa-solid fa-database"></i>
                        MySQL
                    </span>

                    <span class="skill-item">
                        <i class="fa-solid fa-table"></i>
                        SQL
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="projects section" id="projects">
    <div class="container">

        <div class="section-heading">
            <p class="section-label">Proyek Terbaru</p>

            <h2 class="section-title">
                Proyek Saya
            </h2>

            <p>
                Kumpulan proyek yang saya kerjakan selama masa studi dan proses pengembangan keterampilan.
            </p>
        </div>

        <div class="filter-buttons">

            <button class="filter-btn active" data-filter="all" type="button">
                All
            </button>

            <button class="filter-btn" data-filter="web" type="button">
                Web
            </button>

            <button class="filter-btn" data-filter="ml" type="button">
                Machine Learning
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
                Punya Proyek?
            </p>

            <h2 class="section-title">
                Mari Bekerja Sama
            </h2>

            <p>
                Jangan ragu untuk menghubungi saya terkait peluang kerja,
                kolaborasi, atau sekadar menyapa.
            </p>

        </div>

        <div class="contact-buttons">

            <a
                href="mailto:margaretanovianti79@gmail.com"
                class="btn">
                <i class="fa-solid fa-envelope"></i>
                Hubungi Saya
            </a>

            <a
                href="https://www.linkedin.com/in/margareta-novianti-adilaputri-2a0340247"
                target="_blank"
                rel="noopener"
                class="btn btn-outline">
                <i class="fa-brands fa-linkedin-in"></i>
                LinkedIn
            </a>

            <a
                href="https://github.com/dlptrlala"
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