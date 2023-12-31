<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph meta tags -->
    <link rel="canonical" href=https://carihadiah.com/>
    <meta property="og:title" content="CariHadiah">
    <meta property="og:description" content="CariHadiah bantu kamu cari hadiah dengan teknologi AI, untuk orang tersayang.">
    <meta property="og:image" content="<?= base_url() ?>assets/image/meta-logo.png">
    <meta property="og:url" content="https://carihadiah.com/">
    <meta property="og:type" content="website">

    <!--<link href="<?= base_url() ?>assets/css/dist/output.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <!--   <link rel="icon" href="<?= base_url() ?>assets/image/logo.png" type="image/icon type"> -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/favicon_io/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favicon_io/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favicon_io/favicon-32x32.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?=$title?></title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E1F5FH0V4P"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-E1F5FH0V4P');
</script>

<body class="bg-white">
    <nav class="bg-white shadow-lg">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" onclick="toggleMenu()" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-slate-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block h-6 w-6" id="iconOpen" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden h-6 w-6" id="iconClosed" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="<?= base_url() ?>"><img class="block h-8 w-auto lg:hidden" src="<?= base_url() ?>assets/image/logo-3.png" alt="Your Company"></a>
                        <a href="<?= base_url() ?>"> <img class="hidden h-8 w-auto lg:block" src="<?= base_url() ?>assets/image/logo-3.png" alt="Your Company"></a>
                    </div>

                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <div class="relative ml-3">
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="<?= base_url() ?>tentang-kami" class="text-gray-700 hover:bg-white hover:text-gray-900 rounded-md px-3 py-2 text-sm font-medium">Tentang Kami</a>
                            </div>
                        </div>

                        <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="<?= base_url() ?>tentang-kami" class="text-gray-700 hover:bg-white hover:text-gray-900 block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Tentang Kami</a>
            </div>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            var mobileMenu = $('#mobile-menu');
            var iconOpen = $('#iconOpen');
            var iconClosed = $('#iconClosed');

            if (mobileMenu.is(':hidden')) {
                mobileMenu.show();
                iconOpen.hide();
                iconClosed.show();
            } else {
                mobileMenu.hide();
                iconOpen.show();
                iconClosed.hide();
            }
        }
    </script>