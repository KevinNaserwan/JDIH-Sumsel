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
    <section class="jumbotron bg-[#cee3f3] bg-[url('/public/assets/jalan.jpg')] bg-cover min-h-[50vh]">
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
                                    class=" font-semibold text-white text-lg hover:underline underline-offset-8">Beranda</a>
                            </li>
                            <li class="group"><a href=""
                                    class=" font-semibold text-white text-lg underline underline-offset-8 py-[120%] px-7">Profil</a>
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
        <div class="container mx-auto w-9/12 pt-16">
            <H1 class=" font-bold text-white text-6xl py-5">Visi dan Misi</H1>
        </div>
    </section>
    <section>
        <div class=" container mx-auto w-9/12">
            <div>
                <div class=" flex items-center mt-20">
                    <a href="" class=" hover:text-orange-400">Beranda / Visi dan Misi</a>
                </div>
                <div class=" flex items-center gap-14 mt-8 mb-20">
                    <div class=" flex items-center w-6/12">
                        <img src="{{ asset('assets/sumselprov.png') }}" class=" w-[50%] h-[70%]" alt="">
                        <img src="{{ asset('assets/jdih.png') }}" class=" w-[50%] h-[70%]" alt="">
                    </div>
                    <div class=" w-6/12">
                        <h1 class=" text-[#333333] font-bold text-[30px]">Visi</h1>
                        <p class=" text-justify mt-3">Untuk mencapai sasaran dalam memberikan pelayanan informasi hukum
                            kepada pengguna informasi baik instansi pemerintah atau swasta maupun perorangan yang
                            terjangkau sampai pelosok tanah air secara mudah, cepat dan akurat.</p>
                        <h1 class=" text-[#333333] font-bold text-[30px] mt-6">Misi</h1>
                        <ol start="">
                            <li>1. Meningkatkan kualitas ragam pelayanan.</li>
                            <li>2. Meningkatkan efisiensi dan efektifitas informasi hukum. </li>
                            <li>3. Meningkatkan kerjasama kegiatan pendokumentasian produk hukum dalam satu jaringan. </li>
                            <li>4. Menjadikan fasilitas yang tersedia untuk kerjasama dan pembentukan jaringan yang
                                seutuhnya. </li>
                            <li>5. Pemanfaatan dan pendayagunaan potensi masyarakat sebagai konstributor opini, analisa
                                maupun informasi edukatif. </li>
                        </ol>
                    </div>
                </div>
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
