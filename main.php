    <!DOCTYPE html>
    <html lang="hi" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOLVIO | The Premium Smoked Collection</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;600&display=swap"
            rel="stylesheet">
        <script src="https://unpkg.com/lucide@latest"></script>
        <style>
            body {
                font-family: 'Inter', sans-serif;
                overflow-x: hidden;
            }

            .font-serif {
                font-family: 'Playfair Display', serif;
            }

            .hero-bg {
                background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1516685018646-54818bd2a07b?auto=format&fit=crop&q=80&w=1600');
                background-size: cover;
                background-position: center;
            }

            .loader {
                position: fixed;
                inset: 0;
                background: #000;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                transition: opacity 0.8s ease;
            }

            .loader.hide {
                opacity: 0;
                pointer-events: none;
            }

            .loader-ring {
                width: 80px;
                height: 80px;
                border: 3px solid rgba(255, 255, 255, 0.1);
                border-top: 3px solid #d97706;
                border-radius: 50%;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                to {
                    transform: rotate(360deg);
                }
            }

            #main-wrapper {
                opacity: 0;
                transition: opacity 1.5s ease-in-out;
            }

            .reveal {
                opacity: 0;
                transform: translateY(50px) scale(0.95);
                transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
            }

            .reveal.active {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

            #main-nav {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .nav-scrolled {
                background-color: rgba(255, 255, 255, 0.95) !important;
                backdrop-filter: blur(12px) !important;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            }

            .nav-scrolled .nav-link {
                color: #1c1917 !important;
            }

            .nav-scrolled .logo-text {
                color: #d97706 !important;
            }

            .nav-scrolled #menu-btn {
                color: #1c1917 !important;
            }

            .nav-link {
                padding: 10px 24px;
                border-radius: 8px;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                display: inline-block;
                font-weight: 600;
                cursor: pointer;
            }

            .nav-link:hover {
                background-color: #d97706;
                color: #000 !important;
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(217, 119, 6, 0.4);
            }

            .cursor {
                display: inline-block;
                width: 3px;
                background-color: #d97706;
                margin-left: 4px;
                animation: blink 0.7s infinite;
            }

            @keyframes blink {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }
            }

            .force-pointer {
                cursor: pointer !important;
            }

            .product-image-container {
                overflow: hidden;
                border-radius: 1rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            }

            .product-image {
                transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
            }

            .product-image:hover {
                transform: scale(1.05);
            }

            .coming-soon-overlay {
                background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 20%, rgba(0, 0, 0, 0.2));
                transition: background 0.4s ease;
            }

            .group:hover .coming-soon-overlay {
                background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 40%, rgba(217, 119, 6, 0.1));
            }

            .group:hover img {
                transform: scale(1.1);
                opacity: 0.4;
            }

            img {
                transition: all 0.6s ease;
            }
        </style>
        <script>
            if (history.scrollRestoration) {
                history.scrollRestoration = 'manual';
            }
            window.scrollTo(0, 0);
        </script>
    </head>

    <body class="bg-[#0c0c0c] text-stone-200">
        <div id="loader" class="loader">
            <div class="loader-ring"></div>
        </div>

        <div id="main-wrapper">
            <nav id="main-nav" class="fixed w-full z-50 bg-black/80 backdrop-blur-md border-b border-white/10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-20 items-center">
                        <div class="flex items-center">
                            <span
                                class="text-3xl font-serif font-bold tracking-widest text-amber-500 logo-text force-pointer"
                                onclick="window.scrollTo({top: 0, behavior: 'smooth'})">SOLVIO</span>
                        </div>
                        <div class="hidden md:flex space-x-4 items-center">
                            <a href="#home" class="nav-link text-sm uppercase tracking-widest text-stone-200">Home</a>
                            <a href="#products"
                                class="nav-link text-sm uppercase tracking-widest text-stone-200">Collection</a>
                            <a href="#coming-soon" class="nav-link text-sm uppercase tracking-widest text-stone-200">Secret
                                Lab</a>
                            <div class="w-px h-8 bg-white/10 mx-4"></div>
                            <a href="order.php"
                                class="bg-amber-600 text-black font-black px-8 py-3 rounded-lg hover:bg-amber-500 transition uppercase text-sm tracking-tighter shadow-lg shadow-amber-600/20">Order
                                Now</a>
                        </div>
                        <div class="md:hidden">
                            <button id="menu-btn" class="p-2 text-white"><i data-lucide="menu"></i></button>
                        </div>
                    </div>
                </div>
            </nav>

            <section id="home" class="hero-bg h-screen flex items-center justify-center text-center px-4">
                <div class="max-w-4xl">
                    <div
                        class="inline-block border border-amber-500/30 px-4 py-1 rounded-full text-amber-500 text-xs font-bold uppercase tracking-[0.2em] mb-6">
                        Artisanal & Hand-Crafted
                    </div>
                    <h1 class="text-6xl md:text-8xl font-serif text-white mb-6 tracking-tight min-h-[1.2em] force-pointer">
                        <span id="typewriter"></span><span id="cursor" class="cursor">&nbsp;</span>
                    </h1>
                    <p class="text-xl text-stone-400 mb-10 max-w-2xl mx-auto leading-relaxed">A new destination for taste.
                        Solvio brings you the most premium smoked spices for the elite palate.</p>

                    <div class="bg-white/5 border border-white/10 p-6 rounded-xl backdrop-blur-md mb-10 max-w-md mx-auto">
                        <p class="text-amber-500 text-sm font-bold uppercase tracking-widest mb-4">Next batch due:</p>
                        <div class="flex justify-center space-x-6 text-white">
                            <div><span id="timer-h" class="text-3xl font-bold">04</span>
                                <p class="text-[10px] opacity-50">Hours</p>
                            </div>
                            <div class="text-3xl font-bold text-amber-500">:</div>
                            <div><span id="timer-m" class="text-3xl font-bold">22</span>
                                <p class="text-[10px] opacity-50">Mins</p>
                            </div>
                            <div class="text-3xl font-bold text-amber-500">:</div>
                            <div><span id="timer-s" class="text-3xl font-bold">59</span>
                                <p class="text-[10px] opacity-50">Secs</p>
                            </div>
                        </div>
                    </div>

                    <a href="#products"
                        class="inline-block bg-amber-600 text-black px-12 py-4 rounded font-black uppercase tracking-widest hover:bg-amber-500 transform hover:scale-105 transition shadow-[0_0_30px_rgba(217,119,6,0.3)]">
                        Grab Your Jar
                    </a>
                </div>
            </section>

            <section id="products" class="py-24 bg-[#0a0a0a] reveal">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col lg:flex-row items-center gap-16">
                        <div class="lg:w-1/2 relative">
                            <div class="absolute -top-10 -left-10 w-40 h-40 bg-amber-600/10 rounded-full blur-3xl"></div>
                            <div class="product-image-container border border-white/10 z-10 relative">
                                <img src="wmremove-transformed.png" alt="Premium Smoked Garlic Salt"
                                    class="product-image w-full h-auto object-cover">
                            </div>
                        </div>
                        <div class="lg:w-1/2">
                            <h2 class="text-amber-500 uppercase tracking-[0.3em] font-bold text-sm mb-4">Signature Series
                            </h2>
                            <h3 class="text-5xl font-serif text-white mb-6 force-pointer hover:text-amber-500 transition">
                                Smoked Garlic Salt</h3>
                            <p class="text-stone-400 text-lg mb-8 leading-relaxed">Our signature product. Garlic and oakwood
                                smoked flavor that will add a unique touch to your omelet, pasta, or steak. It's not just
                                salt, it's an emotion.</p>

                            <div class="flex items-center space-x-6 mb-10">
                                <span class="text-4xl font-bold text-white">₹199</span>
                                <span class="text-stone-500 line-through">₹499</span>
                                <span class="bg-green-600/20 text-green-500 text-xs font-bold px-2 py-1 rounded">Save
                                    25%</span>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="order.php" 
                                class="bg-white text-black px-10 py-4 rounded font-bold hover:bg-amber-500 transition cursor-pointer text-center flex items-center justify-center">
                                Buy Now
                                </a>
                                <button id="shareBtn"
                                    class="border border-white/20 text-white px-10 py-4 rounded font-bold hover:bg-white/10 transition flex items-center justify-center cursor-pointer">
                                    <i data-lucide="share-2" class="w-4 h-4 mr-2"></i> <span id="shareBtnText">Share</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="coming-soon" class="py-24 bg-[#0c0c0c] reveal">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-amber-500 uppercase tracking-[0.3em] font-bold text-sm mb-4">Under Development</h2>
                        <h3 class="text-5xl font-serif text-white">The Secret Lab</h3>
                        <p class="text-stone-500 mt-4">Something smoky is brewing. Experimental flavors for the bold.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="relative group rounded-2xl overflow-hidden border border-white/5">
                            <img src="https://images.unsplash.com/photo-1599940824399-b87987ceb72a?auto=format&fit=crop&q=80&w=600"
                                alt="Himalayan Pepper" class="w-full h-80 object-cover opacity-60">
                            <div
                                class="absolute inset-0 coming-soon-overlay flex flex-col items-center justify-center text-center p-6">
                                <span
                                    class="bg-amber-600/20 text-amber-500 text-[10px] font-bold tracking-[0.2em] px-3 py-1 rounded-full mb-4">NEW
                                    VARIETY</span>
                                <h4 class="text-2xl font-serif text-white mb-2">Black Truffle Salt</h4>
                                <p class="text-stone-400 text-sm mb-6">Duniya ka sabse premium flavor, ab Solvio ke touch ke saath.</p>
                                <button class="text-amber-500 text-xs font-bold border-b border-amber-500 pb-1">NOTIFY ME</button>
                            </div>
                        </div>

                        <div class="relative group rounded-2xl overflow-hidden border border-white/5">
                            <img src="https://images.unsplash.com/photo-1532336414038-cf19250c5757?auto=format&fit=crop&q=80&w=600"
                                alt="Chili Infusion" class="w-full h-80 object-cover opacity-60">
                            <div
                                class="absolute inset-0 coming-soon-overlay flex flex-col items-center justify-center text-center p-6">
                                <span
                                    class="bg-amber-600/20 text-amber-500 text-[10px] font-bold tracking-[0.2em] px-3 py-1 rounded-full mb-4">NEW
                                    VARIETY</span>
                                <h4 class="text-2xl font-serif text-white mb-2">Smoked Peri-Peri</h4>
                                <p class="text-stone-400 text-sm mb-6">Thoda teekha, thoda smoked. Aapke snacks ka naya best friend.</p>
                                <button class="text-amber-500 text-xs font-bold border-b border-amber-500 pb-1">NOTIFY ME</button>
                            </div>
                        </div>

                        <div class="relative group rounded-2xl overflow-hidden border border-white/5">
                            <img src="https://images.unsplash.com/photo-1506459225024-1428097a7e18?auto=format&fit=crop&q=80&w=600"
                                alt="Herb Mix" class="w-full h-80 object-cover opacity-60">
                            <div
                                class="absolute inset-0 coming-soon-overlay flex flex-col items-center justify-center text-center p-6">
                                <span
                                    class="bg-amber-600/20 text-amber-500 text-[10px] font-bold tracking-[0.2em] px-3 py-1 rounded-full mb-4">NEW
                                    VARIETY</span>
                                <h4 class="text-2xl font-serif text-white mb-2">Herbal Ocean Salt</h4>
                                <p class="text-stone-400 text-sm mb-6">Samundar ki taazgi aur organic herbs ka perfect blend.</p>
                                <button class="text-amber-500 text-xs font-bold border-b border-amber-500 pb-1">NOTIFY ME</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="py-24 bg-black border-t border-white/5 reveal">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                        <div>
                            <span class="text-3xl font-serif font-bold text-white mb-6 block force-pointer"
                                onclick="window.scrollTo({top: 0, behavior: 'smooth'})">SOLVIO</span>
                            <p class="text-stone-500 text-sm">Our aim is to bring premium taste to every home❤️.</p>
                        </div>
                        <div>
                            <h5 class="text-white font-bold mb-6">Quick Links</h5>
                            <ul class="space-y-4 text-stone-500 text-sm">
                                <li><a href="#home" class="hover:text-amber-500 cursor-pointer">Home</a></li>
                                <li><a href="#products" class="hover:text-amber-500 cursor-pointer">Products</a></li>
                                <li><a href="#coming-soon" class="hover:text-amber-500 cursor-pointer">Secret Lab</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-white font-bold mb-6">Contact Us</h5>
                            <ul class="space-y-4 text-stone-500 text-sm">
                                <li class="flex items-center hover:text-amber-500 transition">
                                    <a href="tel:+919574679695" class="flex items-center cursor-pointer">
                                        <i data-lucide="phone" class="w-4 h-4 mr-2 text-amber-500"></i> +91 95746 79695
                                    </a>
                                </li>
                                <li class="flex items-center hover:text-amber-500 transition">
                                    <a href="mailto:solvio.craftedbyfire@gmail.com"
                                        class="flex items-center cursor-pointer">
                                        <i data-lucide="mail"
                                            class="w-4 h-4 mr-2 text-amber-500"></i>solvio.craftedbyfire@gmail.com
                                    </a>
                                </li>
                                <li class="flex items-center"><i data-lucide="map-pin"
                                        class="w-4 h-4 mr-2 text-amber-500"></i> Surat, Gujarat</li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-white font-bold mb-6">Follow The Vibe</h5>
                            <div class="flex space-x-4">
                                <a href="https://www.instagram.com/solvio_craftedbyfire?igsh=NGFuMjI3MHhhejV5"
                                    target="_blank"
                                    class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-amber-600 transition text-white cursor-pointer">
                                    <i data-lucide="instagram" class="w-5 h-5"></i>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-amber-600 transition text-white cursor-pointer">
                                    <i data-lucide="facebook" class="w-5 h-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-20 pt-8 border-t border-white/5 text-center text-stone-600 text-xs">
                        &copy; 2026 SOLVIO PREMIUM BRANDS. Elevating your kitchen, one pinch at a time.
                    </div>
                </div>
            </section>
        </div>

        <script>
            lucide.createIcons();

            // ✅ PROFESSIONAL SHARE FEATURE SCRIPT
            const shareBtn = document.getElementById('shareBtn');
            const shareBtnText = document.getElementById('shareBtnText');

            shareBtn.addEventListener('click', async () => {
                if (navigator.share) {
                    // If the browser supports native sharing (mainly Mobile)
                    try {
                        await navigator.share({
                            title: 'SOLVIO | Premium Smoked Garlic Salt',
                            text: 'Aapne yeh try kiya? Solvio ka Premium Smoked Garlic Salt - Sirf ₹199 mein! 🔥',
                            url: window.location.href,
                        });
                    } catch (err) {
                        console.log('Share canceled or failed');
                    }
                } else {
                    // Fallback for Desktop: Copy to clipboard
                    try {
                        await navigator.clipboard.writeText(window.location.href);
                        shareBtnText.innerText = "Link Copied!";
                        setTimeout(() => {
                            shareBtnText.innerText = "Share";
                        }, 2000);
                    } catch (err) {
                        alert('Unable to share. Please copy the URL manually.');
                    }
                }
            });


            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    if (this.getAttribute('href').startsWith('#')) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href');
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            const navHeight = 80;
                            const targetPosition = targetElement.offsetTop - navHeight;
                            window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                        }
                    }
                });
            });

            const text = "meet patel";
            const typewriterElement = document.getElementById('typewriter');
            const cursorElement = document.getElementById('cursor');
            let index = 0;

            function typeWriter() {
                if (index < text.length) {
                    if (index < 5) {
                        typewriterElement.innerHTML += text.charAt(index);
                    } else {
                        if (index === 5) typewriterElement.innerHTML += '<span class="italic text-amber-500">';
                        typewriterElement.querySelector('.text-amber-500').innerHTML += text.charAt(index);
                        if (index === text.length - 1) typewriterElement.innerHTML += '</span>';
                    }
                    index++;
                    setTimeout(typeWriter, 150);
                } else {
                    cursorElement.style.display = 'none';
                }
            }

            const navbar = document.getElementById('main-nav');
            window.onscroll = function () {
                if (window.scrollY > 50) navbar.classList.add('nav-scrolled');
                else navbar.classList.remove('nav-scrolled');
            };

            window.addEventListener('load', () => {
                document.getElementById('loader').classList.add('hide');
                setTimeout(() => {
                    document.getElementById('main-wrapper').style.opacity = '1';
                    typeWriter();
                }, 500);
            });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('active'); });
            }, { threshold: 0.15 });
            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

            let h = 4, m = 22, s = 59;
            setInterval(() => { 
                s--;
                if (s < 0) { s = 59; m--; }
                if (m < 0) { m = 59; h--; }
                document.getElementById('timer-h').innerText = h.toString().padStart(2, '0');
                document.getElementById('timer-m').innerText = m.toString().padStart(2, '0');
                document.getElementById('timer-s').innerText = s.toString().padStart(2, '0');
            }, 1000);
        </script>
    </body>
    </html>