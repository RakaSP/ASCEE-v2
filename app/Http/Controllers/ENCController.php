<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ENCController extends Controller
{

    public function readDetail($index = 1)
    {
        $news = $this->getENC();
        $selectedENC = $news[$index - 1];

        return view('educations.read', compact('selectedENC'));
    }


    public function getENC()
    {
        return
            [
                [
                    'image' => '/build/assets/images/ENC1.jpeg',
                    'date' => '13 Aug 2020',
                    'title' => '[INFO] JOURNAL EDITOR GRANT untuk Kampus 2020',
                    'description' => "
<div class='p-6'>
    <p class='mb-2'>Kepada Yth.</p>
    <p class='mb-4'>Para pengusul <span class='font-semibold'>JOURNAL EDITOR GRANT</span> untuk Kampus 2020, bersama ini kami informasikan bahwa hasil seleksi administrasi dan jadwal seleksi wawancara akan diumumkan pada <span class='font-semibold'>15 Agustus 2020</span>.</p>
    <p class='mb-4'>Terima kasih atas perhatian dan kerjasamanya.</p>
    <p class='mb-4'>Hormat kami,</p>
    <p class='font-semibold'>Panitia</p>
</div>
"


                ],
                [
                    'image' => '/build/assets/images/ENC2.png',
                    'date' => '04 Jul 2020',
                    'title' => '2020 ASCEE International Scholarship',
                    'description' => "
<div class='p-6 '>
    <p class='mb-4'>ASCEE is offering scholarships to high-achieving undergraduate and postgraduate students from the Research4Life/HINARI countries (<a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='https://www.who.int/hinari/eligibility/en/'>Eligibility Criteria</a>).</p>
    <p class='mb-4'>You will be awarded up to <span class='font-semibold'>300 USD</span> for undergraduate students and <span class='font-semibold'>450 USD</span> for postgraduate students. The scholarship will be given for a maximum of six months and is intended for applicants who have research and study areas under ASCEE’s focus, such as:</p>
    <ul class='list-disc ml-8 mb-4'>
        <li>Engineering</li>
        <li>Science</li>
        <li>Education</li>
        <li>Medicine, Nursing and Allied Health</li>
        <li>Social</li>
        <li>Art and Culture</li>
    </ul>
    <h3 class='text-xl font-semibold mb-2'>Requirements:</h3>
    <ul class='list-disc ml-8 mb-4'>
        <li>The students come from the Research4Life/HINARI countries (<a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='https://www.who.int/hinari/eligibility/en/'>Eligibility Criteria</a>).</li>
        <li>The students have accomplished all courses stated in the form of transcripts with the following GPA:
            <ul class='list-disc ml-8'>
                <li><span class='font-semibold'>3.35</span>, scale 4 for Undergraduate students</li>
                <li><span class='font-semibold'>3.65</span>, scale 4 for Postgraduate students</li>
            </ul>
        </li>
        <li>Enclosing the declaration letter of passing the seminar proposal approved by the head of the study program.</li>
        <li>Developing research relates to strategic fields of study for the development of science and technology.</li>
        <li>Have passed administrative selection and interview rounds by the ASCEE team.</li>
    </ul>
    <h3 class='text-xl font-semibold mb-2'>List of documents to apply for a scholarship are as follows:</h3>
    <ul class='list-disc ml-8 mb-4'>
        <li>Approved thesis proposal (signed by supervisor)</li>
        <li>Document of research progress report approved by the supervisor</li>
        <li>Personal graduation planning to complete the degree of requirements</li>
        <li>Recommendation letters</li>
        <li>A statement of commitment to publish one research paper in a listed ASCEE journal at <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='https://ascee.org/frontend/publication/journal'>ASCEE Journals</a> or listed ASCEE conference at <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='https://ascee.org/event/conferences_event/2'>ASCEE Conferences</a> (Free Publication or Registration Fee).</li>
        <li>A written statement that you are not currently receiving another type of scholarship.</li>
    </ul>
    <h3 class='text-xl font-semibold mb-2'>Additionals:</h3>
    <p class='mb-4'>The committee has the right to cancel the scholarship if there is a mismatch of data in the future.</p>
    <p class='mb-4'>The decision of the scholarship selection committee cannot be contested.</p>
    <h3 class='text-xl font-semibold mb-2'>Registration:</h3>
    <p class='mb-4'>For registration, applicants can fill out the online registration form at <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='http://www.scholarship.ascee.org'>www.scholarship.ascee.org</a> by attaching the document files mentioned above.</p>
    <h3 class='text-xl font-semibold mb-2'>ASCEE Scholarship 2020 Selection Schedule:</h3>
    <ul class='list-disc ml-8 mb-4'>
        <li>Registration: 1st November 2020 to 1st January 2021</li>
        <li>Administration selection: 2nd January to 10th January 2021</li>
        <li>Interview rounds: 11th January to 14th January 2021</li>
        <li>Final announcement: 16th January 2021</li>
    </ul>
</div>
"
                ],
                [
                    'image' => '/build/assets/images/ENC3.png',
                    'date' => '02 Jul 2020',
                    'title' => 'ASCEE-Grammarly Premium Feature',
                    'description' => "
<div class=''>
    <p class='mb-2'><strong>Final payment:</strong> 5 July 2020</p>
    <p class='mb-4'><strong>Grammarly date expiration:</strong> 5 July 2021</p>
    
    <h3 class='text-xl font-semibold mb-2'>Pricing:</h3>
    <ul class='list-disc ml-8 mb-4'>
        <li class='mb-2'><span class='font-semibold'>INDONESIAN:</span> IDR 300k per Year for 5 devices<br>
        Register at <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='https://s.id/GrammarlyAscee'>s.id/GrammarlyAscee</a></li>
        
        <li><span class='font-semibold'>OVERSEAS:</span> USD 40 per Year for 5 devices<br>
        Once you send the money, upload the receipt file through <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='https://s.id/40usd'>s.id/40usd</a></li>
    </ul>

    <h3 class='text-xl font-semibold mb-2'>Payment Information:</h3>
    <p>Payment transaction through PayPal.</p>
    <ul class='list-disc ml-8 mb-4'>
        <li>Email: <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='mailto:payments@ascee.org'>payments@ascee.org</a></li>
        <li>ASCEE PayPal Link: <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='http://paypal.me/ASCEEPayments'>paypal.me/ASCEEPayments</a></li>
    </ul>

    <h3 class='text-xl font-semibold mb-2'>Additional Information:</h3>
    <p>Join Telegram group for further information: <a class='text-[--var-highlight] hover:text-[--var-darkyellow]' href='https://t.me/joinchat/EVxYtxsrt7CheOwxkDfWBQ'>Telegram Group</a></p>
</div>
"


                ],
                [
                    'image' => '/build/assets/images/ENC4.jpeg',
                    'date' => '09 Jul 2020',
                    'title' => 'Journal EDITOR GRANT untuk Kampus',
                ],
                [
                    'image' => '/build/assets/images/ENC5.jpeg',
                    'date' => '02 Jul 2020',
                    'title' => '2020 2nd Ascee Scholarship',
                ],
                [
                    'image' => '/build/assets/images/ENC6.png',
                    'date' => '02 Jul 2020',
                    'title' => 'Register DOI and Crosscheck-iThenticate by ASCEE-Crossref',
                    'description' => '
<div class="eligibility mb-4 p-6">
    <h2 class="text-xl font-semibold mb-2">Eligibility</h2>
    <p>If you are an organization (University, Governments, or other non-profit organizations) who works on behalf of groups of smaller with annual revenue or income or funding less than <strong>$1 million USD</strong>.</p>
</div>

<div class="fees mb-4 p-6">
    <h2 class="text-xl font-semibold mb-2">Fees</h2>
    <ol class="list-decimal ml-8">
        <li>
            <strong>Digital Object Identifier (DOI):</strong> Annual ASCEE-Crossref Member Donation is IDR 200.000 for Indonesian Publisher and USD 30 for the other countries. However, ASCEE affiliation members are <strong>FREE</strong>. We accept the following content:
            <ul class="list-disc ml-12">
                <li>Journals and journal articles</li>
                <li>Books, book chapters, and reference works</li>
                <li>Conference proceedings and papers</li>
                <li>Preprints</li>
                <li>Peer Reviews</li>
                <li>Standards</li>
                <li>Technical reports and working papers</li>
                <li>Theses and dissertations</li>
                <li>Components (sub-items of journal, book, or conference content, such as figures, tables, graphs, data)</li>
                <li>Datasets and database entries</li>
                <li>Funding grants (including awards and use of facilities/equipment)</li>
            </ul>
            <p>There are different fees for different content types and some fees are different depending on the publication date of the content. Check the details at <a class="text-[--var-highlight] hover:text-[--var-darkyellow]" href="https://www.crossref.org/fees/#content-registration-fees" target="_blank" rel="noopener noreferrer" class=" hover:underline">Crossref Fees</a>.</p>
        </li>
        <li>
            <strong>Similarity Check/IThenticate:</strong> Each document run through Similarity Check is charged at a per-document-checking fee, and there are volume discounts. There is a separate invoice for Similarity Check document checking fees, check the details at <a class="text-[--var-highlight] hover:text-[--var-darkyellow]" href="https://www.crossref.org/fees/#similarity-check-fees" target="_blank" rel="noopener noreferrer" class=" hover:underline">Similarity Check Fees</a>.
        </li>
        <li>
            <strong>Crossmark:</strong> Crossmark allows members to register status updates to your published content such as corrections, retractions, and errata. It also enables you to put a button on both your HTML articles as well as on PDFs so readers can always know its status whether current, updated, or retracted. There is no annual service fee for Crossmark, but up to the end of 2019 there were fees for each record that was updated or corrected, and these were included in the quarterly content registration invoices.
        </li>
    </ol>
</div>

<div class="registration mb-4 p-6">
    <h2 class="text-xl font-semibold mb-2">Registration</h2>
    <p>For registration, applicants can fill out the online registration form at <a class="text-[--var-highlight] hover:text-[--var-darkyellow]" href="https://forms.gle/GBNSVVgR5icDJVoQ8" target="_blank" rel="noopener noreferrer" class=" hover:underline">Registration Form</a>.</p>
</div>

<div class="payment mb-4 p-6">
    <h2 class="text-xl font-semibold mb-2">Payment</h2>
    <h3 class="font-semibold">IDR Currency</h3>
    <p>Bank name: Bank Mandiri<br>
    Account number: 1370066226628<br>
    Swift code: BMRIIDJA<br>
    Account holder name: Association for Scientific Computing Electronics and Engineering<br>
    Bank Address: Bank Mandiri KCP Yogyakarta UNY<br>
    Country: Indonesia</p>

    <h3 class="font-semibold">USD Currency</h3>
    <p>PayPal: <a class="text-[--var-highlight] hover:text-[--var-darkyellow]" href="http://paypal.me/ASCEEPayments" target="_blank" rel="noopener noreferrer" class=" hover:underline">ASCEE Payments</a></p>
</div>

<div class="contact mb-4 p-6">
    <h2 class="text-xl font-semibold mb-2">Contact</h2>
    <p>Indonesia: Tri Andi (+62 822-3642-3734)<br>
    Overseas: Shoffan (+62 858-7717-7459)<br>
    Email: <a class="text-[--var-highlight] hover:text-[--var-darkyellow]" href="mailto:crossref@ascee.org" class=" hover:underline">crossref@ascee.org</a></p>
</div>
'


                ],
            ];
    }
}
