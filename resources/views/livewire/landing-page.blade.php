<div>
<!-- Header -->

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/spartan') }}/logo.svg" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="menu hamburger" data-menu="12">
                            <span class="icon"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav nav">
                            <li class="nav-item">
                                <a class="nav-link" data-link="about-section" href="#about">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="classes-section" href="#classes">Aulas</a>
                            </li>
                            @if(false)
                            <li class="nav-item">
                                <a class="nav-link" data-link="pricing-section" href="#pricing">Preços</a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" data-link="team-section" href="#team">Equipe</a>
                            </li>
                            @if(false)
                            <li class="nav-item">
                                <a class="nav-link" data-link="blog-section" href="#blog">Blog</a>
                            </li>
                            @endif
                        </ul>
                        <a class="theme-btn d-inline-block d-lg-none text-decoration-none" href="#contact">
                            Inscreva-se
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                    fill="#F41E1E"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="header-button-block d-lg-block d-none">
                        <a class="theme-btn text-decoration-none" href="#contact">
                            Inscreva-se
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                    fill="#F41E1E"></path>
                            </svg>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Hero -->

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-content">
                    <span data-aos="fade-up" data-aos-duration="800">skill
                        <img src="{{ asset('images/spartan') }}/arrows.png" data-aos="fade-right" data-aos-duration="1200" alt="arrow">
                    </span>
                    <div class="stroke-text">
                        <h3 data-aos="fade-up" data-aos-duration="900">Resiliência</h3>
                        <h3 data-aos="fade-up" data-aos-duration="900">Resiliência</h3>
                    </div>
                    <h2 data-aos="fade-up" data-aos-duration="800">DISCIPLINA</h2>
                    <div data-aos="fade-up" data-aos-duration="800" class="hero-text">
                        <p>Junte-se à ProFitness e experimente
                            programas de treinamento personalizados, equipamentos de ponta e uma comunidade
                            de apoio. Alcance resultados incomparáveis e eleve sua jornada de fitness
                            conosco.</p>
                        <button class="theme-btn" type="button">
                            Inscreva-se
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                    fill="#F41E1E"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/spartan') }}/background/hero-person.png" class="hero-person" data-aos="fade-right" data-aos-duration="1400"
        alt="person">
</section>

<!-- Introduction -->

<section class="introduction" id="about" data-id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">O que nos faz</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">Profitness!</h2>
                    <img src="{{ asset('images/spartan') }}/title-light-arrow.svg" data-aos="fade-right" data-aos-duration="1400"
                        alt="arrow">
                </div>
                <img src="{{ asset('images/spartan') }}/introduction/introduction.png" class="intro-image d-none d-lg-block"
                    alt="introduction" data-aos="fade-up" data-aos-duration="1100">
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="introduction-card">
                            <div class="intro-image-block">
                                <img src="{{ asset('images/spartan') }}/introduction/mission-1.jpg" alt="mission" class="img-fluid"
                                    data-aos="zoom-in-down" data-aos-duration="1500">
                                <img src="{{ asset('images/spartan') }}/arrows.png" alt="arrows" class="border-0 three-arrows"
                                    data-aos="fade-right" data-aos-duration="1200">
                            </div>
                            <h3>missão</h3>
                            <p>Nosso objetivo é transmitir conhecimento e orientação de treinamento capacitados para ter um
                                impacto positivo na saúde e no condicionamento físico de todos com quem trabalhamos.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="introduction-card">
                            <div class="intro-image-block">
                                <img src="{{ asset('images/spartan') }}/introduction/story-1.jpg" alt="story" class="img-fluid"
                                    data-aos="zoom-in-down" data-aos-duration="1500">
                                <img src="{{ asset('images/spartan') }}/arrows.png" alt="arrows" class="border-0 three-arrows"
                                    data-aos="fade-right" data-aos-duration="1200">
                            </div>
                            <h3>história</h3>
                            <p>A nossa história é marcada pelo compromisso com a excelência e a paixão por transformar vidas através do fitness.
                                Desde a nossa fundação, temos trabalhado incansavelmente para criar um ambiente onde nossos membros possam alcançar seus 
                                objetivos de saúde e bem-estar.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="introduction-card mt-30 mb-0">
                            <div class="intro-image-block approach">
                                <img src="{{ asset('images/spartan') }}/introduction/approach-1.jpg" alt="approach" class="img-fluid"
                                    data-aos="zoom-in-down" data-aos-duration="1500">
                                <img src="{{ asset('images/spartan') }}/arrows.png" alt="arrows" class="border-0 three-arrows"
                                    data-aos="fade-right" data-aos-duration="1200">
                            </div>
                            <h3>abordagem</h3>
                            <p>Somos uma academia e instalação de treinamento híbrida. Temos instalações limpas e de última geração
                                com
                                a equipe mais conhecedora e métodos de treinamento de ponta. Oferecemos academia aberta,
                                treinamento
                                em equipe, aulas em grupo, boxe, ciclo e treinamento pessoal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Classes -->

<section class="classes position-relative overflow-hidden" id="classes" data-id="classes-section">
    <div class="container">
        <div class="row class-slider-row">

            <div class="col-md-12 col-lg-4">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">FAÇA O SEU MELHOR</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">Hero Challenges</h2>
                    <img src="{{ asset('images/spartan') }}/arrow_02.svg" data-aos="fade-right" data-aos-duration="1400" alt="arrow">
                </div>
                <div class="review-content" data-aos="fade-up" data-aos-duration="900">
                    <p>Participe de nossos Hero Challenges para treinos dinâmicos e de alta intensidade adequados para todos os níveis de condicionamento físico. Do treinamento de força ao cardio, transforme sua rotina de exercícios com sessões lideradas por especialistas.</p>
                </div>
                <div class="slider-button-block d-none d-lg-block" data-aos="fade-up" data-aos-duration="900">
                    <button class="owl-prev">
                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.931435 5.77796C0.905968 5.74633 0.880499 5.71469 0.858669 5.67955C0.858669 5.67955 0.855032 5.67603 0.855032 5.67252C0.833202 5.63737 0.811373 5.60222 0.79682 5.56356V5.56004C0.778629 5.52138 0.764076 5.48272 0.75316 5.44405C0.75316 5.44054 0.75316 5.44054 0.75316 5.43703C0.749523 5.41594 0.742247 5.39836 0.738607 5.38079C0.73497 5.36321 0.731331 5.34212 0.727692 5.32455C0.727692 5.32104 0.727692 5.31752 0.727692 5.31049C0.724054 5.29292 0.724054 5.27534 0.724054 5.25777C0.724054 5.25426 0.724054 5.25426 0.724054 5.25074C0.724054 5.23317 0.724054 5.21559 0.724054 5.1945C0.724054 5.18747 0.724054 5.18396 0.724054 5.17693C0.724054 5.15936 0.724054 5.14178 0.727692 5.12421C0.731331 5.09609 0.727692 5.12069 0.727692 5.12069C0.727692 5.10312 0.731331 5.08203 0.73497 5.06446L0.738607 5.0504C0.745884 5.01173 0.7568 4.96956 0.771353 4.93089V4.92738C0.800459 4.84654 0.840479 4.76921 0.891415 4.69892L0.895052 4.69189C0.905968 4.67431 0.920521 4.66025 0.931435 4.64619C0.931435 4.64268 0.935074 4.64268 0.938713 4.63916C0.949627 4.6251 0.960543 4.61456 0.971457 4.60402L0.98237 4.59347L0.989649 4.58644L4.96628 0.741248C5.32283 0.396797 5.89768 0.396797 6.25423 0.741248C6.61078 1.0857 6.61078 1.64104 6.25423 1.98549L3.8275 4.32986L18.4352 4.32986C18.9372 4.32986 19.3447 4.72352 19.3447 5.21208C19.3447 5.69712 18.9372 6.09078 18.4352 6.09078L3.83114 6.09078L6.46525 8.6355C6.8218 8.97995 6.8218 9.53528 6.46525 9.87974C6.1087 10.2242 5.53385 10.2242 5.1773 9.87974L0.98601 5.83068C0.971457 5.81662 0.956903 5.80256 0.945988 5.78851L0.931435 5.77796Z"
                                fill="#333333" />
                        </svg>
                    </button>
                    <button class="owl-next">
                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0686 5.77796C19.094 5.74633 19.1195 5.71469 19.1413 5.67955C19.1413 5.67955 19.145 5.67603 19.145 5.67252C19.1668 5.63737 19.1886 5.60222 19.2032 5.56356V5.56004C19.2214 5.52138 19.2359 5.48272 19.2468 5.44405C19.2468 5.44054 19.2468 5.44054 19.2468 5.43703C19.2505 5.41594 19.2578 5.39836 19.2614 5.38079C19.265 5.36321 19.2687 5.34212 19.2723 5.32455C19.2723 5.32104 19.2723 5.31752 19.2723 5.31049C19.2759 5.29292 19.2759 5.27534 19.2759 5.25777C19.2759 5.25426 19.2759 5.25426 19.2759 5.25074C19.2759 5.23317 19.2759 5.21559 19.2759 5.1945C19.2759 5.18747 19.2759 5.18396 19.2759 5.17693C19.2759 5.15936 19.2759 5.14178 19.2723 5.12421C19.2687 5.09609 19.2723 5.12069 19.2723 5.12069C19.2723 5.10312 19.2687 5.08203 19.265 5.06446L19.2614 5.0504C19.2541 5.01173 19.2432 4.96956 19.2286 4.93089V4.92738C19.1995 4.84654 19.1595 4.76921 19.1086 4.69892L19.1049 4.69189C19.094 4.67431 19.0795 4.66025 19.0686 4.64619C19.0686 4.64268 19.0649 4.64268 19.0613 4.63916C19.0504 4.6251 19.0395 4.61456 19.0285 4.60402L19.0176 4.59347L19.0104 4.58644L15.0337 0.741248C14.6772 0.396797 14.1023 0.396797 13.7458 0.741248C13.3892 1.0857 13.3892 1.64104 13.7458 1.98549L16.1725 4.32986L1.56484 4.32986C1.06276 4.32986 0.655273 4.72352 0.655273 5.21208C0.655273 5.69712 1.06276 6.09078 1.56484 6.09078L16.1689 6.09078L13.5348 8.6355C13.1782 8.97995 13.1782 9.53528 13.5348 9.87974C13.8913 10.2242 14.4662 10.2242 14.8227 9.87974L19.014 5.83068C19.0285 5.81662 19.0431 5.80256 19.054 5.78851L19.0686 5.77796Z"
                                fill="#333333" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="classes-slider-wrapper">
                <div class="owl-theme owl-carousel classes-slider">
                    <div class="classes-wrapper position-relative" data-aos="fade-left" data-aos-duration="800">
                        <img src="{{ asset('images/spartan') }}/classes/classes_01.jpg" alt="classes">
                        <a href="javascript:void(0)">
                            <div class="class-title">
                                <span>Boxing</span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                        fill="#F41E1E" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="classes-wrapper position-relative" data-aos="fade-left" data-aos-duration="1800">
                        <img src="{{ asset('images/spartan') }}/classes/classes_02.jpg" alt="classes">
                        <a href="javascript:void(0)">
                            <div class="class-title">
                                <span>Cycling</span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                        fill="#F41E1E" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="classes-wrapper position-relative" data-aos="fade-left" data-aos-duration="2200">
                        <img src="{{ asset('images/spartan') }}/classes/classes_03.jpg" alt="classes">
                        <a href="javascript:void(0)">
                            <div class="class-title">
                                <span>Workout</span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                        fill="#F41E1E" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="classes-wrapper position-relative" data-aos="fade-left" data-aos-duration="2200">
                        <img src="{{ asset('images/spartan') }}/classes/classes_04.jpg" alt="classes">
                        <a href="javascript:void(0)">
                            <div class="class-title">
                                <span>RUNNING</span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                        fill="#F41E1E" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="classes-wrapper position-relative">
                        <img src="{{ asset('images/spartan') }}/classes/classes_05.jpg" alt="classes">
                        <a href="javascript:void(0)">
                            <div class="class-title">
                                <span>CARDIO</span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                        fill="#F41E1E" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="classes-wrapper position-relative">
                        <img src="{{ asset('images/spartan') }}/classes/classes_06.jpg" alt="classes">
                        <a href="javascript:void(0)">
                            <div class="class-title">
                                <span>CROSSFIT</span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                        fill="#F41E1E" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="slider-button-block d-block d-lg-none" data-aos="fade-up" data-aos-duration="900">
                <button class="owl-prev">
                    <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.931435 5.77796C0.905968 5.74633 0.880499 5.71469 0.858669 5.67955C0.858669 5.67955 0.855032 5.67603 0.855032 5.67252C0.833202 5.63737 0.811373 5.60222 0.79682 5.56356V5.56004C0.778629 5.52138 0.764076 5.48272 0.75316 5.44405C0.75316 5.44054 0.75316 5.44054 0.75316 5.43703C0.749523 5.41594 0.742247 5.39836 0.738607 5.38079C0.73497 5.36321 0.731331 5.34212 0.727692 5.32455C0.727692 5.32104 0.727692 5.31752 0.727692 5.31049C0.724054 5.29292 0.724054 5.27534 0.724054 5.25777C0.724054 5.25426 0.724054 5.25426 0.724054 5.25074C0.724054 5.23317 0.724054 5.21559 0.724054 5.1945C0.724054 5.18747 0.724054 5.18396 0.724054 5.17693C0.724054 5.15936 0.724054 5.14178 0.727692 5.12421C0.731331 5.09609 0.727692 5.12069 0.727692 5.12069C0.727692 5.10312 0.731331 5.08203 0.73497 5.06446L0.738607 5.0504C0.745884 5.01173 0.7568 4.96956 0.771353 4.93089V4.92738C0.800459 4.84654 0.840479 4.76921 0.891415 4.69892L0.895052 4.69189C0.905968 4.67431 0.920521 4.66025 0.931435 4.64619C0.931435 4.64268 0.935074 4.64268 0.938713 4.63916C0.949627 4.6251 0.960543 4.61456 0.971457 4.60402L0.98237 4.59347L0.989649 4.58644L4.96628 0.741248C5.32283 0.396797 5.89768 0.396797 6.25423 0.741248C6.61078 1.0857 6.61078 1.64104 6.25423 1.98549L3.8275 4.32986L18.4352 4.32986C18.9372 4.32986 19.3447 4.72352 19.3447 5.21208C19.3447 5.69712 18.9372 6.09078 18.4352 6.09078L3.83114 6.09078L6.46525 8.6355C6.8218 8.97995 6.8218 9.53528 6.46525 9.87974C6.1087 10.2242 5.53385 10.2242 5.1773 9.87974L0.98601 5.83068C0.971457 5.81662 0.956903 5.80256 0.945988 5.78851L0.931435 5.77796Z"
                            fill="#333333" />
                    </svg>
                </button>
                <button class="owl-next">
                    <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.0686 5.77796C19.094 5.74633 19.1195 5.71469 19.1413 5.67955C19.1413 5.67955 19.145 5.67603 19.145 5.67252C19.1668 5.63737 19.1886 5.60222 19.2032 5.56356V5.56004C19.2214 5.52138 19.2359 5.48272 19.2468 5.44405C19.2468 5.44054 19.2468 5.44054 19.2468 5.43703C19.2505 5.41594 19.2578 5.39836 19.2614 5.38079C19.265 5.36321 19.2687 5.34212 19.2723 5.32455C19.2723 5.32104 19.2723 5.31752 19.2723 5.31049C19.2759 5.29292 19.2759 5.27534 19.2759 5.25777C19.2759 5.25426 19.2759 5.25426 19.2759 5.25074C19.2759 5.23317 19.2759 5.21559 19.2759 5.1945C19.2759 5.18747 19.2759 5.18396 19.2759 5.17693C19.2759 5.15936 19.2759 5.14178 19.2723 5.12421C19.2687 5.09609 19.2723 5.12069 19.2723 5.12069C19.2723 5.10312 19.2687 5.08203 19.265 5.06446L19.2614 5.0504C19.2541 5.01173 19.2432 4.96956 19.2286 4.93089V4.92738C19.1995 4.84654 19.1595 4.76921 19.1086 4.69892L19.1049 4.69189C19.094 4.67431 19.0795 4.66025 19.0686 4.64619C19.0686 4.64268 19.0649 4.64268 19.0613 4.63916C19.0504 4.6251 19.0395 4.61456 19.0285 4.60402L19.0176 4.59347L19.0104 4.58644L15.0337 0.741248C14.6772 0.396797 14.1023 0.396797 13.7458 0.741248C13.3892 1.0857 13.3892 1.64104 13.7458 1.98549L16.1725 4.32986L1.56484 4.32986C1.06276 4.32986 0.655273 4.72352 0.655273 5.21208C0.655273 5.69712 1.06276 6.09078 1.56484 6.09078L16.1689 6.09078L13.5348 8.6355C13.1782 8.97995 13.1782 9.53528 13.5348 9.87974C13.8913 10.2242 14.4662 10.2242 14.8227 9.87974L19.014 5.83068C19.0285 5.81662 19.0431 5.80256 19.054 5.78851L19.0686 5.77796Z"
                            fill="#333333" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Improve Life -->

<section class="improve">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="main-title-block">
                    <span class="text-white" data-aos="fade-up" data-aos-duration="900">Invista em você</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">Melhore sua vida</h2>
                    <img src="{{ asset('images/spartan') }}/white-arrow.png" data-aos="fade-right" data-aos-duration="1400" alt="arrow">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="improve-video position-relative" data-aos="zoom-in" data-aos-duration="900">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('images/spartan') }}/play.png" alt="play">
                    </button>
                    <img src="{{ asset('images/spartan') }}/background/video-poster.jpg" class="img-fluid poster" alt="poster">
                    <img src="{{ asset('images/spartan') }}/poster_arrow.svg" class="poster-arrow" data-aos="fade-right"
                        data-aos-duration="1200" alt="arrow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Calculate BMI -->

@if(1==2)
<section class="bmi-calculate">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-12 col-lg-6">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">SET HIGH FITNESS GOALS</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">CALCULATE YOUR BMI</h2>
                    <img src="{{ asset('images/spartan') }}/arrow_02.svg" data-aos="fade-right" data-aos-duration="1400" alt="arrow">
                </div>
                <div class="bmi-chart" data-aos="fade-right" data-aos-duration="800">
                    <div class="table-responsive">
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th>BMI</th>
                                    <th>WEIGHT Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Below 18.5</strong></td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td><strong>18.5 - 24.9</strong></td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td><strong>25 - 29.9</strong></td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td><strong>30 and Above</strong></td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p><span>*BMR:</span> Body Metabolic Rate / <span>BMI:</span> Body Mass Index</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="bmi-form" data-aos="fade-up" data-aos-duration="1000">
                    <h2>INPUT YOUR BMI</h2>
                    <p>Discover your body's composition and health insights with our BMI calculator.</p>
                    <form>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Height / CM</label>
                                    <input type="text" class="form-control" placeholder="e.g. 175">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Weight / KG</label>
                                    <input type="text" class="form-control" placeholder="e.g. 80">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" placeholder="e.g. 35">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-select">
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>SELECT AN ACTIVITY FACTOR</label>
                                    <select class="form-select">
                                        <option value="0">Beginner</option>
                                        <option value="1">Intermediate</option>
                                        <option value="2">Advanced</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="theme-btn" type="button">
                            Calculate
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                    fill="#F41E1E"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Pricing -->
@if(1==2)
<section class="pricing" id="pricing" data-id="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">Pricing</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">Choose the best plans</h2>
                    <img src="{{ asset('images/spartan') }}/title-light-arrow.svg" data-aos="fade-right" data-aos-duration="1400"
                        alt="arrow">
                </div>
            </div>
            <div class="col-md-6 col-lg-6 align-self-center">
                <div class="pricing-switch" data-aos="fade-up" data-aos-duration="900">
                    <span id="monthly-text">Monthly</span>
                    <label class="switch pr-5 switch-primary mr-3">
                        <input type="checkbox" id="pricing-slider">
                        <span class="slider"></span>
                    </label>
                    <span id="annually-text">Annually</span>
                </div>
            </div>
        </div>
        <div class="row pricing-row justify-content-center">
            <div class="col-md-6 col-lg-4 pricing-col individual">
                <div class="pricing-wrapper" data-aos="fade-up" data-aos-duration="1200">
                    <div class="pricing-image">
                        <img src="{{ asset('images/spartan') }}/plans/plan_01.jpg" class="img-fluid" alt="plan">
                    </div>
                    <div class="pricing-content">
                        <h3>WARRIOR PLAN</h3>
                        <span class="price"></span>
                        <ul>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>Training Consultation</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>Training Guidance</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>1 Body Composition Analysis</p>
                            </li>
                        </ul>
                        <button class="theme-btn" type="button">
                            Join Now
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                    fill="#F41E1E"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pricing-col premium">
                <div class="pricing-wrapper" data-aos="fade-up" data-aos-duration="1400">
                    <div class="pricing-image">
                        <img src="{{ asset('images/spartan') }}/plans/plan_02.jpg" class="img-fluid" alt="plan">
                    </div>
                    <div class="pricing-content">
                        <h3>GLADIATOR PLAN</h3>
                        <span class="price"></span>
                        <ul>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>8-12 Training Consultations</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>Training Guidance</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>1 Body Composition Analysis</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>2 Tabata Sessions</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>1 Sauna Treatment</p>
                            </li>
                        </ul>
                        <button class="theme-btn" type="button">
                            Join Now
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                    fill="#F41E1E"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pricing-col standard">
                <div class="pricing-wrapper" data-aos="fade-up" data-aos-duration="1600">
                    <div class="pricing-image">
                        <img src="{{ asset('images/spartan') }}/plans/plan_03.jpg" class="img-fluid" alt="plan">
                    </div>
                    <div class="pricing-content">
                        <h3>CHAMPION PLAN</h3>
                        <span class="price"></span>
                        <ul>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>Unlimited Gym Trainings</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>Unlimited Sauna Usage</p>
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/list_arrow.svg" alt="arrow">
                                <p>4 Training Consultations</p>
                            </li>
                        </ul>
                        <button class="theme-btn" type="button">
                            Join Now
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                    fill="#F41E1E"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Opening Hours -->

<section class="opening-hours">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">O tempo te dá força</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">Nossos horários</h2>
                    <img src="{{ asset('images/spartan') }}/arrow_02.svg" data-aos="fade-right" data-aos-duration="1400" alt="arrow">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5">
                <div class="hours-content" data-aos="fade-up" data-aos-duration="800">
                    <p>Confira nosso horário de funcionamento flexível para encontrar o momento perfeito para seu treino. Estamos aqui para se ajustar à sua agenda.</p>
                    <div class="hours-block">
                        <div class="hours-flex">
                            <img src="{{ asset('images/spartan') }}/watch.svg" alt="watch">
                            <div>
                                <span>Segunda a Sexta</span>
                                <h6>05h - 21h</h6>
                            </div>
                        </div>
                        <div class="hours-flex">
                            <img src="{{ asset('images/spartan') }}/watch.svg" alt="watch">
                            <div>
                                <span>Sábado e Domingo</span>
                                <h6>07h - 21h</h6>
                            </div>
                        </div>
                    </div>
                    <button class="theme-btn" type="button">
                        Junte-se Agora
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                fill="#F41E1E"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review -->

<section class="review">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">Entrando em forma</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">O que as pessoas dizem</h2>
                    <img src="{{ asset('images/spartan') }}/title-light-arrow.svg" data-aos="fade-right" data-aos-duration="1400"
                        alt="arrow">
                </div>
                <div class="review-content" data-aos="fade-up" data-aos-duration="800">
                    <p>Experimente o auge do fitness na Profitness com instalações de última geração, treinadores especializados e programas personalizados para liberar seu Spartan interior!</p>
                    <div class="review-rating">
                        <ul>
                            <li>
                                <img src="{{ asset('images/spartan') }}/people/people_01.png" alt="people">
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/people/people_02.png" alt="people">
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/people/people_03.png" alt="people">
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/people/people_04.png" alt="people">
                            </li>
                            <li>
                                <img src="{{ asset('images/spartan') }}/people/people_05.png" alt="people">
                            </li>
                        </ul>

                        <div>
                            <span>
                                <i class="fa-solid fa-star"></i>
                                4.8
                            </span>
                            <p>(530 Reviews)</p>
                        </div>
                    </div>

                </div>
                <div class="slider-button-block d-none d-lg-block" data-aos="fade-up" data-aos-duration="800">
                    <button class="owl-prev">
                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.931435 5.77796C0.905968 5.74633 0.880499 5.71469 0.858669 5.67955C0.858669 5.67955 0.855032 5.67603 0.855032 5.67252C0.833202 5.63737 0.811373 5.60222 0.79682 5.56356V5.56004C0.778629 5.52138 0.764076 5.48272 0.75316 5.44405C0.75316 5.44054 0.75316 5.44054 0.75316 5.43703C0.749523 5.41594 0.742247 5.39836 0.738607 5.38079C0.73497 5.36321 0.731331 5.34212 0.727692 5.32455C0.727692 5.32104 0.727692 5.31752 0.727692 5.31049C0.724054 5.29292 0.724054 5.27534 0.724054 5.25777C0.724054 5.25426 0.724054 5.25426 0.724054 5.25074C0.724054 5.23317 0.724054 5.21559 0.724054 5.1945C0.724054 5.18747 0.724054 5.18396 0.724054 5.17693C0.724054 5.15936 0.724054 5.14178 0.727692 5.12421C0.731331 5.09609 0.727692 5.12069 0.727692 5.12069C0.727692 5.10312 0.731331 5.08203 0.73497 5.06446L0.738607 5.0504C0.745884 5.01173 0.7568 4.96956 0.771353 4.93089V4.92738C0.800459 4.84654 0.840479 4.76921 0.891415 4.69892L0.895052 4.69189C0.905968 4.67431 0.920521 4.66025 0.931435 4.64619C0.931435 4.64268 0.935074 4.64268 0.938713 4.63916C0.949627 4.6251 0.960543 4.61456 0.971457 4.60402L0.98237 4.59347L0.989649 4.58644L4.96628 0.741248C5.32283 0.396797 5.89768 0.396797 6.25423 0.741248C6.61078 1.0857 6.61078 1.64104 6.25423 1.98549L3.8275 4.32986L18.4352 4.32986C18.9372 4.32986 19.3447 4.72352 19.3447 5.21208C19.3447 5.69712 18.9372 6.09078 18.4352 6.09078L3.83114 6.09078L6.46525 8.6355C6.8218 8.97995 6.8218 9.53528 6.46525 9.87974C6.1087 10.2242 5.53385 10.2242 5.1773 9.87974L0.98601 5.83068C0.971457 5.81662 0.956903 5.80256 0.945988 5.78851L0.931435 5.77796Z"
                                fill="#333333" />
                        </svg>
                    </button>
                    <button class="owl-next">
                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0686 5.77796C19.094 5.74633 19.1195 5.71469 19.1413 5.67955C19.1413 5.67955 19.145 5.67603 19.145 5.67252C19.1668 5.63737 19.1886 5.60222 19.2032 5.56356V5.56004C19.2214 5.52138 19.2359 5.48272 19.2468 5.44405C19.2468 5.44054 19.2468 5.44054 19.2468 5.43703C19.2505 5.41594 19.2578 5.39836 19.2614 5.38079C19.265 5.36321 19.2687 5.34212 19.2723 5.32455C19.2723 5.32104 19.2723 5.31752 19.2723 5.31049C19.2759 5.29292 19.2759 5.27534 19.2759 5.25777C19.2759 5.25426 19.2759 5.25426 19.2759 5.25074C19.2759 5.23317 19.2759 5.21559 19.2759 5.1945C19.2759 5.18747 19.2759 5.18396 19.2759 5.17693C19.2759 5.15936 19.2759 5.14178 19.2723 5.12421C19.2687 5.09609 19.2723 5.12069 19.2723 5.12069C19.2723 5.10312 19.2687 5.08203 19.265 5.06446L19.2614 5.0504C19.2541 5.01173 19.2432 4.96956 19.2286 4.93089V4.92738C19.1995 4.84654 19.1595 4.76921 19.1086 4.69892L19.1049 4.69189C19.094 4.67431 19.0795 4.66025 19.0686 4.64619C19.0686 4.64268 19.0649 4.64268 19.0613 4.63916C19.0504 4.6251 19.0395 4.61456 19.0285 4.60402L19.0176 4.59347L19.0104 4.58644L15.0337 0.741248C14.6772 0.396797 14.1023 0.396797 13.7458 0.741248C13.3892 1.0857 13.3892 1.64104 13.7458 1.98549L16.1725 4.32986L1.56484 4.32986C1.06276 4.32986 0.655273 4.72352 0.655273 5.21208C0.655273 5.69712 1.06276 6.09078 1.56484 6.09078L16.1689 6.09078L13.5348 8.6355C13.1782 8.97995 13.1782 9.53528 13.5348 9.87974C13.8913 10.2242 14.4662 10.2242 14.8227 9.87974L19.014 5.83068C19.0285 5.81662 19.0431 5.80256 19.054 5.78851L19.0686 5.77796Z"
                                fill="#333333" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div>
                    <div class="carousel-wrapper owl-theme owl-carousel">
                        <div class="review-slider" data-aos="fade-left" data-aos-duration="1200">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>

                            <div class="slider-review-content">
                                <p>GYM é um divisor de águas. Em vez de se afogar em uma cadeia interminável de e-mails, há
                                    uma responsabilidade clara e fácil, o que significa que as tarefas realmente são concluídas! GYm ajudou minha equipe e
                                    eu a permanecermos na mesma página. Anteriormente, estávamos todos espalhados. Usar o Gym definitivamente
                                    nos economizou tempo e dinheiro.</p>
                            </div>

                            <div class="reviewer-name">
                                <div class="review-person">
                                    <img src="{{ asset('images/spartan') }}/people/review_01.jpg" alt="person">
                                    <div>
                                        <h5>Manuel Couto Santos</h5>
                                        <p>Lagoa Santa</p>
                                    </div>
                                </div>
                                <img src="{{ asset('images/spartan') }}/quote.png" alt="quote">
                            </div>

                        </div>
                        <div class="review-slider" data-aos="fade-left" data-aos-duration="1800">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="slider-review-content">
                                <p>Eu recomendaria o GYm para qualquer pessoa que esteja tentando divulgar seu negócio. Isso
                                    me economizou muito tempo!</p>
                            </div>

                            <div class="reviewer-name">
                                <div class="review-person">
                                    <img src="{{ asset('images/spartan') }}/people/review_02.jpg" alt="person">
                                    <div>
                                        <h5>Ricardo Schartle</h5>
                                        <p>Santa Luzia</p>
                                    </div>
                                </div>
                                <img src="{{ asset('images/spartan') }}/quote.png" alt="quote">
                            </div>

                        </div>
                        <div class="review-slider">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>

                            <div class="slider-review-content">
                                <p>Um ótimo lugar para treinar e se manter em forma! Os equipamentos são de alta qualidade e os instrutores são muito profissionais.
                                    As aulas são variadas e desafiadoras, o que torna cada treino interessante. O ambiente é acolhedor e motivador, perfeito para alcançar seus objetivos de fitness. Recomendo a todos que procuram um lugar para se exercitar e melhorar sua saúde!
                                </p>
                            </div>

                            <div class="reviewer-name">
                                <div class="review-person">
                                    <img src="{{ asset('images/spartan') }}/people/review_01.jpg" alt="person">
                                    <div>
                                        <h5>Lúcio Campos</h5>
                                        <p>Lagoa Santa</p>
                                    </div>
                                </div>
                                <img src="{{ asset('images/spartan') }}/quote.png" alt="quote">
                            </div>

                        </div>
                        <div class="review-slider">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="slider-review-content">
                                <p>Eu recomendaria para qualquer pessoa que esteja tentando divulgar seu negócio. Isso
                                    me economizou muito tempo!</p>
                            </div>

                            <div class="reviewer-name">
                                <div class="review-person">
                                    <img src="{{ asset('images/spartan') }}/people/review_02.jpg" alt="person">
                                    <div>
                                        <h5>Renato Costa Soares</h5>
                                        <p>Santa Luzia</p>
                                    </div>
                                </div>
                                <img src="{{ asset('images/spartan') }}/quote.png" alt="quote">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="slider-button-block d-block d-lg-none" data-aos="fade-up" data-aos-duration="800">
                    <button class="owl-prev">
                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.931435 5.77796C0.905968 5.74633 0.880499 5.71469 0.858669 5.67955C0.858669 5.67955 0.855032 5.67603 0.855032 5.67252C0.833202 5.63737 0.811373 5.60222 0.79682 5.56356V5.56004C0.778629 5.52138 0.764076 5.48272 0.75316 5.44405C0.75316 5.44054 0.75316 5.44054 0.75316 5.43703C0.749523 5.41594 0.742247 5.39836 0.738607 5.38079C0.73497 5.36321 0.731331 5.34212 0.727692 5.32455C0.727692 5.32104 0.727692 5.31752 0.727692 5.31049C0.724054 5.29292 0.724054 5.27534 0.724054 5.25777C0.724054 5.25426 0.724054 5.25426 0.724054 5.25074C0.724054 5.23317 0.724054 5.21559 0.724054 5.1945C0.724054 5.18747 0.724054 5.18396 0.724054 5.17693C0.724054 5.15936 0.724054 5.14178 0.727692 5.12421C0.731331 5.09609 0.727692 5.12069 0.727692 5.12069C0.727692 5.10312 0.731331 5.08203 0.73497 5.06446L0.738607 5.0504C0.745884 5.01173 0.7568 4.96956 0.771353 4.93089V4.92738C0.800459 4.84654 0.840479 4.76921 0.891415 4.69892L0.895052 4.69189C0.905968 4.67431 0.920521 4.66025 0.931435 4.64619C0.931435 4.64268 0.935074 4.64268 0.938713 4.63916C0.949627 4.6251 0.960543 4.61456 0.971457 4.60402L0.98237 4.59347L0.989649 4.58644L4.96628 0.741248C5.32283 0.396797 5.89768 0.396797 6.25423 0.741248C6.61078 1.0857 6.61078 1.64104 6.25423 1.98549L3.8275 4.32986L18.4352 4.32986C18.9372 4.32986 19.3447 4.72352 19.3447 5.21208C19.3447 5.69712 18.9372 6.09078 18.4352 6.09078L3.83114 6.09078L6.46525 8.6355C6.8218 8.97995 6.8218 9.53528 6.46525 9.87974C6.1087 10.2242 5.53385 10.2242 5.1773 9.87974L0.98601 5.83068C0.971457 5.81662 0.956903 5.80256 0.945988 5.78851L0.931435 5.77796Z"
                                fill="#333333" />
                        </svg>
                    </button>
                    <button class="owl-next">
                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0686 5.77796C19.094 5.74633 19.1195 5.71469 19.1413 5.67955C19.1413 5.67955 19.145 5.67603 19.145 5.67252C19.1668 5.63737 19.1886 5.60222 19.2032 5.56356V5.56004C19.2214 5.52138 19.2359 5.48272 19.2468 5.44405C19.2468 5.44054 19.2468 5.44054 19.2468 5.43703C19.2505 5.41594 19.2578 5.39836 19.2614 5.38079C19.265 5.36321 19.2687 5.34212 19.2723 5.32455C19.2723 5.32104 19.2723 5.31752 19.2723 5.31049C19.2759 5.29292 19.2759 5.27534 19.2759 5.25777C19.2759 5.25426 19.2759 5.25426 19.2759 5.25074C19.2759 5.23317 19.2759 5.21559 19.2759 5.1945C19.2759 5.18747 19.2759 5.18396 19.2759 5.17693C19.2759 5.15936 19.2759 5.14178 19.2723 5.12421C19.2687 5.09609 19.2723 5.12069 19.2723 5.12069C19.2723 5.10312 19.2687 5.08203 19.265 5.06446L19.2614 5.0504C19.2541 5.01173 19.2432 4.96956 19.2286 4.93089V4.92738C19.1995 4.84654 19.1595 4.76921 19.1086 4.69892L19.1049 4.69189C19.094 4.67431 19.0795 4.66025 19.0686 4.64619C19.0686 4.64268 19.0649 4.64268 19.0613 4.63916C19.0504 4.6251 19.0395 4.61456 19.0285 4.60402L19.0176 4.59347L19.0104 4.58644L15.0337 0.741248C14.6772 0.396797 14.1023 0.396797 13.7458 0.741248C13.3892 1.0857 13.3892 1.64104 13.7458 1.98549L16.1725 4.32986L1.56484 4.32986C1.06276 4.32986 0.655273 4.72352 0.655273 5.21208C0.655273 5.69712 1.06276 6.09078 1.56484 6.09078L16.1689 6.09078L13.5348 8.6355C13.1782 8.97995 13.1782 9.53528 13.5348 9.87974C13.8913 10.2242 14.4662 10.2242 14.8227 9.87974L19.014 5.83068C19.0285 5.81662 19.0431 5.80256 19.054 5.78851L19.0686 5.77796Z"
                                fill="#333333" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trainer -->

<section class="trainer" id="team" data-id="team-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">Time de Excelência</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">para você superar limites</h2>
                    <img src="{{ asset('images/spartan') }}/arrow_02.svg" data-aos="fade-right" data-aos-duration="1400" alt="arrow">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="owl-carousel owl-theme trainer-slider">
                        <div class="trainer-card" data-aos="fade-up" data-aos-duration="1200">
                            <div class="trainer-image position-relative">
                                <img src="{{ asset('images/spartan') }}/trainer/trainer_01.jpg" class="img-fluid" alt="trainer">
                                <div class="trainer-content">
                                    <h6>Roberto Salles</h6>
                                    <p>Fitness Trainer</p>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-card" data-aos="fade-up" data-aos-duration="1800">
                            <div class="trainer-image position-relative">
                                <img src="{{ asset('images/spartan') }}/trainer/trainer_02.jpg" class="img-fluid" alt="trainer">
                                <div class="trainer-content">
                                    <h6>Suzana Coelho</h6>
                                    <p>Lifestyle Coach</p>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-card" data-aos="fade-up" data-aos-duration="2200">
                            <div class="trainer-image position-relative">
                                <img src="{{ asset('images/spartan') }}/trainer/trainer_03.jpg" class="img-fluid" alt="trainer">
                                <div class="trainer-content">
                                    <h6>Julio Castro</h6>
                                    <p>Personal Trainer</p>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-card" data-aos="fade-up" data-aos-duration="2400">
                            <div class="trainer-image position-relative">
                                <img src="{{ asset('images/spartan') }}/trainer/trainer_04.jpg" class="img-fluid" alt="trainer">
                                <div class="trainer-content">
                                    <h6>Sabrina Koi</h6>
                                    <p>Nutrição</p>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-card">
                            <div class="trainer-image position-relative">
                                <img src="{{ asset('images/spartan') }}/trainer/trainer_05.jpg" class="img-fluid" alt="trainer">
                                <div class="trainer-content">
                                    <h6>João Limeira</h6>
                                    <p>Bem-estar e Nutrição</p>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-card">
                            <div class="trainer-image position-relative">
                                <img src="{{ asset('images/spartan') }}/trainer/trainer_06.jpg" class="img-fluid" alt="trainer">
                                <div class="trainer-content">
                                    <h6>Silvio Mendes</h6>
                                    <p>Bem-estar e Nutrição</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
@if(1==2)
<section class="blog" id="blog" data-id="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="main-title-block">
                    <span data-aos="fade-up" data-aos-duration="900">latest blogs</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">Together we succeed</h2>
                    <img src="{{ asset('images/spartan') }}/title-light-arrow.svg" data-aos="fade-right" data-aos-duration="1400"
                        alt="arrow">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-theme owl-carousel blog-slider">
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="1200">
                        <div class="blog-image position-relative">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('images/spartan') }}/blog/blog_01.jpg" class="img-fluid" alt="blog">
                            </a>
                            <span>18 jul'23</span>
                        </div>
                        <div class="blog-content">
                            <a href="javascript:void(0)">Box Fundamental Methods</a>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="1600">
                        <div class="blog-image position-relative">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('images/spartan') }}/blog/blog_02.jpg" class="img-fluid" alt="blog">
                            </a>
                            <span>12 Mar'23</span>
                        </div>
                        <div class="blog-content">
                            <a href="javascript:void(0)">Strength Training Fundamentals</a>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="1800">
                        <div class="blog-image position-relative">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('images/spartan') }}/blog/blog_03.jpg" class="img-fluid" alt="blog">
                            </a>
                            <span>18 Jan'23</span>
                        </div>
                        <div class="blog-content">
                            <a href="javascript:void(0)">How to do Workout with gym</a>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="1200">
                        <div class="blog-image position-relative">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('images/spartan') }}/blog/blog_01.jpg" class="img-fluid" alt="blog">
                            </a>
                            <span>18 jul'23</span>
                        </div>
                        <div class="blog-content">
                            <a href="javascript:void(0)">Box Fundamental Methods</a>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif

<!-- Contact -->

<section class="contact" id="contact">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-12 col-lg-8">
                <div class="main-title-block">
                    <span class="text-white" data-aos="fade-up" data-aos-duration="900">Fale conosco</span>
                    <h2 data-aos="fade-up" data-aos-duration="900">AINDA HOJE!</h2>
                    <img src="{{ asset('images/spartan') }}/white-arrow.png" data-aos="fade-right" data-aos-duration="1400" alt="arrow">
                </div>
                @if ($submissionSuccessful)
                    <div class="alert alert-success" data-aos="fade-up" data-aos-duration="800">
                        Lead enviado com sucesso para o backoffice.
                        @if ($submittedLeadId)
                            Numero: {{ $submittedLeadId }}.
                        @endif
                    </div>
                @endif

                @error('form')
                    <div class="alert alert-danger" data-aos="fade-up" data-aos-duration="800">{{ $message }}</div>
                @enderror

                <form wire:submit="submitLead" data-aos="fade-up" data-aos-duration="800" novalidate>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Primeiro Nome</label>
                            <input type="text" placeholder="Digite seu primeiro nome" wire:model="firstName" autocomplete="given-name">
                            @error('firstName')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Último Nome</label>
                            <input type="text" placeholder="Digite seu último nome" wire:model="lastName" autocomplete="family-name">
                            @error('lastName')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" placeholder="Digite seu email" wire:model="email" autocomplete="email">
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Telefone</label>
                            <input type="text" placeholder="Digite seu telefone" wire:model="phone" autocomplete="tel">
                            @error('phone')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Mensagem</label>
                            <textarea placeholder="Escreva sua mensagem" rows="2" wire:model="leadMessage"></textarea>
                            @error('leadMessage')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button class="theme-btn" type="submit" wire:loading.attr="disabled" wire:target="submitLead">
                        <span wire:loading.remove wire:target="submitLead">Enviar</span>
                        <span wire:loading wire:target="submitLead">Enviando...</span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 11.4713V0H0.526055V1.49626H9.44913L0 10.9426L1.05211 12L10.5112 2.54364V11.4713H12Z"
                                fill="#F41E1E"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-logo">
                    <a href="{{ route('home') }}" data-aos="fade-right" data-aos-duration="1200"><img
                            src="{{ asset('images/spartan') }}/footerlogo.svg" alt="logo"></a>
                    <div class="footer-logo-title position-relative">
                        <h5 class="text-center text-lg-start" data-aos="fade-up" data-aos-duration="900">O
                            <span>segredo</span> do sucesso é começar a
                            <span>agir.</span>
                        </h5>
                        <img src="{{ asset('images/spartan') }}/footer-arrow.svg" data-aos="fade-right" data-aos-duration="1200"
                            alt="arrow">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-12 col-lg-4">
                <div class="footer-links" data-aos="fade-up" data-aos-duration="800">
                    <span>Contato</span>
                    <a href="mailto:contato@profitness.com.br">contato@profitness.com.br</a>
                    <a href="tel:+5531999999999">(31) 9999-9999</a>
                </div>
                <div class="footer-links" data-aos="fade-up" data-aos-duration="800">
                    <span>Siga-nos</span>
                    <ul>
                        <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="row justify-content-end">
                    <div class="col-md-12 col-lg-5">
                        <div class="locations" data-aos="fade-up" data-aos-duration="800">
                            <span>Nossa localização</span>
                            <div class="mb-3 mb-md-4 mb-lg-5" data-aos="fade-right" data-aos-duration="800">
                                <h6>Lagoa Santa</h6>
                                <p>Rua Efigério Pascoal, 33, Lagoa Santa, MG 33400-000</p>
                            </div>
                            <div data-aos="fade-right" data-aos-duration="1200">
                                <h6>Santa Luzia</h6>
                                <p>Avenida dos Esportistas, 40, Santa Luzia, MG 33100-000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="hours" data-aos="fade-up" data-aos-duration="800">
                            <span>Horário de Funcionamento</span>
                            <div class="mb-3 mb-md-4 mb-lg-5" data-aos="fade-right" data-aos-duration="1400">
                                <h6>Segunda - Sexta</h6>
                                <p>Nossas portas estão abertas das 5h às 21h.</p>
                            </div>
                            <div data-aos="fade-right" data-aos-duration="1600">
                                <h6>Finais de Semana</h6>
                                <p>Nossas portas estão abertas das 7h às 21h.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-content">
                    <p>&copy;{{ now()->year }} ProFitness, Todos os direitos reservados.</p>
                    <ul>
                        <li><a href="javascript:void(0)">Política de Privacidade</a></li>
                        <li><a href="javascript:void(0)">Termos e Condições</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade video-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-none">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <iframe src="https://www.youtube.com/embed/yAoLSRbwxL8" title="Dummy Video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</div>