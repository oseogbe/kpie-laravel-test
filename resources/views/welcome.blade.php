<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head title="Capital International Group" />

<body class="antialiased bg-[#1b1529]">
    <div class="selection:transparent">
        <header class="w-full fixed top-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 bg-[#1b1529] shadow-md">
            <nav class="w-full max-w-7xl mx-auto sm:flex sm:items-center sm:justify-between px-4 py-2 lg:px-0 lg:py-4"
                aria-label="Global">
                <a href="/"><img src="/img/capital.png" alt="capital" /></a>
                <div class="hidden lg:flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:ps-5">
                    <a class="font-medium text-white hover:text-[#bb8b41] transition" href="#">Investment
                        Services</a>
                    <a class="font-medium text-white hover:text-[#bb8b41] transition" href="#">Banking</a>
                    <a class="font-medium text-white hover:text-[#bb8b41] transition" href="#">Company</a>
                    <a class="font-medium text-[#bb8b41]" href="/login">Login</a>
                    <a class="font-medium px-4 py-2 bg-[#bb8b41] hover:bg-[#966f34] text-white rounded-3xl"
                        href="/register">Get Started</a>
                    <div class="cursor-pointer">
                        <svg fill="white" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="100" height="100" viewBox="0 0 30 30">
                            <path
                                d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
                            </path>
                        </svg>
                    </div>
                </div>
            </nav>
        </header>

        <main class="w-full max-w-7xl mx-auto md:pt-20 md:pb-40">
            <div class="w-full flex flex-col items-center justify-center pt-48 pb-12 text-center">
                <h3 class="text-3xl lg:text-7xl text-white alike-angular-regular">
                    Invest with us. Bank with us.
                    <div class="text-[#bb8b41] mt-4">Grow with us.</div>
                </h3>
                <p class="mt-8 text-white text-md lg:text-2xl px-4 lg:px-60">Explore the ultimate suite of financial
                    services
                    designed to
                    simplify asset
                    and
                    cash management for
                    businesses, intermediaries and high net worth individuals. </p>
            </div>
            <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">
                <div class="px-8 py-6 bg-white rounded-xl">
                    <h4 class="mb-2 text-2xl font-semibold text-[#2f2f40]">Investment Platform</h4>
                    <p class="text-[#2f2f40] my-5">Use our international investment platform to place your own trades
                        across an almost unlimited
                        universe of assets.</p>
                    <a class="font-medium px-4 py-2 bg-[#bb8b41] hover:bg-[#966f34] text-white rounded-3xl transition"
                        href="#">Learn more</a>
                </div>
                <div class="px-8 py-6 bg-white rounded-xl">
                    <h4 class="mb-2 text-2xl font-semibold text-[#2f2f40]">Investment Management</h4>
                    <p class="text-[#2f2f40] text-md my-5">Let us manage your investments. Select the optimal
                        discretionary
                        strategy to meet you or your client's long-term financial goals.</p>
                    <a class="font-medium px-4 py-2 bg-[#bb8b41] hover:bg-[#966f34] text-white rounded-3xl transition"
                        href="#">Learn more</a>
                </div>
                <div class="px-8 py-6 bg-white rounded-xl">
                    <h4 class="mb-2 text-2xl font-semibold text-[#2f2f40]">Banking</h4>
                    <p class="text-[#2f2f40] my-5">With competitive rates of interest and fast account opening, we serve
                        corporates, trusts and high net worth individuals.</p>
                    <a class="font-medium px-4 py-2 bg-[#bb8b41] hover:bg-[#966f34] text-white rounded-3xl transition"
                        href="#">Learn more</a>
                </div>
            </div>
        </main>

        <footer class="w-full max-w-7xl mx-auto pt-20 pb-40">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-0 px-4 md:px-0">
                <div>
                    <div><a href="#"><img src="/img/capital.png" alt="capital" /></a></div>
                    <div class="mt-3 flex flex-row gap-2">
                        <div class="ml-1 p-2 rounded-full bg-[#484353]">
                            <svg fill="white" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                            </svg>
                        </div>
                        <div class="p-2 rounded-full bg-[#484353]">
                            <svg fill="white" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512">
                                <path
                                    d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                            </svg>
                        </div>
                        <div class="p-2 rounded-full bg-[#484353]">
                            <svg fill="white" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                            </svg>
                        </div>
                        <div class="p-2 rounded-full bg-[#484353]">
                            <svg fill="white" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row md:ml-auto gap-x-12 md:gap-x-20">
                    <div>
                        <h5 class="text-white mb-6">Services</h5>
                        <div class="flex flex-col gap-4">
                            <a class="text-zinc-500">Investment<br>Platform</a>
                            <a class="text-zinc-500">Investment<br>Management</a>
                            <a class="text-zinc-500">Corporate<br>Banking</a>
                        </div>
                    </div>
                    <div>
                        <h5 class="text-white mb-6">Company</h5>
                        <div class="flex flex-col gap-4">
                            <a class="text-zinc-500">About us</a>
                            <a class="text-zinc-500">Blog</a>
                            <a class="text-zinc-500">Conscious<br>Capital</a>
                            <a class="text-zinc-500">Careers</a>
                            <a class="text-zinc-500">Contact us</a>
                        </div>
                    </div>
                    <div>
                        <h5 class="text-white mb-6">Resources</h5>
                        <div class="flex flex-col gap-4">
                            <a class="text-zinc-500">Investment<br>Platform<br>Resources</a>
                            <a class="text-zinc-500">Investment<br>Management<br>Resources</a>
                            <a class="text-zinc-500">Capital International<br>Bank Resources</a>
                            <a class="text-zinc-500">Client Charter</a>
                            <a class="text-zinc-500">Investment<br>Onboarding<br>Support</a>
                            <a class="text-zinc-500">Fraud<br>Awareness</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
