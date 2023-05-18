<!--<ul class="steps">
  <li class="step step-primary">Register</li>
  <li class="step step-primary">Choose plan</li>
  <li class="step step-primary">Purchase</li>
  <li class="step">Receive Product</li>
</ul>-->


<!--<div class="flex flex-col items-center justify-center" style="min-height: 89vh;">-->
<div class="container px-5 py-3 mx-auto" style="min-height: 89vh;">
    <div class="container hidden sm:flex justify-center my-10">
        <ul id="stepper" class="steps text-center ">
            <li id="stepper-1" class="font-light step step-warning">Untuk Siapa</li>
            <li id="stepper-2" class="font-light step">Gender</li>
            <li id="stepper-3" class="font-light step">Umur</li>
            <li id="stepper-4" class="font-light step">Acara</li>
            <li id="stepper-5" class="font-light step">Aktifitas Akhir Pekan</li>
            <li id="stepper-6" class="font-light step">Selera fasihon</li>
            <li id="stepper-7" class="font-light step">Tipe konten</li>
            <li id="stepper-8" class="font-light step">Personaliti</li>
        </ul>
    </div>

    <div class="container my-10 flex sm:hidden justify-center">
        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div id="progress-bar" class="bg-orange-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 0% text-white">0%</div>
        </div>
    </div>

    <div id="multistep-form">
        <div id="step-1" class="step-content">
            <h2 class="wording-header">Untuk Siapa?</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 p-4">
                <div class="flex flex-col">
                    <button onclick="submitForWho(0)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-1/pict1.png"></button>
                    <div class="text-under-choices">Teman Kerja</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitForWho(1)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-1/pict2.png"></button>
                    <div class="text-under-choices">Teman</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitForWho(2)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-1/pict3.png"></button>
                    <div class="text-under-choices">Keluarga</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitForWho(3)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-1/pict4.png"></button>
                    <div class="text-under-choices">Orang yang berarti (pacar)</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitForWho(4)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-1/pict5.png"></button>
                    <div class="text-under-choices">Diri Sendiri</div>
                </div>
            </div>
        </div>


        <div id="step-2" class="step-content hidden">
            <h2 class="wording-header">Apa Gendernya?</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 p-4">
                <div class="flex flex-col">
                    <button onclick="submitGender(0)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400 gender"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-2/pict1.png"></button>
                    <div class="text-under-choices">Perempuan</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitGender(1)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-2/pict2.png"></button>
                    <div class="text-under-choices">Laki-laki</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitGender(2)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-2/pict3.png"></button>
                    <div class="text-under-choices">Non Binary</div>
                </div>
            </div>
            <button id="prev-2" onclick="Prev(2)" class="btn ml-5 mb-5 mt-10 btn-warning text-white">Previous</button>
        </div>



        <div id="step-3" class="step-content hidden">
            <h2 class="wording-header">Berapa Umurnya?</h2>
            <h3 id="age-val" class="text-center text-2xl font-bold mb-4">20 Tahun</h2>
                <input type="range" id="range-age" min="0" max="100" value="20" class="range range-warning" />
                <button id="prev-3" onclick="Prev(3)" class="btn ml-5 mr-3 mt-10 btn-warning text-white">Previous</button>

                <button id="next-3" onclick="NextAge(3)" class="btn btn-success mt-6 text-white">Next</button>
        </div>

        <div id="step-4" class="step-content hidden">
            <h2 class="wording-header">Apa Acaranya?</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 p-4">
                <div class="flex flex-col">
                    <button onclick="submitEvent(0)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400 gender"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-3/pict1.png"></button>
                    <div class="text-under-choices">Ulang Tahun</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitEvent(1)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-3/pict2.png"></button>
                    <div class="text-under-choices">Natal</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitEvent(2)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-3/pict3.png"></button>
                    <div class="text-under-choices">Kelulusan</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitEvent(3)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-3/pict4.png"></button>
                    <div class="text-under-choices">Valentine</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitEvent(4)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-3/pict5.png"></button>
                    <div class="text-under-choices">Hanya Ingin Kasih</div>
                </div>
            </div>
            <button id="prev-4" onclick="Prev(4)" class="btn ml-5 mb-5 mt-10 btn-warning text-white">Previous</button>
        </div>

        <div id="step-5" class="step-content hidden">
            <h2 class="wording-header">Apa yang biasa dia lakukan saat akhir pekan?</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 p-4">
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(0)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400 gender"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict1.png"></button>
                    <div class="text-under-choices">Main Game</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(1)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict2.png"></button>
                    <div class="text-under-choices">Melukis</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(2)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict3.png"></button>
                    <div class="text-under-choices">Dekorasi Rumah</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(3)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict4.png"></button>
                    <div class="text-under-choices">Nonton Konser</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(4)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict5.png"></button>
                    <div class="text-under-choices">Hangout dengan teman</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(5)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict6.png"></button>
                    <div class="text-under-choices">Olahraga</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(6)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict7.png"></button>
                    <div class="text-under-choices">Pesta</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(7)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict8.png"></button>
                    <div class="text-under-choices">Baca Buku</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(8)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict9.png"></button>
                    <div class="text-under-choices">Quality Time dengan Keluarga</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(9)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict10.png"></button>
                    <div class="text-under-choices">Lembur Kerja</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(10)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict11.png"></button>
                    <div class="text-under-choices">Istirahat / Tidur</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(11)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict12.png"></button>
                    <div class="text-under-choices">Buat Konten</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitWeekendActivity(12)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-4/pict13.png"></button>
                    <div class="text-under-choices">Self Reward - Jalan2 sendiri</div>
                </div>
            </div>
            <button id="prev-4" onclick="Prev(5)" class="btn ml-5 mb-5 mt-10 btn-warning text-white">Previous</button>
        </div>


        <div id="step-6" class="step-content hidden">
            <h2 class="wording-header">Bagaimana Selera Fashionnya?</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 p-4">
                <div class="flex flex-col">
                    <button onclick="submitFashionType(0)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400 gender"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict1.png"></button>
                    <div class="text-under-choices">Glamour</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitFashionType(1)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict2.png"></button>
                    <div class="text-under-choices">Sporty</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitFashionType(2)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict3.png"></button>
                    <div class="text-under-choices">Casual</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitFashionType(3)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict4.png"></button>
                    <div class="text-under-choices">Professional</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitFashionType(4)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict5.png"></button>
                    <div class="text-under-choices">Streetwear</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitFashionType(5)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict6.png"></button>
                    <div class="text-under-choices">Trendy</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitFashionType(6)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict7.png"></button>
                    <div class="text-under-choices">Colorful</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitFashionType(7)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-5/pict8.png"></button>
                    <div class="text-under-choices">Tidak Peduli</div>
                </div>
            </div>
            <button id="prev-4" onclick="Prev(6)" class="btn ml-5 mb-5 mt-10 btn-warning text-white">Previous</button>
        </div>


        <div id="step-7" class="step-content hidden">
            <h2 class="wording-header">Apa tipe tontonan kesukaan dia?</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 p-4">
                <div class="flex flex-col">
                    <button onclick="submitContentType(0)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict1.png"></button>
                    <div class="text-under-choices">Masak-masak</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(1)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict2.png"></button>
                    <div class="text-under-choices">Olahraga</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(2)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict3.png"></button>
                    <div class="text-under-choices">Makan / Mukbang</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(3)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict4.png"></button>
                    <div class="text-under-choices">Motivasi</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(4)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict5.png"></button>
                    <div class="text-under-choices">Keuangan</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(5)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict6.png"></button>
                    <div class="text-under-choices">Hiburan</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(6)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict7.png"></button>
                    <div class="text-under-choices">Review Barang</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(7)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict8.png"></button>
                    <div class="text-under-choices">Teknologi</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(8)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict9.png"></button>
                    <div class="text-under-choices">Berita</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(9)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict10.png"></button>
                    <div class="text-under-choices">Hewan</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(10)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict11.png"></button>
                    <div class="text-under-choices">Gosip</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(11)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict12.png"></button>
                    <div class="text-under-choices">ASMR</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitContentType(12)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-6/pict13.png"></button>
                    <div class="text-under-choices">Apa Saja</div>
                </div>
            </div>
            <button id="prev-4" onclick="Prev(7)" class="btn ml-5 mb-5 mt-10 btn-warning text-white">Previous</button>
        </div>

        <div id="step-8" class="step-content hidden">
            <h2 class="wording-header">Apa kepribadiannya?</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 p-4">
                <div class="flex flex-col">
                    <button onclick="submitPersonality(0)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-7/pict1.png"></button>
                    <div class="text-under-choices">Ekstrovert</div>
                </div>
                <div class="flex flex-col">
                    <button onclick="submitPersonality(1)" class="shadow-lg h-50 bg-white hover:bg-slate-50 border-gray-400"><img class="w-full" src="<?= base_url() ?>assets/image/fill/section-7/pict2.png"></button>
                    <div class="text-under-choices">Introvert</div>
                </div>
            </div>
            <button id="prev-5" onclick="Prev(8)" class="btn ml-5 mb-5 mt-10 btn-warning text-white">Previous</button>
        </div>


        <!-- <div id="step-4" class="step-content hidden">
                <h2 class="text-lg font-bold mb-4">Receive product</h2>
                <p>Thank you for your purchase!</p>
                <button id="prev-4" class="btn mr-2">Previous</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>-->
    </div>
</div>
<!--</div>-->



<script>
    var index = 1;
    var answers = [];

    $(document).ready(function() {
        // Initialize the progress tracker
        var steps = $(".steps li");
        // Show the first step
        $("#step-1").show();
        StepperActivate(index)

        $("#range-age").on('input', function() {
            var value = $(this).val();
            $("#age-val").html(value + " Tahun");
        });

    });

    function Prev(num) {
        $("#step-".concat(num)).hide();
        $("#step-".concat(num - 1)).show();
        StepperActivate(num - 1)
        answers.pop()
    }

    function NextAge(num) {
        $("#step-".concat(num)).hide();
        $("#step-".concat(num + 1)).show();
        StepperActivate(num + 1)
        answers.push($("#range-age").val())
    }

    function Next(num) {
        $("#step-".concat(num)).hide();
        $("#step-".concat(num + 1)).show();
        StepperActivate(num + 1)
    }

    function submitForWho(forWho) {
        const forWhoConst = ["teman-kerja", "teman", "keluarga", "orang-yang-berarti", "diri-sendiri"]
        Next(1)
        answers.push(forWhoConst[forWho])
    }

    function submitGender(gender) {
        const genderConst = ["perempuan", "laki-laki", "non-binary"]
        Next(2)
        answers.push(genderConst[gender])
    }

    function submitEvent(event) {
        const eventsConst = ["ulang-tahun", "natal", "kelulusan", "valentine", "hanya-pengen-kasih"]
        Next(4)
        answers.push(eventsConst[event])
    }


    function submitWeekendActivity(activity) {
        const weekendActivityConst = ["main-game", "melukis", "dekorasi-rumah", "konser", "nongkrong-main-dengan-teman", "olahrga", "party", "baca-buku", "quality-time-dengan-keluarga", "masih-kerja-lembur", "istirahat-tidur", "buat-konten", "self-reward-jalan-jalan-sendiri"]
        Next(5)
        answers.push(weekendActivityConst[activity])
    }

    function submitFashionType(type) {
        const fashionTypeConst = ["glamour", "sporty", "casual", "professional", "streetwear", "trendy", "tidak-peduli", "colorful"]
        Next(6)
        answers.push(fashionTypeConst[type])
    }

    function submitContentType(contentType) {

        const contentTypeConst = ["masak-masak", "olahraga", "makan", "motivasi", "keuangan", "hiburan", "review-barang", "teknologi", "berita", "hewan", "gosip", "asmr", "apa-saja"]
        Next(7)
        answers.push(contentTypeConst[contentType])
    }

    function submitPersonality(personality) {
        const personalityConst = ['extrovert', 'introvert']
        answers.push(personalityConst[personality])
        SubmitData()
    }


    function StepperActivate(newIndex) {
        var progressBar = $("#progress-bar");

        var progressBarVal = parseFloat(progressBar.text());

        if (newIndex < index) {
            for (let i = index; i > newIndex; i--) {
                $("#stepper-".concat(i)).removeClass("step-warning")
            }
            index = newIndex
            var result = progressBarVal - 12.5;
            progressBar.text(result + "%");
            progressBar.css("width", result + "%");
        } else {
            index = newIndex
            for (let i = 1; i <= newIndex; i++) {
                $("#stepper-".concat(i)).addClass("step-warning")
            }

            if (index > 1) {
                var result = progressBarVal + 12.5;
                progressBar.text(result + "%");
                progressBar.css("width", result + "%");
            }
        }
    }

    function SubmitData() {
        // Create a new form element
        var myForm = document.createElement("form");
        // for_who, gender, age, event, weekend_activity, fashion_taste, content_type, personality

        // Set the action and method attributes of the form
        myForm.action = "<?= base_url() ?>result";
        myForm.method = "post";
        myForm.style.display = "none";
        myForm.style.display = "hidden";

        createAndAppendTextForm("for_who", answers[0], myForm)
        createAndAppendTextForm("gender", answers[1], myForm)
        createAndAppendNumberForm("age", answers[2], myForm)
        createAndAppendTextForm("event", answers[3], myForm)
        createAndAppendTextForm("weekend_activity", answers[4], myForm)
        createAndAppendTextForm("fashion_taste", answers[5], myForm)
        createAndAppendTextForm("content_type", answers[6], myForm)
        createAndAppendTextForm("personality", answers[7], myForm)

        // Submit the form programmatically
        document.body.appendChild(myForm);
        myForm.submit();
    }

    function createAndAppendTextForm(inputName, inputValue, existingForm) {
        var formInput = document.createElement("input");
        formInput.type = "text";
        formInput.name = inputName;
        formInput.value = inputValue
        existingForm.appendChild(formInput);
    }

    function createAndAppendNumberForm(inputName, inputValue, existingForm) {
        var formInput = document.createElement("input");
        formInput.type = "number";
        formInput.name = inputName;
        formInput.value = inputValue
        existingForm.appendChild(formInput);
    }
</script>

<style>
    .wording-header {
        text-align: center;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        font-size: 1.875rem;
        line-height: 2.25rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: black;
    }

    .text-under-choices {
        font-size: 1.25rem;
        font-weight: 500;
        padding-top: 1rem;
        text-align: center;
        color: black;
    }
</style>