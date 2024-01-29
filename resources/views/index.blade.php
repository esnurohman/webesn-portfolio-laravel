<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Website Portfolio ESN</title>
</head>
<body class="bg-slate-900">
    
    {{-- Header section start --}}
    {{-- Header section end --}}

    {{-- Hero section start --}}
    <section id="home" class="pt-36 pb-2">
        <div class="container items-center justify-between mx-auto text-center ">
            <div class="flex flex-wrap max-w-full">
                <div class="w-full lg:w-1/2 self-center px-4 shadow-secondary border-double border-secondary">
                    <h1 class="text-base text-third pb-2">
                        <span class="text-2xl lg:text-4xl bg-secondary rounded-sm 
                        mx-auto text-primary font-bold ">Eep Syaiful Nurohman </span>
                        <br>
                        Web Developer
                    </h1>
                    <p class="text-secondary font-medium mb-5">
                        Sedang Belajar Programming terkhusus pada Website Development.
                    </p>
                    <div class="flex items-center justify-center">
                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/in/eep-syaiful-nurohman-148442211/" 
                        target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary hover:border-primary hover:bg-secondary hover:text-third">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>LinkedIn</title>
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        
                        {{-- Github --}}
                        <a href="https://github.com/esnurohman" 
                        target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary hover:border-primary hover:bg-secondary hover:text-third">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                            </svg>
                        </a>
                        
                        
                        {{-- <a href="#"class="text-base font-semibold
                            text-primary bg-secondary py-3 px-8 rounded-full
                            hover:shadow-lg hover:opacity-80 transition 
                            duration-300 ease-in-out">
                            Portofolioku 
                        <span class="fill-current"></span> </a> --}}
                    </div>
                    <div class="flex items-center justify-center pt-5  ">
                        <button
                            class="w-[140px] h-[40px] shadow-2xl bg-third outline outline-offset-2 outline-1 outline-third hover:scale-[1.03] hover:outline-none duration-300 active:scale-[0.99]"
                        >
                        <a class="font-bold" href="#portfolio">Portfolioku</a>
                        </button>
                    </div>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10">
                        <img src="img/me1.png" alt="me"
                        class="max-w-full mx-auto md:w-auto ">
                        
                        <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-48 translate-y-16 mb-20">
                            <svg width="400" height="400" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800"><defs><filter id="nnneon-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feGaussianBlur stdDeviation="17 8" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter><filter id="nnneon-filter2" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feGaussianBlur stdDeviation="10 17" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g stroke-width="16" stroke="hsl(0, 0%, 100%)" fill="none" transform="rotate(161, 400, 400)"><rect width="421" height="421" x="189.5" y="189.5" filter="url(#nnneon-filter)" rx="0" ry="0"></rect><rect width="421" height="421" x="309.5" y="189.5" filter="url(#nnneon-filter2)" opacity="1" rx="0" ry="0"></rect><rect width="421" height="421" x="69.5" y="189.5" filter="url(#nnneon-filter2)" opacity="1" rx="0" ry="0"></rect><rect width="421" height="421" x="189.5" y="189.5" rx="0" ry="0"></rect></g></svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- hero section end --}}

    {{-- Portfolio section start --}}
    <section id="portfolio" class="pt-24 pb-12">
        <div class="container items-center justify-between mx-auto">
            <div class="flex border-t border-secondary pt-3">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h3 class="font-bold uppercase text-primary text-lg max-w-xl">Portfolio</h3>
                    <h4 class="font-base text-third mb-4 text-lg lg:text-4xl">Work Collection</h4>
                    <p class="text-secondary font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, vero!</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Portfolio section end --}}

    {{-- MyArt section start --}}
    <section class="pt-24 pb-12">
        <div class="container items-center justify-between mx-auto">
            <div class="flex border-t border-secondary pt-3">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h3 class="font-bold uppercase text-primary text-lg max-w-xl">Gambar</h3>
                    <h4 class="font-base text-third mb-4 text-lg lg:text-4xl">Hobi Saja</h4>
                    <p class="text-secondary font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, vero!</p>
                </div>
            </div>
        </div>
    </section>
    {{-- MyArt section end --}}

    {{-- Footer start --}}
    <footer class="pt-24 pb-12">
        <div class="container items-center justify-between mx-auto">
            <div class="w-full pt-10 border-t border-secondary">
                <div class="flex items-center justify-center mb-5 ">
                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/eep-syaiful-nurohman-148442211/" 
                    target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary hover:border-primary hover:bg-secondary hover:text-third">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    
                    {{-- Github --}}
                    <a href="https://github.com/esnurohman" 
                    target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary hover:border-primary hover:bg-secondary hover:text-third">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                        </svg>
                        
                    </a>
                    
                </div>
                <p class="text-center font-medium text-slate-700">
                    Dibuat oleh Eep Syaiful Nurohman	&copy; 2024
                </p>
            </div>
        </div>
    </footer>
    {{-- footer end --}}
</body>
</html>