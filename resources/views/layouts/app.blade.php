<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASCEE V2</title>
    <link rel="stylesheet" href="/build/assets/app-ChsDKZuX.css">
</head>

<body>
    <header class="sticky z-10 w-full border-b-2 bg-white py-4 shadow-sm">
        @include('components.navbar', ['navbarItems' => $navbarItems])
    </header>
    <main class="flex flex-row justify-between px-[5%] pt-4 x3la:px-[15%]">
        @yield('content')
    </main>
    <footer class="mt-6 flex flex-col items-center border-t-2 px-[5%] py-4 x3la:px-[15%]">
        <h3 class="font-poppins my-4 text-2xl font-medium lga:text-4xl">ASCEE Partners</h3>
        <div class="mt-4 flex flex-col">
            <div class="flex flex-col items-center lga:flex-row lga:items-start">
                <a href="https://www.uii.ac.id/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner1.png' alt=""></a>
                <a href="https://www.crossref.org/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner2.png' alt=""></a>
                <a href="https://kemlu.go.id/beijing/en"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner3.png' alt=""></a>
                <a href="https://app.grammarly.com/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner4.png' alt=""></a>
                <a href="https://oversea.cnki.net/index/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner5.png' alt=""></a>
            </div>
            <div class="flex flex-col items-center lga:flex-row lga:items-start">

                <a href="https://www.dstu.dp.ua/uni/index.html"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner6.png' alt=""></a>
                <a href="https://www.google.com/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner7.png' alt=""></a>
                <a href="https://www.unibarranquilla.edu.co/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner8.png' alt=""></a>
                <a href="https://untad.ac.id/en/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner9.png' alt=""></a>
                <a href="https://isi-ska.ac.id/"> <img class="lga:h-auto xla:h-28"
                        src='/build/assets/images/partner10.png' alt=""></a>
            </div>
        </div>
        <div class="mt-12 flex flex-col gap-12 xla:flex-row">
            <div class="flex-[20%]">
                <h4 class="border-b text-base font-semibold text-[--var-darkblue] lga:text-lg">ASSOCIATION FOR
                    SCIENTIFIC COMPUTING
                    ELECTRONICS AND
                    ENGINEERING
                    (ASCEE)</h4>
                <P class="mt-4 text-sm font-medium lga:text-base">ASCEE is the world's next leading consortium between
                    industry, academy and
                    other
                    organization which
                    have same vision for the future of Science and Technology.</P>
            </div>
            <div class="flex-[20%]">
                <h4 class="border-b text-base font-semibold text-[--var-darkblue] lga:text-lg">USEFUL LINKS</h4>
                <ul class="font-semibold">
                    <li
                        class="border-b py-2 text-sm text-[--var-highlight] hover:text-[--var-darkyellow] lga:text-base">
                        <a href="https://datascienceweekend.id/">>> Data
                            Science Weekend</a>
                    </li>
                    <li
                        class="border-b py-2 text-sm text-[--var-highlight] hover:text-[--var-darkyellow] lga:text-base">
                        <a href="http://icsitech.org/cgi-sys/defaultwebpage.cgi">>> 2017 3rd ICSITECH</a>
                    </li>
                    <li
                        class="border-b py-2 text-sm text-[--var-highlight] hover:text-[--var-darkyellow] lga:text-base">
                        <a href="https://research.utm.my/bdc/">>> UTM BIG
                            DATA CENTRE</a>
                    </li>
                    <li
                        class="border-b py-2 text-sm text-[--var-highlight] hover:text-[--var-darkyellow] lga:text-base">
                        <a href="https://iwbda-utmbdc.org/">>> IWBDA</a>
                    </li>
                </ul>
            </div>
            <div class="flex-[20%]">
                <h4 class="border-b text-base font-semibold text-[--var-darkblue] lga:text-lg">CONTACT US</h4>
                <p class="py-2 text-sm lga:text-base">Email: <a
                        class="text-[--var-highlight] hover:text-[--var-darkyellow]"
                        href="mailto::info@ascee.org">info@ascee.org</a></p>
                <div class="mb-2">
                    <h6 class="text-sm font-semibold lga:text-base xla:text-xl">Indonesia</h6>
                    <ul class="text-sm lga:text-[12px]">
                        <li>Address 1: Jl. Janti, Karangjambe 130B, Banguntapan, Bantul, Yogyakarta</li>
                        <li>Address 2: Jl. S. Supriyadi, Trenggalek, Jawa Timur</li>
                    </ul>
                </div>
                <div class="mb-2">
                    <h6 class="text-sm font-semibold lga:text-base xla:text-xl">Australia</h6>
                    <ul class="text-sm lga:text-[12px]">
                        <li>Address 1: Mia Street, Modbury North, South Australia: 5092, Adelaide</li>
                    </ul>
                </div>
                <div class="">
                    <h6 class="text-sm font-semibold lga:text-base xla:text-xl">Colombia</h6>
                    <ul class="text-sm lga:text-[12px]">
                        <li>Address 1: Carrera 26#3A-161 Barranguilla</li>
                    </ul>
                </div>
                <div class="my-4 flex flex-row flex-wrap gap-1 sma:gap-4">
                    <img class="aspect-square h-8 rounded-md lga:h-12"
                        src="/build/assets/images/Icons/square-facebook-brands-solid.svg" alt="">
                    <img class="aspect-square h-8 rounded-md lga:h-12"
                        src="/build/assets/images/Icons/square-twitter-brands-solid.svg" alt="">
                    <img class="aspect-square h-8 rounded-md lga:h-12"
                        src="/build/assets/images/Icons/square-google-plus-brands-solid.svg" alt="">
                    <img class="aspect-square h-8 rounded-md lga:h-12"
                        src="/build/assets/images/Icons/square-youtube-brands-solid.svg" alt="">
                    <img class="aspect-square h-8 rounded-md lga:h-12"
                        src="/build/assets/images/Icons/square-instagram-brands-solid.svg" alt="">
                    <img class="aspect-square h-8 rounded-md lga:h-12"
                        src="/build/assets/images/Icons/envelope-solid.svg" alt="">
                </div>
                <p class="text-sm font-medium lga:text-base">Total Visitors: 130736</p>
                <p class="text-sm font-medium lga:text-base">Total Visitors Today: 175</p>
            </div>
            <div class="flex-[20%]">
                <h4 class="border-b text-base font-semibold text-[--var-darkblue] lga:text-lg">EMAIL UPDATE</h4>
                <form action="" class="flex w-full flex-col xla:items-center">
                    <label class="mt-4 text-sm lga:text-left lga:text-base xla:text-center">Be the first to hear about
                        our offers and
                        announcements</label>
                    <input
                        class="mt-4 w-full rounded-md border-2 border-slate-300 px-4 py-2 text-slate-700 placeholder-slate-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        type="text" placeholder="Email">
                    <button type="submit"
                        class="mt-4 w-full rounded-lg bg-[--var-darkblue] py-2 text-white transition delay-150 duration-200 ease-in-out hover:bg-[--var-darkyellow]">Submit</button>
                </form>
            </div>
        </div>
    </footer>
    <div class="w-full bg-[--var-darkblue] px-[5%] py-4 text-[12px] font-medium text-white lga:text-base xla:px-[15%]">
        Copyright &copy; Raka Satya Prasasta 2024. All right reserved.
    </div>
</body>

</html>
