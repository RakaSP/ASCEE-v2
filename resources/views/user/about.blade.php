@extends('layouts.app')

@section('content')
    <div class="w-full xla:w-[70%]">
        <div class="w-full">
            <article id="about-us" class="border-b-2 pb-4">
                <h4 class="mt-6 text-xl font-semibold lga:text-3xl">Member Benefits</h4>
                <p class="mt-2 text-justify indent-8 text-sm lga:text-lg">Association for Scientific Computing Electronics
                    and
                    Engineering
                    (<span class="font-semibold">ASCEE</span>) is the
                    world’s
                    next leading consortium between industry, academy and other organization which have same vision for the
                    future of Science and Technology. As being projected an NGO non-government organization, ASCEE has
                    initiated several sections across the globe involving Australia, Japan, India, Pakistan, Nepal,
                    Bangladesh, Columbia and China. In addition, diverse communities have been expounded toward current
                    advancement in the world, such as ASCEE Viperarts Society, ASCEE Computer Society, and ASCEE Education
                    Society in purpose to develop science and technology Develop science and technology based on specific
                    areas.
                </p>
                <p class="mt-4 text-justify indent-8 text-sm lga:text-lg">
                    ASCEE as NGO was approved through the Decree of the <span class="font-semibold">Minister of Law and
                        Human
                        Rights of the Republic of
                        Indonesia</span> Number "<span class="font-semibold">AHU-0000152.AH.01.07.TAHUN 2017</span>" on
                    <span class="font-semibold">January 5, 2017</span>, and has a Taxpayer
                    Identification
                    Number (<span class="font-semibold">NPWP</span>) <span>82.840.074.7-543.000</span>.
                </p>
                <p class="mt-4 text-justify indent-8 text-sm lga:text-lg">By carrying out the tagline Science-Technology for
                    Society,
                    ASCEE
                    focuses on the
                    development of science
                    and technology to provide benefits to the world community through academic activities including the
                    publication of scientific journals, the implementation of scientific conferences, research assistance
                    and writing of scientific works, awarding scholarships, workshops, academic seminars, and other
                    activities that support education and development of science and technology. As the information, ASCEE
                    journals have accredited by the Ministry of Research, Technology, and Higher Education (RISTEKDIKTI)
                    Indonesia, and some journals managed by and collaborated with ASCEE have indexed by the international
                    reputable database, such as SCOPUS. Furthermore, ASCEE has also signed a Memorandum of Understanding
                    with China National Knowledge Infrastructure (CNKI) to index/distribute articles published by the ASCEE
                    Journal/conference particularly to all academics in China.
                </p>
            </article>

            <article id="about-us" class="border-b-2 pb-4">
                <h4 class="mt-6 text-xl font-semibold lga:text-3xl">Vision</h4>
                <p class="mt-2 text-base lga:text-xl">
                    As the consortium with global reputation on Science and Technology. Our mission is:
                </p>
                <ul class="mt-2 list-disc pl-8 text-sm lga:text-lg">
                    <li>
                        Pioneering research and development in the field of Science and Technology.
                    </li>
                    <li>
                        Encompass cooperation with various universities, companies which managing Science and Technology to
                        develop the theory, application and its implementation.

                    </li>
                    <li>
                        Providing a forum for the world community to collaborate in the research and development of Science
                        and Technology.
                    </li>
                    <li>
                        Publish the results of research and development of Science and Technology through scientific
                        periodical conferences and other media publications.
                    </li>
                    <li>
                        Provide education to the global community through workshops, training sessions, seminars and
                        consultations.
                    </li>
                    <li>
                        Create an emotional connection between everyone involved, the experience itself and the one
                        supporting the experience (a brand or a person).
                    </li>
                </ul>
            </article>
            <article id="about-us" class="border-b-2 pb-6">
                <h4 class="mt-6 text-xl font-semibold lga:text-3xl">Location</h4>
                <p class="mt-2 text-base lga:text-xl">
                    As the consortium with global reputation on Science and Technology. Our mission is:
                </p>
                @foreach ($contacts as $country => $details)
                    <div class="py-2">
                        <h5 class="text-lg font-medium lga:text-2xl">{{ $country }}</h5>
                        <ul class="list-disc pl-8 text-lg">
                            @foreach ($details['addresses'] as $address)
                                <li class="text-sm lga:text-base">Address: {{ $address }}</li>
                            @endforeach
                            <li class="text-sm lga:text-base">Email:
                                @if (is_array($details['email']))
                                    @foreach ($details['email'] as $email)
                                        <a class="text-[--var-highlight] underline"
                                            href="mailto:{{ $email }}">{{ $email }}</a>{{ !$loop->last ? ', ' : '' }}
                                    @endforeach
                                @else
                                    <a class="text-[--var-highlight] underline"
                                        href="mailto:{{ $details['email'] }}">{{ $details['email'] }}</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                @endforeach
            </article>
        </div>
    </div>
    <aside class="hidden w-[25%] xla:block">
        @include('components.aside')
    </aside>
@endsection
