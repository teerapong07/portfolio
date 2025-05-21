<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Explore the portfolio of Teerapong, a Full Stack Developer specializing in PHP, Laravel, Node.js, and MySQL. Experienced in building internal systems and modern web applications.">
    <meta name="keywords"
        content="Full Stack Developer, PHP, Laravel, Node.js, MySQL, Web Developer, Portfolio, Chiang Mai, Teerapong">
    <meta name="author" content="Teerapong">

    <meta property="og:title" content="Teerapong | Full Stack Developer Portfolio">
    <meta property="og:description"
        content="Check out the works and skills of Teerapong, a Full Stack Developer experienced in PHP, Laravel, Node.js, and MySQL.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.teerapongdev.com">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Teerapong | Full Stack Developer Portfolio">
    <meta name="twitter:description"
        content="Check out the works and skills of Teerapong, a Full Stack Developer experienced in PHP, Laravel, Node.js, and MySQL.">
    <meta name="twitter:image" content="{{ asset('images/og-image.png') }}">

    <title>Teerapong - Portfolio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
</head>

<body class="font-display text-white bg-gray-950">
    <div class="container mx-auto px-4 py-4">
        <header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-lg bg-black/40 border-b border-white/10">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <div class="font-bold text-xl">PORTFOILO</div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#about" class="hover:text-purple-400 transition-colors">About</a>
                    <a href="#education" class="hover:text-purple-400 transition-colors">Education</a>
                    <a href="#experience" class="hover:text-purple-400 transition-colors">Experience</a>
                    <a href="#project" class="hover:text-purple-400 transition-colors">Project</a>
                    <a href="#skill" class="hover:text-purple-400 transition-colors">Skill</a>
                    <a href="#contact" class="hover:text-purple-400 transition-colors">Contact</a>
                </nav>
            </div>
        </header>
        <div class="py-20 scroll-mt-20">
            <section id="about" class="grid md:grid-cols-2 gap-12 items-start py-16 mt-8">
                <div class="p-8 rounded-2xl">
                    <h1 class="text-5xl md:text-6xl font-bold mb-4">Hi, I'm <span
                            class="text-purple-400 text-7xl">Teerapong</span></h1>
                    <h2 class="text-2xl md:text3xl">Full Stack Developer</h2>
                </div>
                <div class="p-8">
                    <p class="text-gray-300 mb-8 text-lg">
                        I am a Full Stack Developer with over 1 year of experience working with PHP.
                        I graduated from Rajamangala University of Technology Lanna and currently work at the
                        Multidisciplinary Research
                        Institute, Chiang Mai University, as a Full Stack Developer and IT Support.
                    </p>
                    <p class="text-gray-300 mb-8 text-lg">
                        I develop and maintain web applications using PHP and Laravel. In addition to my professional
                        role, I've dedicated over two years to personal and academic projects, which have strengthened
                        my full-stack development skills and deepened my understanding of web technologies.
                    </p>
                    <div class="flex space-x-4">
                        <a href="{{ asset('files/CV-Teerapong.pdf') }}" target="_blank"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 glass-button cursor-pointer"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-download mr-2 h-4 w-4">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" x2="12" y1="15" y2="3"></line>
                            </svg> Download CV
                        </a>
                        <a href="mailto:teerapong.nokaew07@gmail.com"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 glass-button-outline cursor-pointer"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail mr-2 h-4 w-4">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg> Contact Me
                        </a>
                    </div>
                </div>
            </section>

            {{-- Section Education --}}
            @include('sections.education')

            {{-- Section Expreience --}}
            @include('sections.expreience')

            {{-- Section Project --}}
            @include('sections.project')

            {{-- Section Skills --}}
            @include('sections.skill')

            {{-- Section Contact --}}
            @include('sections.contact')
        </div>
    </div>

</body>

</html>
