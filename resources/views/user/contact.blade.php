@extends('layouts.app')

@section('content')
    <div class="w-full xla:w-[70%]">
        <div class="mt-4 w-full pb-4">
            <h4 class="mt-6 text-xl font-semibold lga:text-3xl">Contact Us</h4>
            <p class="mt-2 text-base font-medium lga:text-xl">Assocation for Scientific Computing and Engineering (ASCEE)</p>
            <ul class="mt-2 text-sm lga:text-lg">
                <li class="mb-2 flex flex-row">
                    <p class="mr-2 lga:w-[200px]">Email</p>
                    <a class="truncate text-[--var-highlight] hover:text-[--var-darkyellow]"
                        href="mailto:info@ascee.org">info@ascee.org</a>
                </li>
                <li class="mb-2 flex flex-row">
                    <p class="mr-2 lga:w-[200px]">Facebook</p>
                    <a class="truncate text-[--var-highlight] hover:text-[--var-darkyellow]"
                        href="https://web.facebook.com/ascee.info/" target="_blank"
                        rel="noopener noreferrer">https://web.facebook.com/ascee.info/</a>
                </li>
                <li class="mb-2 flex flex-row">
                    <p class="mr-2 lga:w-[200px]">Youtube</p>
                    <a class="truncate text-[--var-highlight] hover:text-[--var-darkyellow]"
                        href="https://www.youtube.com/c/ASCEE" target="_blank"
                        rel="noopener noreferrer">https://www.youtube.com/c/ASCEE</a>
                </li>
                <li class="mb-2 flex flex-row">
                    <p class="mr-2 lga:w-[200px]">Instagram</p>
                    <a class="truncate text-[--var-highlight] hover:text-[--var-darkyellow]"
                        href="https://www.instagram.com/ascee.sci" target="_blank" rel="noopener noreferrer">@ascee.sci</a>
                </li>
                <li class="mb-2 flex flex-row">
                    <p class="mr-2 lga:w-[200px]">Twitter</p>
                    <a class="truncate text-[--var-highlight] hover:text-[--var-darkyellow]"
                        href="https://twitter.com/ASCEE_sci" target="_blank" rel="noopener noreferrer">@ASCEE_sci</a>
                </li>
            </ul>

        </div>
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
@endsection
