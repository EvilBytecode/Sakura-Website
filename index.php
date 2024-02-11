
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link href="frontend/img/sakura_logo.png" rel="icon" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;400;700;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Primary Meta Tags -->
    <title>
        Sakura
    </title>
    <link rel="stylesheet" href="frontend/main/main.css">
    <link rel="stylesheet" href="frontend/fonts/fontstyles.css">

    <meta content="Sakura" name="title" />
    <meta content="The best Dahood external on the market" name="description" />
    <meta content="#0F0F0F" name="theme-color" />
    <!-- Open Graph / Facebook -->
    <meta content="website" property="og:type" />
    <meta content="https://YOURDOMAINHERE.gg/" property="og:url" />
    <meta content="Sakura" property="og:title" />
    <meta content="The best Dahood external on the market" property="og:description" />
    <meta content="frontend/img/sakura_banner.png" property="og:image" />
    <!-- Twitter -->
    <meta content="summary_large_image" property="twitter:card" />
    <meta content="https://YOURDOMAINHERE.gg/" property="twitter:url" />
    <meta content="Sakura" property="twitter:title" />
    <meta content="The best Dahood external on the market" property="twitter:description" />
    <meta content="frontend/img/sakura_banner.png" property="twitter:image" />
    <meta content="width=device-width" name="viewport" />
</head>

<body data-sveltekit-preload-data="hover">
    <div style="display: contents">
        <header
            class="flex w-full items-center py-2 px-3 bg-[#151515] fixed backdrop-blur-xl bg-[#0F0F0F]/50 backdrop-saturate-150 border-b-[1px] border-[#C8C8C8]/10 z-10 whitespace-nowrap">
            <a class="flex w-fit font-bold items-center gap-2 cursor-pointer py-1 group" href="/">
                <span class="text-xl group-hover:text-[#CD2096] transition-colors">
                    Sakura
                </span>
                <span class="text-xs text-[#C8C8C8] self-end mb-[3px]">
                    v1.0
                </span>
            </a>
            <div class="flex flex-[1_1_auto]">
            </div>
            
            <div class="flex gap-2">
                <a class="btn" href="PURCHASE LINK HERE">
                    Purchase
                </a>
                
                <a class="btn" href="https://discord.com/invite/zuT8g7pb" target="_blank">
                    Visit Discord
                </a>
                <a class="btn" href="frontend/site/tos.php" id="tosLink">
            Terms of Service
        </a>

            </div>
        </header>
        <div
            class="flex flex-col w-fit px-4 h-full mx-auto items-center justify-center gap-3 bg-[url('/sakura_anim.gif')] hue-rotate-[40deg] bg-cover bg-clip-text bg-center">
            <h1 class="text-8xl sm:text-9xl font-bold text-white">
                Sakura
                <span class="text-transparent text-4xl sm:text-5xl">
                    v1.0
                </span>
            </h1>
            <p class="text-sm sm:text-lg text-white">
                The best Dahood external on the market.
            </p>
            <div class="coollol">
                <a class="bg-black/50 hover:bg-black/10 transition-all px-6 py-2 text-xl font-bold border-2 rounded-full border-[#C8C8C8]/20 hover:border-[#C8C8C8]/40 hover:text-black"
                    href="PURCHASE LINK HERE">
                    Purchase
                </a>
                
            </div>
            <div class="flex flex-col p-4 gap-2 rounded-lg rounded-b-[0] border-[1px] border-white/20 mt-14 w-full">
                <span class="font-bold text-white/80">
                    Changelog
                </span>
                <div class="flex flex-col font-mono text-xs text-white/70">
                    <span>
            <?php include 'api/robloxver.php'; ?>
                    </span>
                    <span>
                        [+] Camera FOV Modification
                    </span>
                    <span>
                        [+] Camera Aimbot
                    </span>
                    <span>
                        [+] No Jump Cooldown
                    </span>
                    <span>
                        [+] Whitelist system
                    </span>
                </div>


                <div class="flex gap-2 w-full font-mono text-sm">
                    <div
                        class="flex items-center gap-[6px] p-2 rounded-bl-lg border-[1px] border-white/20 w-full justify-center">
                        <svg class="lucide lucide-check" fill="none" height="16" stroke="#0BD367" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="3" viewbox="0 0 24 24" width="16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6 9 17l-5-5">
                            </path>
                        </svg>
                        <span>
                            Windows 10
                        </span>
                    </div>
                    <div
                        class="flex items-center gap-[6px] p-2 rounded-br-lg border-[1px] border-white/20 w-full justify-center">
                        <svg class="lucide lucide-x-circle" fill="none" height="16" stroke="#FF0000"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="3" viewBox="0 0 24 24"
                            width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6l12 12"></path>
                        </svg>
                        <span>
                            Windows 11
                        </span>
                    </div>

                </div>
            </div>
            <footer class="flex p-2 gap-2 justify-between" id="website made by @someplace on dizzy">
                <p class="text-white/80 text-xs">
                    Sakura © 2024
                </p>
                <a class="text-white/80 text-xs underline" href="https://discord.com/invite/zuT8g7pb">
                    discord.gg/zuT8g7pb
                </a>
            </footer>
        </div>
</body>

</html>

<style>
    
         body {
         background: url('https://cdn.discordapp.com/attachments/1151159745621803049/1151860862961856593/background.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         background-color: #000;
         }
         body::after {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100vh;
         background: rgba(0, 0, 0, 0.79);
         z-index: -2;
         }
         body::before {
         content: '';
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100vh;
         background: url('https://cdn.discordapp.com/attachments/1151481817048825888/1151578856579403817/bg-pattern.png');
         z-index: -1;
         animation: backgroundPanel_anim 1000s linear infinite;
         }
         @keyframes backgroundPanel_anim {
         0% {
         background-position-x: 0;
         }
         25%, 50%, 75% {
         background-position-x: 3000px;
         }
         100% {
         background-position-x: 0;
         }
         }
</style>
