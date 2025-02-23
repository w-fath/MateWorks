<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MateWorks</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Styles / Scripts -->

            @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <x-navbar />
        <section class="container px-4 mx-auto mt-4">
            <div class="grid grid-cols-1 gap-4">
                <div class="col-span-2">
                    <img style="border-radius: 10px;" src="https://placehold.co/800x200" alt="Main Banner" class="object-cover w-full h-full">
                </div>
            </div>
        </section>

        <!-- Category Section -->
        <section class="container px-4 mx-auto mt-4">
            <div class="flex items-center justify-between p-4 bg-white rounded-md shadow-md">
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/50x50" alt="Pulsa & Kuota" class="h-12">
                    <span class="text-sm">Pulsa & Kuota</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/50x50" alt="PLN" class="h-12">
                    <span class="text-sm">PLN</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/50x50" alt="Investasi" class="h-12">
                    <span class="text-sm">Investasi</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/50x50" alt="Template" class="h-12">
                    <span class="text-sm">Template</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/50x50" alt="Jasa Buat WEB" class="h-12">
                    <span class="text-sm">Jasa Buat WEB</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/50x50" alt="Jasa Buat APK" class="h-12">
                    <span class="text-sm">Jasa Buat APK</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/50x50" alt="AirDrop" class="h-12">
                    <span class="text-sm">AirDrop</span>
                </div>
            </div>
        </section>

        <!--Percobaan 2 biji-->
        <section class="container px-4 mx-auto mt-4">
            <div class="p-4 bg-white rounded-md shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-red-500">Portofolio Percobaan</h2>
                    <a href="" class="text-sm text-orange-500">Lihat Semua</a>
                </div>
                <div class="container p-4 mx-auto">
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="COD ASBAK PETAK ASB-01 UK 12CM" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD ASBAK PETAK ASB-01 UK 12CM...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp1.134</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="COD ASBAK PETAK ASB-01 UK 12CM" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD ASBAK PETAK ASB-01 UK 12CM...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp1.134</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="COD ASBAK PETAK ASB-01 UK 12CM" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD ASBAK PETAK ASB-01 UK 12CM...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp1.134</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="COD ASBAK PETAK ASB-01 UK 12CM" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD ASBAK PETAK ASB-01 UK 12CM...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp1.134</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portofolio Section -->
        <section class="container px-4 mx-auto mt-4">
            <div class="p-4 bg-white rounded-md shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-red-500">Portofolio</h2>
                    <a href="" class="text-sm text-orange-500">Lihat Semua</a>
                </div>
                <div class="container p-4 mx-auto">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="COD ASBAK PETAK ASB-01 UK 12CM" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD ASBAK PETAK ASB-01 UK 12CM...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp1.134</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="LAMPU LED STRIP SELANG 5050 SMD AC" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">LAMPU LED STRIP SELANG 5050 SMD AC...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.600</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="Buku Trading - Jagoan Trading Crypto" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Buku Trading - Jagoan Trading Crypto</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp80.000</p>
                                <p class="text-xs text-gray-500">924 Terjual</p>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="EA GOLD Super Profitable Auto TP SL" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">EA GOLD Super Profitable Auto TP SL...</p>
                                <p class="font-bold text-red-500">Rp1.116.168</p>
                                <p class="text-xs text-gray-500">42 Terjual</p>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="COD Cincin Model Terbuka Bentuk Burung" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD Cincin Model Terbuka Bentuk Burung...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.999</p>
                                <p class="text-xs text-gray-500">4,1RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="Coin Koin Fisik Crypto Seni Doge Ethereum Shib" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Coin Koin Fisik Crypto Seni Doge Ethereum Shib...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp5.800</p>
                                <p class="text-xs text-gray-500">1,9RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="COD Cincin Model Terbuka Bentuk Burung" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD Cincin Model Terbuka Bentuk Burung...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.999</p>
                                <p class="text-xs text-gray-500">4,1RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://storage.googleapis.com/a1aa/image/G9KH_pZJD1wYxSr9GAzGUIDIO13x5-IryRDqgK2l2dY.jpg" alt="Coin Koin Fisik Crypto Seni Doge Ethereum Shib" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Coin Koin Fisik Crypto Seni Doge Ethereum Shib...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp5.800</p>
                                <p class="text-xs text-gray-500">1,9RB Terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Native Section -->
        <section class="container px-4 mx-auto mt-4">
            <div class="p-4 bg-white rounded-md shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-red-500">Native</h2>
                    <a href="" class="text-sm text-orange-500">Lihat Semua</a>
                </div>
                <div class="container p-4 mx-auto">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="COD ASBAK PETAK ASB-01 UK 12CM" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD ASBAK PETAK ASB-01 UK 12CM...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp1.134</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="LAMPU LED STRIP SELANG 5050 SMD AC" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">LAMPU LED STRIP SELANG 5050 SMD AC...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.600</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="Buku Trading - Jagoan Trading Crypto" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Buku Trading - Jagoan Trading Crypto</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp80.000</p>
                                <p class="text-xs text-gray-500">924 Terjual</p>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="EA GOLD Super Profitable Auto TP SL" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">EA GOLD Super Profitable Auto TP SL...</p>
                                <p class="font-bold text-red-500">Rp1.116.168</p>
                                <p class="text-xs text-gray-500">42 Terjual</p>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="COD Cincin Model Terbuka Bentuk Burung" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD Cincin Model Terbuka Bentuk Burung...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.999</p>
                                <p class="text-xs text-gray-500">4,1RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="Coin Koin Fisik Crypto Seni Doge Ethereum Shib" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Coin Koin Fisik Crypto Seni Doge Ethereum Shib...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp5.800</p>
                                <p class="text-xs text-gray-500">1,9RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="COD Cincin Model Terbuka Bentuk Burung" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD Cincin Model Terbuka Bentuk Burung...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.999</p>
                                <p class="text-xs text-gray-500">4,1RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="Coin Koin Fisik Crypto Seni Doge Ethereum Shib" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Coin Koin Fisik Crypto Seni Doge Ethereum Shib...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp5.800</p>
                                <p class="text-xs text-gray-500">1,9RB Terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Framework Section -->
        <section class="container px-4 mx-auto mt-4">
            <div class="p-4 bg-white rounded-md shadow-md">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-red-500">Framework</h2>
                    <a href="" class="text-sm text-orange-500">Lihat Semua</a>
                </div>
                <div class="container p-4 mx-auto">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="COD ASBAK PETAK ASB-01 UK 12CM" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD ASBAK PETAK ASB-01 UK 12CM...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp1.134</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="LAMPU LED STRIP SELANG 5050 SMD AC" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">LAMPU LED STRIP SELANG 5050 SMD AC...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.600</p>
                                <p class="text-xs text-gray-500">10RB+ Terjual</p>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="Buku Trading - Jagoan Trading Crypto" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Buku Trading - Jagoan Trading Crypto</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp80.000</p>
                                <p class="text-xs text-gray-500">924 Terjual</p>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="EA GOLD Super Profitable Auto TP SL" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">EA GOLD Super Profitable Auto TP SL...</p>
                                <p class="font-bold text-red-500">Rp1.116.168</p>
                                <p class="text-xs text-gray-500">42 Terjual</p>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="COD Cincin Model Terbuka Bentuk Burung" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD Cincin Model Terbuka Bentuk Burung...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.999</p>
                                <p class="text-xs text-gray-500">4,1RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="Coin Koin Fisik Crypto Seni Doge Ethereum Shib" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Coin Koin Fisik Crypto Seni Doge Ethereum Shib...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp5.800</p>
                                <p class="text-xs text-gray-500">1,9RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="COD Cincin Model Terbuka Bentuk Burung" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">COD Cincin Model Terbuka Bentuk Burung...</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="text-xs text-gray-500">COD</p>
                                <p class="font-bold text-red-500">Rp2.999</p>
                                <p class="text-xs text-gray-500">4,1RB Terjual</p>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="p-2 border-gray-200 rounded">
                            <img src="https://placehold.co/200x200" alt="Coin Koin Fisik Crypto Seni Doge Ethereum Shib" class="object-cover w-full h-48">
                            <div class="mt-2">
                                <span class="text-xs font-bold text-red-500">Star</span>
                                <p class="text-sm font-semibold">Coin Koin Fisik Crypto Seni Doge Ethereum Shib...</p>
                                <p class="text-xs text-gray-500">Termurah di Shopee</p>
                                <p class="text-xs text-gray-500">KOMISI XTRA</p>
                                <p class="font-bold text-red-500">Rp5.800</p>
                                <p class="text-xs text-gray-500">1,9RB Terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Chat Button -->
        <div class="fixed bottom-10 right-5">
            <button class="flex items-center justify-center w-16 h-16 text-white bg-green-800 rounded-full shadow-lg">
                <i class="text-4xl fab fa-whatsapp"></i>
            </button>
        </div>

        <!-- Footer Section -->
        <x-footer />
        <script>
            function toggleMenu() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            }
        </script>
    </body>
</html>
