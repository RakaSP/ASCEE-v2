<div class="mb-6 w-full rounded-md border-2">
    <header class="border-b-2 px-4 py-2 text-2xl font-semibold">Membership</header>
    <div class="flex flex-col justify-between p-[20px] xla:text-sm x2la:text-base">
        <button
            class="rounded-lg bg-[--var-darkblue] py-2 text-white transition delay-150 duration-200 ease-in-out hover:bg-[--var-darkyellow]"><a
                href="/user/benefit">ASCEE
                Member Benefits</a></button>
        <button
            class="mt-4 rounded-lg bg-[--var-darkblue] py-2 text-white transition delay-150 duration-200 ease-in-out hover:bg-[--var-darkyellow]"><a
                href="/user/join">Why
                Join ASCEE</a></button>
        <button
            class="mt-4 rounded-lg bg-[--var-darkblue] py-2 text-white transition delay-150 duration-200 ease-in-out hover:bg-[--var-darkyellow]"><a
                href="/user/register">Membership
                Application</a></button>
    </div>
</div>
<div class="mb-6 w-full rounded-md border-2">
    <header class="border-b-2 px-4 py-2 text-2xl font-semibold">Subscribe</header>
    <div class="relative w-full overflow-hidden">
        <div class="flex w-[200%] animate-slide1 xla:h-[460px] x2la:h-[520px]">
            <div class="box-border flex h-full flex-1 flex-col justify-between p-[20px] text-center">
                <header class="mb-2">
                    <h6 class="font-medium xla:text-base x2la:text-lg">ASCEE is one of the Crossref Sponsoring
                        Organizations
                    </h6>
                    <p class="xla:text-sm x2la:text-base">Free annual fee of DOI and Crosscheck (iThenticate) for ASCEE
                        members</p>
                </header>
                <img class="mt-4" src="/build/assets/images/subscribe-1.svg" alt="Subscribe-1" />
                <button
                    class="mt-4 rounded-lg bg-[--var-darkblue] py-2 text-white transition delay-150 duration-200 ease-in-out hover:bg-[--var-darkyellow] xla:text-sm x2la:text-base">Non-Member
                    DOI
                    Registration</button>
            </div>
            <div class="box-border flex h-full flex-1 flex-col justify-between p-[20px] text-center">
                <header class="text-lg font-medium">Free Grammarly for ASCEE members</header>
                <img src="/build/assets/images/subscribe-2.jpeg" alt="Subscribe-2" />
                <button
                    class="mt-4 rounded-lg bg-[--var-darkblue] py-2 text-white transition delay-150 duration-200 ease-in-out hover:bg-[--var-darkyellow] xla:text-sm">Subscribe
                    for
                    Non-Member</button>
            </div>
        </div>
    </div>
</div>

@include('components.aside.journals')
@include('components.aside.news')
@include('components.aside.events')
