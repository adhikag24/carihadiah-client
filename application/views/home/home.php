<div id="main">
  <div class="container px-5 py-10 mx-auto flex flex-wrap items-center justify-center">
    <div class="h-full p-4 lg:w-1/2">
      <div class="px-8 pt-2 pb-16 relative">
        <h1 class="title-font sm:text-4xl text-2xl font-bold mb-3 text-black">Temukan hadiah yang sempurna dengan <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-orange-600">CariHadiah</span>
        </h1>
        <p class="mb-3 text-black">Jawablah kuis singkat tentang kepribadian dan temukan daftar ide hadiah terbaik yang
          dikurasi khusus untuk mereka</p>

        <a href="<?= base_url() ?>isi-data">
          <!--<button class="btn mt-3 btn-wide bg-orange-500">Mulai</button>-->
          <!--<button class="rounded-none hover:rounded-lg">Save Changes</button>-->
          <button class="bg-orange-500 hover:bg-orange-700 hover:rounded-lg text-white py-2 px-4 rounded-none font-semibold w-1/2">
            Mulai
          </button>
        </a>

      </div>
    </div>

    <div class="h-full p-4 lg:w-1/2">
      <div class="px-8 pt-2 pb-16 relative">
        <img class="objt-contain h-70 w-70 " src="<?=base_url()?>assets/image/landing-page.png" alt="My SVG Image" />
      </div>
    </div>
  </div>
</div>

<style>
  #main {
    height: 93%;
    margin: 0;
    padding: 0;
    min-height: 93vh;
  }
</style>