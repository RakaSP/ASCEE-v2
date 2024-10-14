@extends('layouts.app')

@section('content')
    <div class="w-full xla:w-[70%]">

        <div class="w-full">
            <h4 class="mt-2 text-xl font-semibold lga:mt-6 lga:text-3xl">Why Join ASCEE?</h4>
            <ul class="mt-1 list-disc pl-8 text-sm lga:mt-4 lga:text-lg">
                <li>
                    As the Grow of Science and Technology in the world.
                </li>
                <li>
                    You can build strong networks between industry and academy or organization to meet your goal related to
                    Science and Technology problem.
                </li>
                <li>
                    You will be part of the next leading Science and Technology Organization in the world.
                </li>
                <li>
                    Face together with the members to make Science and Technology easier to solve.
                </li>
                <li>
                    You will be lightening your organization and society with new knowledge and get broader networks between
                    your organization
                </li>
            </ul>
        </div>
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
@endsection
