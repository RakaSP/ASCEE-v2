@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="w-full">
        <header class="relative">
            <img src='/build/assets/images/membership-header.png' alt="">
            <h2 class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-2xl text-white lga:text-4xl">
                Membership</h2>
        </header>
        <div class="my-6 flex flex-col gap-6 lga:my-14 xla:flex-row">
            <div
                class="flex-1 rounded-lg bg-gradient-to-r from-[#112D4E] to-[#1C4E8A] px-6 py-4 shadow-md lga:px-12 lga:py-8">
                <h3 class="mb-4 font-semibold text-white lga:text-xl xla:text-2xl">Affiliate</h3>
                <p class="mb-2 text-[12px] font-medium text-white lga:mb-6 lga:text-sm xla:text-base">
                    Affiliated membership is for national and regional societies/associations/universities. The fees for
                    organizational memberships are determined by the ASCEE Executive Committee. Affiliated members can
                    designate representatives to attend the ASCEE Conference as well as enjoy a range of other
                    <a href="#" class="text-[--var-highlight] hover:underline">benefits.</a>
                </p>

            </div>
            <div
                class="flex-1 rounded-lg bg-gradient-to-r from-[#112D4E] to-[#1C4E8A] px-6 py-4 shadow-md lga:px-12 lga:py-8">
                <h3 class="mb-4 font-semibold text-white lga:text-xl xla:text-2xl">Personal</h3>
                <p class="mb-2 text-[12px] font-medium text-white lga:mb-6 lga:text-sm xla:text-base">
                    Personal membership is open to individuals (Professional or Student) who are established in their
                    careers
                    and share the same values and objectives. As an ASCEE personal member, you can designate to attend the
                    ASCEE Conference as well as enjoy a range of other <a href="#"
                        class="text-[--var-highlight] hover:underline">benefits.</a>
                </p>

            </div>
        </div>
        <div class="my-6 flex flex-col items-center lga:my-14">
            <div class="mb-6 flex items-center">
                <button id="toggleType"
                    class="relative flex items-center justify-between gap-12 rounded-full bg-[#eef0f5] px-4 py-2">
                    <span id="membershipType" class="hidden">Professional</span>
                    <span id="professionalToggle"
                        class="active w-[30vw] rounded-full px-4 py-2 font-semibold lga:w-[140px]">Professional</span>
                    <span id="studentToggle"
                        class="w-[30vw] rounded-full px-4 py-2 font-semibold lga:w-[140px]">Student</span>
                </button>
            </div>

            <table class="min-w-full rounded-lg border border-gray-300 bg-white shadow-md">
                <thead>
                    <tr>
                        <th class="w-[50%] border-b-2 border-gray-300 px-4 py-2 text-left text-sm lga:text-lg">Benefits
                        </th>
                        <th class="border-b-2 border-gray-300 text-left">
                            <div class="py-4 pl-8 pr-8">
                                <h3 class="text-sm font-bold lga:text-lg">Affiliate</h3>
                                <div class="mt-1 text-sm font-semibold text-[--var-dimmed]" id="affiliatePrice">$70</div>
                                <a class="mt-2 border-b-2 border-[--var-highlight] pb-[2px] pr-2 text-[12px] lga:text-base">More
                                    Details</a>
                                <button
                                    class="mt-2 w-full rounded-lg bg-[--var-darkblue] py-1 text-white sma:text-[12px] lga:mt-4 lga:py-2 lga:text-base">Join</button>
                            </div>
                        </th>
                        <th class="border-b-2 border-gray-300 text-left">
                            <div class="py-4 pl-8 pr-8">
                                <h3 class="text-sm font-bold lga:text-lg">Personal</h3>
                                <div class="mt-1 text-sm font-semibold text-[--var-dimmed]" id="personalPrice">$40</div>
                                <a class="mt-2 border-b-2 border-[--var-highlight] pb-[2px] pr-2 text-[12px] lga:text-base">More
                                    Details</a>
                                <button
                                    class="mt-2 w-full rounded-lg bg-[--var-darkblue] py-1 text-white sma:text-[12px] lga:mt-4 lga:py-2 lga:text-base">Join</button>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody id="benefitTable">
                    @php
                        $benefits = [
                            'Benefit 1' => ['affiliate' => true, 'personal' => true],
                            'Benefit 2' => ['affiliate' => true, 'personal' => true],
                            'Benefit 3' => ['affiliate' => true, 'personal' => true],
                            'Benefit 4' => ['affiliate' => true, 'personal' => false],
                            'Benefit 5' => ['affiliate' => false, 'personal' => true],
                            'Benefit 6' => ['affiliate' => true, 'personal' => true],
                            'Benefit 7' => ['affiliate' => true, 'personal' => false],
                            'Benefit 8' => ['affiliate' => false, 'personal' => true],
                        ];

                        $studentBenefits = [
                            'Benefit 1' => ['affiliate' => true, 'personal' => true],
                            'Benefit 2' => ['affiliate' => true, 'personal' => true],
                            'Benefit 3' => ['affiliate' => true, 'personal' => false],
                            'Benefit 4' => ['affiliate' => true, 'personal' => false],
                            'Benefit 5' => ['affiliate' => false, 'personal' => true],
                            'Benefit 6' => ['affiliate' => true, 'personal' => false],
                            'Benefit 7' => ['affiliate' => true, 'personal' => false],
                            'Benefit 8' => ['affiliate' => false, 'personal' => true],
                        ];
                    @endphp

                    @foreach ($benefits as $benefit => $options)
                        <tr>
                            <td class="border-b border-gray-200 bg-[#eef0f5] px-4 py-2 text-sm font-semibold lga:text-lg">
                                {{ $benefit }}</td>
                            <td class="border-b border-gray-200 py-2 pl-8">
                                <img src="/build/assets/images/Icons/circle-check-solid.svg" alt="Checked"
                                    class="affiliate-benefit {{ !$options['affiliate'] ? 'hidden' : '' }} h-4 w-4 lga:h-8 lga:w-8" />
                            </td>
                            <td class="border-b border-gray-200 py-2 pl-8">
                                <img src="/build/assets/images/Icons/circle-check-solid.svg" alt="Checked"
                                    class="personal-benefit {{ !$options['personal'] ? 'hidden' : '' }} h-4 w-4 lga:h-8 lga:w-8" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const professionalBenefits = @json($benefits);
        const studentBenefits = @json($studentBenefits);

        const professionalToggle = document.getElementById('professionalToggle');
        const studentToggle = document.getElementById('studentToggle');

        const toggleButton = document.getElementById('toggleType');
        const membershipType = document.getElementById('membershipType');
        const benefitTable = document.getElementById('benefitTable');
        const affiliatePrice = document.getElementById('affiliatePrice');
        const personalPrice = document.getElementById('personalPrice');

        toggleButton.addEventListener('click', function() {
            const isProfessional = membershipType.textContent === 'Professional';

            if (isProfessional) {
                professionalToggle.classList.remove('active');
                studentToggle.classList.add('active');
            } else {
                professionalToggle.classList.add('active');
                studentToggle.classList.remove('active');
            }

            membershipType.textContent = isProfessional ? 'Student' : 'Professional';


            const selectedBenefits = isProfessional ? studentBenefits : professionalBenefits;
            updateBenefits(selectedBenefits);

            affiliatePrice.textContent = isProfessional ? "$70" : "$70";
            personalPrice.textContent = isProfessional ? "$20" : "$40";
        });

        function updateBenefits(benefits) {
            const rows = benefitTable.getElementsByTagName('tr');
            for (let i = 0; i < rows.length; i++) {
                const benefitName = rows[i].cells[0].textContent.trim();
                const affiliateBenefitImg = rows[i].querySelector('.affiliate-benefit');
                const personalBenefitImg = rows[i].querySelector('.personal-benefit');

                if (benefits[benefitName]) {

                    affiliateBenefitImg.classList.toggle('hidden', !benefits[benefitName].affiliate);
                    personalBenefitImg.classList.toggle('hidden', !benefits[benefitName].personal);
                } else {
                    affiliateBenefitImg.classList.add('hidden');
                    personalBenefitImg.classList.add('hidden');
                }
            }
        }
        updateBenefits(professionalBenefits);
    </script>

    <style>
        #professionalToggle,
        #studentToggle {
            color: #112D4E;
            position: relative;
            z-index: 1;
        }

        #professionalToggle.active,
        #studentToggle.active {
            color: white;
        }

        #toggleType {
            position: relative;
            overflow: hidden;
        }

        #toggleType::after {
            content: '';
            background: #112D4E;
            border-radius: 9999px;
            position: absolute;
            width: 40vw;
            padding: 16px;
            transition: transform 0.3s ease;
            z-index: 0;
        }

        #toggleType:has(#professionalToggle.active)::after {
            transform: translateX(0px);
        }

        #toggleType:has(#studentToggle.active)::after {
            transform: translateX(calc(40vw));

        }

        @media(min-width:426px) {
            #toggleType::after {
                width: 140px;
            }

            #toggleType:has(#studentToggle.active)::after {
                transform: translateX(calc(140px + 3rem));

            }
        }
    </style>


@endsection
