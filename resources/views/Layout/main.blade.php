<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Beranda | JDIH Pemerintah Provinsi Sumatera Selatan</title>
    <link rel="shortcut icon" href="{{ asset('assets/sumselprov.png') }}" type="image/x-icon">
</head>

<body>
    <section class="jumbotron bg-[#cee3f3] bg-[url('/public/assets/ampera2.jpg')] bg-cover min-h-screen">
        <!--Jumbotron-->
        <nav class="sticky pt-6 top-0 z-50">
            <div class=" container mx-auto row w-9/12 bg-[#6C5F5B] p-8 rounded-lg">
                <div class="row flex justify-around items-center">
                    <div class="flex gap-4">
                        <img src="{{ asset('assets/sumselprov.png') }}" class=" lg:w-10" alt="">
                        <div>
                            <p class=" font-bold text-white">JDIH</p>
                            <p class=" font-normal text-white">Pemerintah Provinsi Sumatera Selatan</p>
                        </div>
                    </div>
                    <div>
                        <ul class=" flex gap-7">
                            <li><a href="/"
                                    class=" font-semibold text-white text-lg underline underline-offset-8">Beranda</a>
                            </li>
                            <li class="group"><a href=""
                                    class=" font-semibold text-white text-lg hover:underline underline-offset-8 py-[120%] px-7">Profil</a>
                                <ul
                                    class=" w-2/12 container mx-auto bg-white absolute top-[105%] hidden group-hover:block">
                                    <li class=" font-semibold hover:bg-blue-950 p-3 px-6 hover:text-white"><a
                                            href="/tentang">Tentang JDIH</a></li>
                                    <li class=" font-semibold hover:bg-blue-950 p-3 px-6 hover:text-white"><a
                                            href="/visi">Visi & Misi</a></li>
                                    <li class=" font-semibold hover:bg-blue-950 p-3 px-6 hover:text-white"><a
                                            href="/tugas">Tugas dan Fungsi</a></li>
                                </ul>
                            </li>
                            <li><a href="/galeri"
                                    class=" font-semibold text-white text-lg  hover:underline underline-offset-8">Galeri</a>
                            </li>
                            <li class="group"><a href=""
                                    class=" font-semibold text-white text-lg  hover:underline underline-offset-8 py-[120%] px-3">Produk
                                    Hukum</a>
                                <ul
                                    class=" w-2/12 container mx-auto bg-white absolute top-[105%] hidden group-hover:block">
                                    <li class=" font-semibold hover:bg-blue-950 p-3 px-6 hover:text-white"><a
                                            href="/puu">Peraturan Perundang Undangan</a></li>
                                    <li class=" font-semibold hover:bg-blue-950 p-3 px-6 hover:text-white"><a
                                            href="/dokumentasi">Dokumentasi dan Informasi Hukum</a></li>
                                </ul>
                            </li>
                            <li><a href="/berita"
                                    class=" font-semibold text-white text-lg  hover:underline underline-offset-8">Berita</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="{{ asset('assets/jdih.png') }}" class=" lg: w-12" alt="">
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mx-auto w-9/12 pt-28">
            <h3 class=" font-bold  text-white text-lg">| HALO WONG KITO GALO!</h3>
            <H1 class=" font-bold text-white text-6xl py-5">SUMSEL MAJU</H1>
            <P class=" font-semibold text-white text-xl w-6/12">Bersatu menjunjung dan menegakkan hukum yang sehat untuk
                Sumatera
                Selatan !</P>
            <div class=" mt-12">
                <x-button text="Cari Dokumen?" />
            </div>
        </div>
    </section>
    <!--Peraturan Perundang - Undangan-->
    <section>
        <div class=" container mx-auto w-8/12 m-10 z-0">
            <div class=" flex justify-between">
                <div class=" flex items-center gap-28 shadow-lg px-6 py-3 border-solid border-2">
                    <div>
                        <h3 class=" font-bold text-gray-800 text-2xl">4649</h3>
                        <a href="" class=" text-base">Peraturan Perundang-Undangan</a>
                    </div>
                    <img src="{{ asset('assets/1.png') }}" class=" lg: w-20" alt="">
                </div>
                <div class=" flex items-center gap-28 shadow-lg px-6 py-3 border-solid border-2">
                    <div>
                        <h3 class=" font-bold text-gray-800 text-2xl">102</h3>
                        <a href="" class=" text-base">Dokumentasi dan Informasi Hukum</a>
                    </div>
                    <img src="{{ asset('assets/2.png') }}" class=" lg: w-20" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Peraturan Perpu Terbaru-->
    <section class=" bg-[#EEF3F4] z-0">
        <div class=" container mx-auto w-9/12 mt-10">
            <h1 class=" font-bold text-4xl text-center p-12">Peraturan Perundang-undangan Terbaru</h1>
            <div class=" flex flex-wrap justify-between">
                <div class=" bg-white rounded-lg shadow-lg shadow-[#6C5F5B] w-[49%] p-4 group mt-8">
                    <h3 class=" font-bold text-[#333333] text-[28px]">Peraturan Presiden Nomor 44 Tahun 2023</h3>
                    <p class=" py-7 text-justify text-base font-normal group-hover:text-orange-400"> Peraturan Presiden
                        Nomor
                        NOMOR 44 Tahun
                        2023 TENTANG HAK KEUANGAN DAN FASILITAS LAINNYA BAGI SEKRETARIS, DEPUTI, KEPALA UNIT KERJA HUKUM
                        DAN KEPATUHAN, DAN DIREKTUR / KEPALA BIRO OTORITA IBU KOTA NUSANTARA</p>
                    <p class=" font-normal text-[#6c757d] text-base">1 Hari Yang Lalu</p>
                    <p class=" font-normal text-[#6c757d] text-base">Kategori : PERPRES</p>
                </div>
                <div class=" bg-white rounded-lg shadow-lg shadow-[#6C5F5B] w-[49%] p-4 group mt-8">
                    <h3 class=" font-bold text-[#333333] text-[28px]">Peraturan Presiden Nomor 44 Tahun 2023</h3>
                    <p class=" py-7 text-justify text-base font-normal group-hover:text-orange-400"> Peraturan Presiden
                        Nomor
                        NOMOR 44 Tahun
                        2023 TENTANG HAK KEUANGAN DAN FASILITAS LAINNYA BAGI SEKRETARIS, DEPUTI, KEPALA UNIT KERJA HUKUM
                        DAN KEPATUHAN, DAN DIREKTUR / KEPALA BIRO OTORITA IBU KOTA NUSANTARA</p>
                    <p class=" font-normal text-[#6c757d] text-base">1 Hari Yang Lalu</p>
                    <p class=" font-normal text-[#6c757d] text-base">Kategori : PERPRES</p>
                </div>
            </div>
            <div class="py-12 flex justify-center">
                <x-button text="Lihat Semua" />
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="E1AA74" fill-opacity="0.1"
            d="M0,96L60,106.7C120,117,240,139,360,122.7C480,107,600,53,720,26.7C840,0,960,0,1080,42.7C1200,85,1320,171,1380,213.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>
    <section class="z-0">
        <div class=" container mx-auto w-9/12">
            <h1 class=" text-[#ff9e5d] text-[52px] font-bold mt-5">Berita Sumsel</h1>
            <div class=" flex mt-10 gap-8">
                <div class=" rounded-lg w-4/12 bg-[#ff9e5d] group">
                    <div>
                        <a href=""><img src="{{ asset('assets/berita.jpg') }}" class=" rounded-lg"
                                alt=""></a>
                    </div>
                    <div class=" p-5 text-center">
                        <a href="" class=" text-white font-bold text-[28px] group-hover:text-black">Sekda
                            Sumsel Terima Jajaran Perwakilan BKKBN Sumsel</a>
                    </div>
                </div>
                <div class=" rounded-lg w-4/12 bg-[#ff9e5d] group">
                    <div>
                        <a href=""><img src="{{ asset('assets/berita.jpg') }}" class=" rounded-lg"
                                alt=""></a>
                    </div>
                    <div class=" p-5 text-center">
                        <a href="" class=" text-white font-bold text-[28px] group-hover:text-black">Sekda
                            Sumsel Terima Jajaran Perwakilan BKKBN Sumsel</a>
                    </div>
                </div>
                <div class=" rounded-lg w-4/12 bg-[#ff9e5d] group">
                    <div>
                        <a href=""><img src="{{ asset('assets/berita.jpg') }}" class=" rounded-lg"
                                alt=""></a>
                    </div>
                    <div class=" p-5 text-center">
                        <a href="" class=" text-white font-bold text-[28px] group-hover:text-black">Sekda
                            Sumsel Terima Jajaran Perwakilan BKKBN Sumsel</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="E1AA74" fill-opacity="0.1"
            d="M0,96L80,112C160,128,320,160,480,160C640,160,800,128,960,122.7C1120,117,1280,139,1360,149.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <section class=" bg-[#EEF3F4] z-0">
        <div class=" container mx-auto w-9/12">
            <h1 class=" font-bold text-4xl text-center p-12">Dokumentasi dan Informasi Hukum Terbaru</h1>
            <div class=" flex flex-wrap justify-between">
                <div class=" bg-white rounded-lg shadow-lg shadow-[#6C5F5B] w-[49%] p-4 group mt-8">
                    <h3 class=" font-bold text-[#333333] text-[28px]">Peraturan Presiden Nomor 44 Tahun 2023</h3>
                    <p class=" py-7 text-justify text-base font-normal group-hover:text-orange-400"> Peraturan Presiden
                        Nomor
                        NOMOR 44 Tahun
                        2023 TENTANG HAK KEUANGAN DAN FASILITAS LAINNYA BAGI SEKRETARIS, DEPUTI, KEPALA UNIT KERJA HUKUM
                        DAN KEPATUHAN, DAN DIREKTUR / KEPALA BIRO OTORITA IBU KOTA NUSANTARA</p>
                    <p class=" font-normal text-[#6c757d] text-base">1 Hari Yang Lalu</p>
                    <p class=" font-normal text-[#6c757d] text-base">Kategori : PERPRES</p>
                </div>
                <div class=" bg-white rounded-lg shadow-lg shadow-[#6C5F5B] w-[49%] p-4 group mt-8">
                    <h3 class=" font-bold text-[#333333] text-[28px]">Peraturan Presiden Nomor 44 Tahun 2023</h3>
                    <p class=" py-7 text-justify text-base font-normal group-hover:text-orange-400"> Peraturan Presiden
                        Nomor
                        NOMOR 44 Tahun
                        2023 TENTANG HAK KEUANGAN DAN FASILITAS LAINNYA BAGI SEKRETARIS, DEPUTI, KEPALA UNIT KERJA HUKUM
                        DAN KEPATUHAN, DAN DIREKTUR / KEPALA BIRO OTORITA IBU KOTA NUSANTARA</p>
                    <p class=" font-normal text-[#6c757d] text-base">1 Hari Yang Lalu</p>
                    <p class=" font-normal text-[#6c757d] text-base">Kategori : PERPRES</p>
                </div>
                <div class=" bg-white rounded-lg shadow-lg shadow-[#6C5F5B] w-[49%] p-4 group mt-8">
                    <h3 class=" font-bold text-[#333333] text-[28px]">Peraturan Presiden Nomor 44 Tahun 2023</h3>
                    <p class=" py-7 text-justify text-base font-normal group-hover:text-orange-400"> Peraturan Presiden
                        Nomor
                        NOMOR 44 Tahun
                        2023 TENTANG HAK KEUANGAN DAN FASILITAS LAINNYA BAGI SEKRETARIS, DEPUTI, KEPALA UNIT KERJA HUKUM
                        DAN KEPATUHAN, DAN DIREKTUR / KEPALA BIRO OTORITA IBU KOTA NUSANTARA</p>
                    <p class=" font-normal text-[#6c757d] text-base">1 Hari Yang Lalu</p>
                    <p class=" font-normal text-[#6c757d] text-base">Kategori : PERPRES</p>
                </div>
                <div class=" bg-white rounded-lg shadow-lg shadow-[#6C5F5B] w-[49%] p-4 group mt-8">
                    <h3 class=" font-bold text-[#333333] text-[28px]">Peraturan Presiden Nomor 44 Tahun 2023</h3>
                    <p class=" py-7 text-justify text-base font-normal group-hover:text-orange-400"> Peraturan Presiden
                        Nomor
                        NOMOR 44 Tahun
                        2023 TENTANG HAK KEUANGAN DAN FASILITAS LAINNYA BAGI SEKRETARIS, DEPUTI, KEPALA UNIT KERJA HUKUM
                        DAN KEPATUHAN, DAN DIREKTUR / KEPALA BIRO OTORITA IBU KOTA NUSANTARA</p>
                    <p class=" font-normal text-[#6c757d] text-base">1 Hari Yang Lalu</p>
                    <p class=" font-normal text-[#6c757d] text-base">Kategori : PERPRES</p>
                </div>
            </div>
            <div class="py-12 flex justify-center">
                <x-button text="Lihat Semua" />
            </div>
        </div>
    </section>
    <section>
        <div class=" container mx-auto w-9/12">
            <div class=" flex py-12 gap-10">
                <div class=" w-4/12">
                    <div class=" bg-[#f9d6b4] rounded-lg p-8 h-64 hover:shadow-2xl">
                        <a href="">
                            <img src="{{ asset('assets/speaker.png') }}" class=" w-20" alt="">
                        </a>
                        <p class="text-[#222222] font-semibold text-[28px]">Berita</p>
                        <div class="w-[30px] h-[2px] bg-[E1AA74]"></div>
                    </div>
                    <div class=" bg-[#f9d6b4] mt-10 rounded-lg p-8 h-64 hover:shadow-2xl">
                        <a href="">
                            <img src="{{ asset('assets/tentang.png') }}" class=" w-20" alt="">
                        </a>
                        <p class="text-[#222222] font-semibold text-[28px]">Tentang JDIH</p>
                        <div class="w-[30px] h-[2px] bg-[E1AA74]"></div>
                    </div>
                </div>
                <div class=" w-4/12 mt-10">
                    <div class=" bg-[#f9d6b4] rounded-lg p-8 h-64 hover:shadow-2xl">
                        <a href="">
                            <img src="{{ asset('assets/galeri.png') }}" class=" w-20" alt="">
                        </a>
                        <p class="text-[#222222] font-semibold text-[28px]">Galeri</p>
                        <div class="w-[30px] h-[2px] bg-[E1AA74]"></div>
                    </div>
                    <div class=" bg-[#f9d6b4] mt-10  rounded-lg p-8 h-64 hover:shadow-2xl">
                        <a href="">
                            <img src="{{ asset('assets/visi.png') }}" class=" w-20" alt="">
                        </a>
                        <p class="text-[#222222] font-semibold text-[28px]">Visi Misi</p>
                        <div class="w-[30px] h-[2px] bg-[E1AA74]"></div>
                    </div>
                </div>
                <div class=" w-4/12">
                    <div class=" bg-[#f9d6b4] rounded-lg p-8 h-64 hover:shadow-2xl">
                        <a href="">
                            <img src="{{ asset('assets/hukum.png') }}" class=" w-20" alt="">
                        </a>
                        <p class="text-[#222222] font-semibold text-[28px]">Informasi Hukum</p>
                        <div class="w-[30px] h-[2px] bg-[E1AA74]"></div>
                    </div>
                    <div class=" bg-[#f9d6b4] mt-10  rounded-lg p-8 h-64 hover:shadow-2xl">
                        <a href="">
                            <img src="{{ asset('assets/tugas.png') }}" class=" w-20" alt="">
                        </a>
                        <p class="text-[#222222] font-semibold text-[28px]">Tugas dan Fungsi</p>
                        <div class="w-[30px] h-[2px] bg-[E1AA74]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" bg-[#EEF3F4] z-0">
        <div class=" container mx-auto w-9/12 pb-12">
            <h1 class=" font-bold text-4xl text-center p-12">Silahkan Cari Produk Hukum</h1>
            <div class=" bg-white border border-black">
                <form action="">
                    <div class="flex gap-12 justify-center">
                        <div class=" mt-4">
                            <div>
                                <label for="Produk Hukum" class="block font-bold text-[#333333] text-lg mb-1">Produk
                                    Hukum</label>
                                <select name="Produk Hukum" id="Produk Hukum"
                                    class=" bg-white border border-gray-700 rounded-md pr-20 pl-2 py-3"
                                    aria-placeholder="Peraturan Perundang Undangan">
                                    <option value="Dokumentasi dan Informasi Hukum">Dokumentasi dan Informasi Hukum
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div>
                                <label for="Produk Hukum"
                                    class="block font-bold text-[#333333] text-lg mb-1">Kategori</label>
                                <select name="Produk Hukum" id="Produk Hukum"
                                    class=" bg-white border border-gray-700 rounded-md pr-40 pl-2 py-3"
                                    aria-placeholder="Peraturan Perundang Undangan">
                                    <option value="Undang Undang">Undang Undang
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class=" mt-4">
                            <div>
                                <label for="Judul"
                                    class="block font-bold text-[#333333] text-lg mb-1">Judul</label>
                                <input type="text" placeholder="Cari Judul" id="Judul" name="Judul"
                                    class="bg-white border border-gray-700 rounded-md pr-32 pl-2 py-3">
                            </div>
                        </div>
                    </div>
                    <div class=" m-5">
                        <button
                            class="bg-[#ff9e5d] w-full text-white font-semibold text-lg py-3 rounded-lg">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class=" container mx-auto w-9/12">
            <div>
                <div class=" flex items-center justify-between mt-20">
                    <h1 class=" font-bold text-[#ff9e5d] text-[52px]">Galeri</h1>
                    <a href="" class=" hover:text-orange-400">Lihat Lainnya</a>
                </div>
                <div class=" flex gap-10 mt-16">
                    <div class=" w-4/12 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/img1.jpg') }}"
                            class="h-64 hover:scale-110 hover:-translate-y-1 transition ease-in-out delay-150 duration-700"
                            alt="">
                    </div>
                    <div class=" w-4/12 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/img2.jpg') }}"
                            class="h-64 hover:scale-110 hover:-translate-y-1 transition ease-in-out delay-150 duration-700"
                            alt="">
                    </div>
                    <div class=" w-4/12 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/img3.jpeg') }}"
                            class="h-64 hover:scale-110 hover:-translate-y-1 transition ease-in-out delay-150 duration-700"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" bg-[#EEF3F4]">
        <div class=" container mx-auto w-9/12 mt-10">
            <h1 class=" text-[#ff9e5d] font-bold text-[52px] py-9">JDIH Kab/Kota Provinsi Sumatera Selatan</h1>


            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/empat_lawang.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('assets/banyuasin.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
    <section>
        <div class=" container mx-auto w-9/12 py-12">
            <div class=" flex justify-between">
                <img src="{{ asset('assets/jdih.png') }}" class="  h-24" alt="">
                <img src="{{ asset('assets/sumselprov.png') }}" class="  h-24" alt="">
                <img src="{{ asset('assets/kominfo.jpeg') }}" class="  h-24" alt="">
            </div>
        </div>
    </section>
    <x-footer />
    <!-- Back to top button -->
    <button type="button" data-te-ripple-init data-te-ripple-color="light"
        class="!fixed bottom-5 right-5 hidden rounded-full bg-[#ff9e5d] p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-[#2d6265]hover:shadow-lg focus:bg-[#2d6265] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#2d6265] active:shadow-lg"
        id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="h-4 w-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
            </path>
        </svg>
    </button>
    <script>
        // Get the button
        const mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button

        const scrollFunction = () => {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.classList.remove("hidden");
            } else {
                mybutton.classList.add("hidden");
            }
        };
        const backToTop = () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        };

        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        window.addEventListener("scroll", scrollFunction);
    </script>
</body>

</html>
