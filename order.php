<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Order | SOLVIO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #0c0c0c; 
            color: #e7e5e4; 
            overflow-x: hidden;
        }
        .font-serif { font-family: 'Playfair Display', serif; }
        .glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255, 255, 255, 0.05); 
        }

        .animate-order-page {
            animation: slideUpFade 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        @keyframes slideUpFade {
            from { opacity: 0; transform: translateY(40px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .custom-input:focus {
            border-color: #d97706;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 15px rgba(217, 119, 6, 0.1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6">

    <div class="max-w-xl w-full animate-order-page">
        
        <button onclick="goBack()" class="inline-flex items-center text-amber-500 mb-8 hover:text-amber-400 transition-all hover:-translate-x-1">
            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to Home
        </button>

        <div class="glass p-8 md:p-12 rounded-3xl shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-amber-600 to-transparent"></div>

            <div class="text-center mb-10">
                <h1 class="text-4xl font-serif text-white mb-2 tracking-tight">Order Your Jar</h1>
                <p class="text-stone-500 text-sm uppercase tracking-[0.3em]">Premium Smoked Garlic Salt</p>
            </div>

            <form class="space-y-6" method="POST">
                <div class="group">
                    <label class="block text-xs font-bold text-amber-500 uppercase tracking-[0.2em] mb-3">Full Name</label>
                    <input type="text" id="cust_name" required placeholder="Your Name" 
                        class="custom-input w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white outline-none transition-all">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-amber-500 uppercase tracking-[0.2em] mb-3">Quantity</label>
                        <select id="cust_qty" class="w-full bg-stone-900 border border-white/10 rounded-xl px-5 py-4 text-white focus:border-amber-500 outline-none transition cursor-pointer">
                            <option value="" disabled selected>Select Jars</option>
                            <option value="1 Jar">1 Jar (₹199)</option>
                            <option value="2 Jars">2 Jars (₹398)</option>
                            <option value="5 Jars">5 Jars -Bulk Order</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-amber-500 uppercase tracking-[0.2em] mb-3">Phone Number</label>
                        <input type="tel" id="cust_phone" required placeholder="+1 1234.." 
                            class="custom-input w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white outline-none transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-amber-500 uppercase tracking-[0.2em] mb-3">Pincode</label>
                        <input type="text" id="pincode" required placeholder="400001" 
                            class="custom-input w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-amber-500 uppercase tracking-[0.2em] mb-3">Email</label>
                        <input type="email" id="email" required placeholder="abc@mail.com" 
                            class="custom-input w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-amber-500 uppercase tracking-[0.2em] mb-3">Delivery Address</label>
                    <textarea id="cust_address" required rows="3" placeholder="Emter Your Delivery Address" 
                        class="custom-input w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white outline-none transition-all"></textarea>
                </div>

                <button type="button" onclick="sendToWhatsApp()" 
                    class="w-full bg-amber-600 text-black font-black py-5 rounded-xl hover:bg-amber-500 transform hover:scale-[1.02] active:scale-[0.98] transition-all shadow-xl shadow-amber-600/20 uppercase tracking-widest text-sm">
                    Confirm Order via WhatsApp
                </button>
                
                <p class="text-center text-[10px] text-stone-600 uppercase tracking-tighter">
                    After filling the form, WhatsApp will open, click on 'Send' there.
                </p>
            </form>
        </div>
    </div>

    <script>
        lucide.createIcons();

        // ✅ मुख्य बदलाव: यह फंक्शन आपको पिछले पेज की उसी जगह पर ले जाएगा
        function goBack() {
            if (document.referrer.includes("main.php")) {
                window.history.back();
            } else {
                window.location.href = "main.php";
            }
        }

        function sendToWhatsApp() {
            const name = document.getElementById('cust_name').value;
            const qty = document.getElementById('cust_qty').value;
            const phone = document.getElementById('cust_phone').value;
            const pincode = document.getElementById('pincode').value;
            const email = document.getElementById('email').value;
            const address = document.getElementById('cust_address').value;

            if(!name || !qty || !phone || !pincode || !email || !address) {
                alert("Please Fill all the field and then Submit");
                return;
            }

             const message = `🔥 *SOLVIO NEW ORDER* 🔥%0A` +
                            `--------------------------%0A` +
                            `👤 *Name:* ${name}%0A` +
                            `📦 *Quantity:* ${qty}%0A` +
                            `📞 *Phone:* ${phone}%0A` +
                            `📍 *Pincode:* ${pincode}%0A` +
                            `📧 *Email:* ${email}%0A` +
                            `🏠 *Address:* ${address}%0A` +
                            `--------------------------%0A` ;

            
            const whatsappURL = `https://wa.me/919574679695?text=${message}`;
            window.open(whatsappURL, '_blank');
        }
    </script>
</body>
</html>