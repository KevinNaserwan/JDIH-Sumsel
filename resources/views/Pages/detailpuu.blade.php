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
    <section class="jumbotron bg-[#cee3f3] bg-[url('/public/assets/informasihukum.jpeg')] bg-cover min-h-[50vh]">
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
                                    class=" font-semibold text-white text-lg  underline underline-offset-8 py-[120%] px-3">Produk
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
        <div class="container mx-auto w-9/12 py-24">
            <H1 class=" font-bold text-white text-6xl/tight py-5 w-3/12">Peraturan Perundang Undangan</H1>
        </div>
    </section>
    <section>
        <div class=" container mx-auto w-9/12 py-10">
            <div class=" flex items-center pb-7">
                <a href="" class=" hover:text-orange-400">Beranda / Peraturan Perundang Undangan /
                    {{ $jenis_dokumen }}</a>
            </div>
        </div>
    </section>
    <section class=" bg-[#EEF3F4] z-0">
        <div class=" container mx-auto w-9/12 pb-12">
            <h1 class=" font-bold text-4xl text-center p-12">Silahkan Cari Produk Hukum</h1>
            <div class=" bg-white border border-black">
                <form action="{{ route('nama_rute_detailpuu', ['jenis_dokumen' => $jenis_dokumen]) }}" method="GET">
                    <div class="flex gap-12 justify-center">
                        <div class="mt-4">
                            <div>
                                <label for="kategori"
                                    class="block font-bold text-[#333333] text-lg mb-1">Kategori</label>
                                <select name="jenis_dokumen" id="kategori"
                                    class="bg-white border border-gray-700 rounded-md pr-12 pl-2 py-3">
                                    <option value="Dokumentasi dan Informasi Hukum">Dokumentasi dan Informasi Hukum
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="">
                                <label for="nomor" class="block font-bold text-[#333333] text-lg mb-1">Nomor</label>
                                <input name="nomor" id="nomor"
                                    class="bg-white border border-gray-700 rounded-md pr-3 pl-2 py-3"
                                    placeholder="Cari Nomor">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="">
                                <label for="tahun" class="block font-bold text-[#333333] text-lg mb-1">Tahun</label>
                                <input name="tahun" id="tahun"
                                    class="bg-white border border-gray-700 rounded-md pr-3 pl-2 py-3"
                                    placeholder="Cari Tahun">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div>
                                <label for="judul" class="block font-bold text-[#333333] text-lg mb-1">Judul</label>
                                <input type="text" placeholder="Cari Judul" id="judul" name="judul"
                                    class="bg-white border border-gray-700 rounded-md pr-1 pl-5 py-3">
                            </div>
                        </div>
                    </div>
                    <div class="m-5">
                        <button type="submit"
                            class="bg-[#ff9e5d] w-full text-white font-semibold text-lg py-3 rounded-lg">Cari</button>
                    </div>
                </form>
            </div>
            <div class=" bg-white border border-black mt-6">
                <div class="row">
                    <form action="{{ url('/detailpuu/' . $jenis_dokumen) }}" method="get">
                        @csrf
                        @foreach ($dokumen as $item)
                            <button type="submit" name="tahun" value="{{ $item->tahun }}"
                                class="w-1/12 bg-[#6C5F5B] text-center p-6 rounded-lg text-white font-semibold text-lg my-4 mr-2 ml-4">
                                {{ $item->tahun }}
                            </button>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class=" bg-[#EEF3F4] z-0">
        <div class=" container mx-auto w-9/12 pb-12">
            <h1 class=" font-bold text-4xl text-center p-12">Daftar {{ $jenis_dokumen }}</h1>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-white border-black border">
                    <thead class="text-xs text-white uppercase bg-blue-950">
                        <tr>
                            <th scope="col" class="py-3 text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Judul Dokumen
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Info1
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokumen as $index => $item)
                            <tr class="bg-white border-b border-black">
                                <th scope="row"
                                    class="px-6 py-4 font-bold text-xl text-gray-900 whitespace-nowrap text-center">
                                    {{$index + 1}}
                                </th>
                                <td class="px-6 py-4 text-gray-900 font-bold text-base">
                                    {{ $item->judul }}
                                    <br>
                                    @if ($item->status == 0)
                                        <div class=" mt-2">
                                            Status : <span
                                                class=" bg-green-500 text-white rounded-lg py-1 px-2">Berlaku</span>
                                        </div>
                                    @else
                                        <div class=" mt-2">
                                            Status : <span class=" bg-red-500 text-white rounded-lg py-1 px-2">Tidak
                                                Berlaku</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-gray-900 text-base text-center">
                                    <a href="/detailpuu2/{{ $item->judul }}"
                                        class=" hover:text-amber-400">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
