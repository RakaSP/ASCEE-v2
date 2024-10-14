<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($index = 1)
    {
        $asideEvents = app(AsideController::class)->asideevents();
        $newsArticles = $this->getNewsArticles();
        $perPage = 10;
        $totalNews = count($newsArticles);
        $totalPages = ceil($totalNews / $perPage);

        $offset = ($index - 1) * $perPage;

        $pagedNews = array_slice($newsArticles, $offset, $perPage);
        $currentPage = $index;
        return view('news', compact('pagedNews', 'totalPages', 'index', 'asideEvents', 'currentPage'));
    }

    public function readDetail($index = 1)
    {
        $news = $this->getNewsArticles();
        $selectedNews = $news[$index - 1];

        return view('news.read', compact('selectedNews'));
    }

    public function getNewsArticles()
    {
        return  [
            [
                'title' => 'Pengumuman Hasil Akhir Penerima 2nd ASCEE Scholarship TA 2020/2021',
                'date' => '06 Oct 2021',
                'image' => asset('assets/home-banner1.jpg'),
                'description' => '
<div class="rounded-lg">
    <h3 class="text-xl font-semibold pb-2">Penerima ASCEE Scholarship 2020/2021:</h3>
    <table class="min-w-full divide-y divide-gray-200 border border-gray-300 mt-4">
        <thead>
            <tr class="text-sm font-medium">
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Afiliasi</th>
                <th class="px-4 py-2 border">Tingkat</th>
                <th class="px-4 py-2 border">Besaran Beasiswa</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr class="text-sm">
                <td class="px-4 py-2 border">1</td>
                <td class="px-4 py-2 border">Siti Nurul Hidayah</td>
                <td class="px-4 py-2 border">UIN Sunan Gunung Jati Bandung</td>
                <td class="px-4 py-2 border">Sarjana</td>
                <td class="px-4 py-2 border">Rp. 3.000.000</td>
            </tr>
            <tr class="text-sm">
                <td class="px-4 py-2 border">2</td>
                <td class="px-4 py-2 border">Moch. Saiful Umam</td>
                <td class="px-4 py-2 border">Universitas Diponegoro Semarang</td>
                <td class="px-4 py-2 border">Master</td>
                <td class="px-4 py-2 border">Rp. 4.500.000</td>
            </tr>
        </tbody>
    </table>

    <p class="mt-4">Untuk proses selanjutnya bagi penerima 2nd ASCEE Scholarship silahkan mengisi form berikut ini:</p>
    <a href="https://s.id/FormBeasiswa" class="text-green-500 hover:underline">https://s.id/FormBeasiswa</a>
    <p class="mt-2">Paling lambat tanggal 1 November 2021, pukul 24.00 WIB.</p>

    <h3 class="mt-6 text-xl font-semibold pb-2">Finalis Terpilih dan Penghargaan:</h3>
    <table class="min-w-full divide-y divide-gray-200 border border-gray-300 mt-4">
        <thead>
            <tr class="text-sm font-medium">
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Afiliasi</th>
                <th class="px-4 py-2 border">Tingkat</th>
                <th class="px-4 py-2 border">Penghargaan</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr class="text-sm">
                <td class="px-4 py-2 border">1</td>
                <td class="px-4 py-2 border">Arum Buana</td>
                <td class="px-4 py-2 border">Universitas Ahmad Dahlan Yogyakarta</td>
                <td class="px-4 py-2 border">Sarjana</td>
                <td class="px-4 py-2 border">Akun Grammarly Premium, dan Subsidi Buku Rp. 150.000</td>
            </tr>
            <tr class="text-sm">
                <td class="px-4 py-2 border">2</td>
                <td class="px-4 py-2 border">Aji Indo Sabiilagusti</td>
                <td class="px-4 py-2 border">Universitas Sebelas Maret Surakarta</td>
                <td class="px-4 py-2 border">Master</td>
                <td class="px-4 py-2 border">Akun Grammarly Premium, dan Subsidi Buku Rp. 150.000</td>
            </tr>
            <tr class="text-sm">
                <td class="px-4 py-2 border">3</td>
                <td class="px-4 py-2 border">Asmar</td>
                <td class="px-4 py-2 border">Universitas Negeri Makassar</td>
                <td class="px-4 py-2 border">Master</td>
                <td class="px-4 py-2 border">Akun Grammarly Premium, dan Subsidi Buku Rp. 150.000</td>
            </tr>
            <tr class="text-sm">
                <td class="px-4 py-2 border">4</td>
                <td class="px-4 py-2 border">Elvara Norma Aroyandini</td>
                <td class="px-4 py-2 border">Universitas Negeri Yogyakarta</td>
                <td class="px-4 py-2 border">Master</td>
                <td class="px-4 py-2 border">Akun Grammarly Premium, dan Subsidi Buku Rp. 150.000</td>
            </tr>
            <tr class="text-sm">
                <td class="px-4 py-2 border">5</td>
                <td class="px-4 py-2 border">M. Agung Akbar</td>
                <td class="px-4 py-2 border">Universitas Padjadjaran Bandung</td>
                <td class="px-4 py-2 border">Master</td>
                <td class="px-4 py-2 border">Akun Grammarly Premium, dan Subsidi Buku Rp. 150.000</td>
            </tr>
            <tr class="text-sm">
                <td class="px-4 py-2 border">6</td>
                <td class="px-4 py-2 border">Natasia Angreani</td>
                <td class="px-4 py-2 border">Universitas Bunda Mulia Jakarta</td>
                <td class="px-4 py-2 border">Master</td>
                <td class="px-4 py-2 border">Akun Grammarly Premium, dan Subsidi Buku Rp. 150.000</td>
            </tr>
        </tbody>
    </table>

    <p class="mt-4">Bagi para finalis terpilih tersebut, dimohon untuk mengisi form berikut ini:</p>
    <a href="https://s.id/FormFinalis" class="text-green-500 hover:underline">https://s.id/FormFinalis</a>
</div>'

            ],
            [
                'title' => 'Pengumuman Penerima ASCEE Editor Grant 2020',
                'date' => '01 Sep 2020',
                'image' => asset('assets/home-banner2.png'),
                'description' => '
<div class="py-4">
    <p class="mb-4">Hasil seleksi Wawancara ASCEE Editor Grant 2020 pada 26-27 Agustus 2020, kami umumkan Peserta yang lolos dan akan mendapatkan ASCEE Editor Grant 2020, sebagai berikut:</p>

    <ol class="list-decimal pl-8 mb-4">
        <li>STT Terpadu Nurul Fikri Jakarta</li>
        <li>Sekolah Tinggi Teknologi Informasi NIIT Jakarta</li>
        <li>Universitas Nahdlatul Ulama Sidoarjo Sidoarjo, Jawa Timur</li>
        <li>Akademi Komunitas Negeri Aceh Barat Aceh</li>
        <li>Sekolah Tinggi Ilmu Ekonomi IBBI Medan</li>
        <li>STKIP Pamane Talino Kalimantan Barat</li>
        <li>IAIN Sultan Amai Gorontalo Gorontalo</li>
        <li>IAIN Ambon Ambon</li>
        <li>IAIN Kendari Kendari</li>
        <li>Universitas Bung Hatta Padang, Sumatera Barat</li>
        <li>Universitas Jenderal Achmad Yani Yogyakarta Yogyakarta</li>
        <li>Universitas Mahasaraswati Denpasar Bali</li>
    </ol>

    <p class="mb-4">Kami ucapkan selamat bagi penerima grant dan terima kasih kepada semua peserta yang mengikuti proses seleksi ASCEE Editor Grant Tahun 2020.</p>

    <p class="mb-4">Pemberitahuan resmi mengenai hasil lolos seleksi akan dikirimkan melalui alamat email beserta jadwal penandatanganan kontrak dan informasi penyerahan ASCEE Grant 2020.</p>

    <p class="mb-4">Keputusan dan penentuan hasil lolos seleksi sepenuhnya merupakan kewenangan ASCEE, serta tidak dapat diganggu gugat.</p>

    <p>Terimakasih</p>
    <p>Panitia Editor Grant untuk Kampus 2020</p>
</div>'
            ],
            [
                'title' => 'ASCEE Student Indonesia gelar Webinar “Tips & Trik Memulai Tugas Akhir untuk Mahasiswa Galau di Tengah Kuliah Daring”',
                'date' => '29 Aug 2020,',
                'image' => asset('assets/home-banner3.png'),
                'description' => '
<div class="pb-4">
    <p class="mb-4 indent-4">Dalam masa pandemic Covid-19 seperti saat ini, ASCEE Student Branch Indonesia mengadakan kegiatan berupa Live Webinar #1 dengan tema “Tips & Trik Memulai Tugas Akhir untuk Mahasiswa Galau di Tengah Kuliah Daring”. Kegiatan ini dilaksanakan pada Kamis, 27 Agustus 2020. Pelatihan diadakan online di melalui Zoom, serta disiarkan online melalui YouTube. Kegiatan tersebut dimulai pukul 14.30 WIB hingga pukul 16.30 WIB.</p>

    <p class="mb-4 indent-4">Kegiatan ini dipandu oleh Ahmad Shohibus Sulthoni (Mahasiswa Telkom Univeristy), dengan pembicara Aji Prasetya Wibawa, S.T., M.M.T., Ph.D., (Universitas Negeri Malang) dan diikuti oleh 240 mahasiswa dari berbagai universitas di Indonesia dan Luar Negeri. Workshop ini sendiri memiliki tujuan utama yaitu membantu mahasiswa tingkat akhir untuk menentukan langkah awal memulai Tugas Akhir/Skripsi.</p>

    <p class="mb-4 indent-4">“Kegiatan ini kami buat dengan melihat kondisi mahasiswa yang masih merasa bingung dengan tugas akhir yang akan dikerjakan sebagai bentuk produk kelulusan dan mendapatkan gelar sarjana sebagai bentuk tanggungjawab selama kegiatan perkuliahan. Dengan melihat kasus tersebut, kami dari ASCEE Student Branch Indonesia mengadakan kegiatan ini secara Gratis yang dapat diikuti oleh seluruh mahasiswa dengan berbagai latar belakang program studi” ucap Ahmad Shohibus Sulthoni, Salah satu perwakilan mahasiswa Telkom University yang tergabung di ASCEE Student Indonesia.</p>

    <p class="mb-4 indent-4">Dalam penyampaian materi, Aji Prasetya Wibawa, S.T., M.M.T., Ph.D menjelaskan secara detail mengenai tips & trik memulai tugas akhir tersebut. Menurut Aji kegiatan ini penting karena dapat membantu mahasiswa dalam mengatasi kebingungan bagaimana mengawali sebuah tugas akhir/skripsi. “Kegiatan semacam ini penting, sebagai poros tengah yang mungkin bisa meringankan kegalauan mahasiswa, di tengah terbatas momen bertemu dengan dosennya. Setidaknya menginjeksi pikiran positif bagi para pejuang skripsi dan tugas akhir. Strategi yang tidak matang akan berakhir dengan kesedihan, atur strategi dengan baik untuk mendapatkan hasil yang maksimal.” Ucap Aji Prasetya Wibawa, S.T., M.M.T., Ph.D.</p>

    <p class="mb-4 indent-4">Kegiatan disambut baik oleh para peserta, hal ini dapat dilihat dari antusias dan keaktifan para peserta sepanjang rangkaian kegiatan.</p>
</div>'
            ],
            [
                'title' => 'Pengumuman Lolos Seleksi Administrasi JOURNAL EDITOR GRANT untuk Kampus Tahun 2020',
                'date' => '15 Aug 2020',
                'image' => asset('assets/home-banner4.jpg'),
                'description' => '
<div class="py-4">
    <p class="mb-4">Dengan ini diinformasikan bahwa rangkaian seleksi administrasi penerimaan JOURNAL EDITOR GRANT untuk Kampus Batch I Tahun 2020 telah selesai dilaksanakan. Nama-nama kampus yang lolos administrasi dapat dilihat pada daftar terlampir.</p>

    <table class="min-w-full border-collapse border border-gray-300">
        <thead>
            <tr class="border-b">
                <th class="px-4 py-2 text-left">No</th>
                <th class="px-4 py-2 text-left">Nama Kampus</th>
                <th class="px-4 py-2 text-left">Alamat</th>
            </tr>
        </thead>
        <tbody class="text-sm border-t">
            <tr class="border-b">
                <td class="px-4 py-2">1</td>
                <td class="px-4 py-2">STT Terpadu Nurul Fikri</td>
                <td class="px-4 py-2">Jl. Raya Lenteng Agung No.20, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, DKI Jakarta 12640</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">2</td>
                <td class="px-4 py-2">Sekolah Tinggi Teknologi Warga Surakarta</td>
                <td class="px-4 py-2">Jalan Raya Solo-Baki Km.2 Kwarasan, Solo Baru, Sukoharjo, Jawa Tengah</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">3</td>
                <td class="px-4 py-2">STIKES Griya Husada Sumbawa</td>
                <td class="px-4 py-2">Jalan Lingkar Kebayan</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">4</td>
                <td class="px-4 py-2">Sekolah Tinggi Teknologi Informasi NIIT</td>
                <td class="px-4 py-2">Jl. Asem II No.22, RT.11/RW.5, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">5</td>
                <td class="px-4 py-2">Universitas Muhammadiyah Sumatera Barat</td>
                <td class="px-4 py-2">Jl. Pasia Kandang No.04</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">6</td>
                <td class="px-4 py-2">Politeknik Negeri Lhokseumawe</td>
                <td class="px-4 py-2">Jalan Banda Aceh - Medan Km.280,3 Buketrata</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">7</td>
                <td class="px-4 py-2">Institut Pendidikan Indonesia Garut</td>
                <td class="px-4 py-2">Terusan Pahlawan No.32 Tarogong Kidul</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">8</td>
                <td class="px-4 py-2">Akademi Komunitas Negeri Putra Sang Fajar Blitar</td>
                <td class="px-4 py-2">Jl. dr. Sutomo No. 51 Kota Blitar</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">9</td>
                <td class="px-4 py-2">Universitas Nahdlatul Ulama Sidoarjo</td>
                <td class="px-4 py-2">Jl. Monginsidi Kav DPR No.Dalam, Sidoklumpuk, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61218</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">10</td>
                <td class="px-4 py-2">Akademi Komunitas Negeri Aceh Barat</td>
                <td class="px-4 py-2">Komplek STTU Alue Peunyareng, Ujong Tanoh Darat, Meureubo, Kabupaten Aceh Barat, 23615</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">11</td>
                <td class="px-4 py-2">Sekolah Tinggi Ilmu Ekonomi IBBI</td>
                <td class="px-4 py-2">Jl. Gatot Subroto No.130, Silalas, Kec. Medan Bar., Kota Medan, Sumatera Utara 20114</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">12</td>
                <td class="px-4 py-2">Universitas Bung Hatta</td>
                <td class="px-4 py-2">Jl. Sumatera, Ulak Karang</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">13</td>
                <td class="px-4 py-2">STKIP Pamane Talino</td>
                <td class="px-4 py-2">Jl Afandi Rani Jalur 2</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">14</td>
                <td class="px-4 py-2">Universitas Jenderal Achmad Yani Yogyakarta</td>
                <td class="px-4 py-2">Jl. Siliwangi, Ringroad Barat, Banyuraden, Gamping, Sleman Daerah Istimewa Yogyakarta 55293</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">15</td>
                <td class="px-4 py-2">Akademi Keperawatan Pasar Rebo</td>
                <td class="px-4 py-2">Jl. Tanah Merdeka No.16-18, Pasar Rebo, Jakarta Timur</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">16</td>
                <td class="px-4 py-2">Universitas Gunung Rinjani</td>
                <td class="px-4 py-2">Jln. Raya Mataram Lb. Lombok KM 50 Sleong Lotim</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">17</td>
                <td class="px-4 py-2">STIT Sunan Giri Bima</td>
                <td class="px-4 py-2">Jl. Sukun Karara No. 2 Kelurahan Monggonao Kecamatan Mpunda Kota Bima –NTB</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">18</td>
                <td class="px-4 py-2">IAIN Sultan Amai Gorontalo</td>
                <td class="px-4 py-2">Kampus 1 Jl. Gelatik, No. 1, Heledulaa Utara Kota Gorontalo</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">19</td>
                <td class="px-4 py-2">Universitas Pembangunan Nasional "Veteran" Jawa Timur</td>
                <td class="px-4 py-2">Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">20</td>
                <td class="px-4 py-2">Institut Agama Islam Negeri Ambon</td>
                <td class="px-4 py-2">Jl. Dr. H. Tarmizi Taher - Kebun Cengkeh Batu Merah Atas Sirimau</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">21</td>
                <td class="px-4 py-2">Politeknik Negeri Media Kreatif</td>
                <td class="px-4 py-2">Jalan Srengseng Sawah, Jagakarsa</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">22</td>
                <td class="px-4 py-2">Universitas Kusuma Husada Surakarta</td>
                <td class="px-4 py-2">Jl. Jaya Wijaya No..11, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">23</td>
                <td class="px-4 py-2">IAIN Kendari</td>
                <td class="px-4 py-2">Jl. Sultan Qaimuddin, No.17, Kec. Baruga</td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2">24</td>
                <td class="px-4 py-2">Universitas Mahasaraswati Denpasar</td>
                <td class="px-4 py-2">Jalan Kamboja No. 11 A</td>
            </tr>
        </tbody>
    </table>

    <p class="mt-4">Keterangan:</p>
    <p class="mb-4">Pemberitahuan resmi mengenai hasil lolos seleksi akan dikirimkan melalui alamat email. Keputusan dan penentuan hasil lolos seleksi sepenuhnya merupakan kewenangan ASCEE, serta tidak dapat diganggu gugat.</p>
    <p class="mb-4">Jadual seleksi wawancara akan dilaksanakan pada 26 -27 Agustus 2020, waktu dan ID Meeting akan dikirimkan melalui email.</p>
    <p class="mb-4">Terimakasih</p>
    <p>Panitia Editor Grant untuk Kampus 2020</p>
</div>'
            ],
            [
                'title' => 'Indonesian Embassy in Beijing held a Virtual Quiz Competition for Indonesian Students in China',
                'date' => '12 Aug 2020',
                'image' => asset('assets/home-banner5.png'),
                'description' => "
<div>
    <h3>Beijing - Virtual quiz competition was officially opened on 12/08/2020 by the Education and Cultural Attache of the Embassy of the Republic of Indonesia in Beijing. This activity collaborates with the Indonesian Embassy in Beijing, Education, and Cultural Attache of the Embassy of the Republic of Indonesia in Beijing, ANTARA Beijing, ASCEE China Section, ASCEE Student Branch, Indonesian Student Association in China (PPIT) and the Indonesian Assistance Movement (GIM).</h3>

    <p>This virtual quiz competition (LCC) is an event that is fully supported by the Indonesian Embassy in Beijing through the Education and Culture Attaché with the theme \"Implementing Attitudes and National Insights.\" This activity carried out to celebrate the 75th of Indonesia's independence day and to commemorate the seventy years of diplomatic relations between Indonesia and China.</p>

    <p>In his remarks, the head of the committee expressed gratitude for the extraordinary achievement in this activity because of the enthusiastic participants and attended by all Indonesian students from various regions in China. The committee prepares the entire LCC2020 for one month. \"said Farhan.\"</p>

    <p>Meanwhile, in the second speech, Assist. Prof. Sularso representing ASCEE China, conveyed the importance of increasing the capacity of knowledge through various academic activities, one of which is LCC 2020. ASCEE is a forum for students in the scope of social, science, and technology fields who have successfully carried out activities in the form of international conferences, publication, and management of CNKI indexed international journals which can be used for student graduation requirements.</p>

    <p>ASCEE activities are not limited in China but also in several countries in the world. One of ASCEE's services to the Indonesian nation is by offering scholarships both abroad and domestically. \"In the future, ASCEE is also ready to oversee and collaborate with the Indonesian Embassy in Beijing for various academic activities.\" He said.</p>

    <p>At the same time, the last remarks and opening the event were Mr. Yaya Sutarya, M.Pd., as the Education and Culture Attache, the Indonesian Embassy in Beijing. In his speech, he conveyed about the four pillars of nationality that must nurture to deepen the country's love. The existence of Indonesian students abroad must also reflect the intended values.</p>

    <p>In closing, he much appreciated the LCC2020 activity, which held for the first time in the world.</p>

    <p>\"The Indonesian Embassy in Beijing is ready to support world-class (international) LCC activities which expected to be spearheaded by the ASCEE China Section, in collaboration with student organizations in China.\" He closed.</p>

    <p>Until this news was released, the race for the session I had started. The semifinalists who have passed the preliminary round today will compete on the following day.</p>

    <p>Reporter: | Faqih |</p>
</div>",
            ],
            ['title' => 'ASCEE Indonesia holds a "Data Science in Economics and Business" webinar', 'date' => '14 Jul 2020', 'image' => asset('assets/home-banner6.png')],
            ['title' => 'In the upcoming Short Film Competition, ASCEE Student Branch China Section Holds a Film Workshop Webinar', 'date' => '10 Jul 2020', 'image' => asset('assets/home-banner7.png')],
            ['title' => 'ASCEE Organize Ad Hoc Formation of ASCEE Student Branch Indonesia', 'date' => '09 Jul 2020', 'image' => asset('assets/home-banner8.jpeg')],
            ['title' => 'ASCEE China Section collaborate with Indonesian Student Association (PPI) China Gather Donation for Covid19', 'date' => '07 Jul 2020', 'image' => asset('assets/home-banner9.jpeg')],
            ['title' => 'For "Indonesia Future Progress", ASCEE presents Journal Editor Grant', 'date' => '03 Jul 2020', 'image' => asset('assets/home-banner10.jpg')],
            ['title' => 'Verbal Traditions and Pagebluk Myth in Java Become Topics of National Webinars', 'date' => '28 Jun 2020', 'image' => asset('assets/home-banner11.jpg')],
            ['title' => '[Announcement] The Winners of Student Scientific Writing Contest (LKTM) ASCEE-Indonesia Embassy (KBRI) Beijing 2020', 'date' => '26 Jun 2020', 'image' => asset('assets/home-banner12.jpeg')],
            ['title' => 'Visual Communication Design responds to COVID-19', 'date' => '26 Jun 2020', 'image' => asset('assets/home-banner13.jpg')],
            ['title' => 'ASCEE holds the New Normal ASCEE Journal Workshop', 'date' => '26 Jun 2020', 'image' => asset('assets/home-banner14.jpg')],
            ['title' => '70 Years of Diplomatic Relations between Indonesia - China, ASCEE China holds LKTM 2020', 'date' => '13 Jun 2020', 'image' => asset('assets/home-banner15.jpeg')],
            ['title' => 'ASCEE Scholarship 2019', 'date' => '14 Feb 2020', 'image' => asset('assets/home-banner16.png')],
            ['title' => '2019 ASCEE Student Symposium (StuSymp)', 'date' => '14 Feb 2020', 'image' => asset('assets/home-banner17.png')],
            ['title' => 'ASCEE Activities @ P.R China 2019', 'date' => '14 Feb 2020', 'image' => asset('assets/home-banner18.jpg')],
            ['title' => '2019 ASCEE Conferences in JAPAN', 'date' => '14 Feb 2020', 'image' => asset('assets/home-banner19.png')],
        ];
    }
}
