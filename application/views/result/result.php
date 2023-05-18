<div class="container mx-auto px-4 pt-10">
    <h1 style="color:#2f2c28;" id="header-title" class="text-2xl py-3 font-bold sm:text-3xl">Sebentar ya, kita lagi cari rekomendasi hadiah buat kamu...</h1>
</div>

<div class="container mx-auto px-4 py-8">
    <div id="product-grid" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="#" id="product-card-template" class="product-card max-w-sm rounded overflow-hidden shadow-lg bg-white" style="display:none;">
            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold sm:text-lg text-sm mb-2 text-black"></div>
                <hr class="my-2 border-gray-400">
                <p id="product-description" class="text-gray-700 text-xs sm:text-base"></p>
                <p id="price" class="font-bold text-gray-900 mt-2 sm:text-base text-xs">$99.99</p>
            </div>
        </button>
    </div>
</div>

<div id="loader-wrapper" class="py-10" style="display:none;">
    <div class="flex items-center justify-center">
        <div class="loading-dots">
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
        </div>
    </div>
</div>

<div id="fill-again-wrapper" class="flex items-center justify-center" style="display:none;">
    <div class="text-center">
        <h3 style="color:#2f2c28;" id="header-title" class="text-sm py-5 font-semibold sm:text-2xl">Masih belum nemu yang cocok? coba lagi untuk cari referensi hadiah lainnya</h1>
            <a href="<?= base_url() ?>fill">
                <button class=" bg-orange-500 hover:bg-orange-700 hover:rounded-lg text-white sm:py-2 mt-3 mb-10 px-4 font-medium w-1/4">
                    Mulai Lagi
                </button>
            </a>
    </div>
</div>


<div id="get-data-wrapper" class="hidden">
    <img src="<?= base_url() ?>/assets/image/loading.gif" class="mx-auto">
</div>


<script>
    $(document).ready(async function() {
        var jsonData = await fetchProducts();
        var perPage = 10; // Set number of items to show per page
        var currentPage = 1; // Initialize current page to 1
        var isLoading = false; // Initialize loader state to false
        var productCardTemplate = document.getElementById("product-card-template");

        function showProducts(start, end) {
            for (var i = start; i < end; i++) {
                var productCardClone = productCardTemplate.cloneNode(true);
                productCardClone.style.display = "block";
                productCardClone.querySelector(".font-bold").textContent = jsonData[i].name;
                productCardClone.querySelector("img").src = jsonData[i].image_url;
                productCardClone.querySelector("p").textContent = jsonData[i].description;
                productCardClone.querySelector("#price").textContent = "Rp." + jsonData[i].price;
                productCardClone.setAttribute('href', jsonData[i].affiliate_url);
                document.querySelector(".grid").appendChild(productCardClone);
            }
        }

        // Initial load of first page
        showProducts(0, perPage);
        currentPage++;

       
        $(window).scroll(function() {
            var scrollHeight = $(document).height();
            var scrollPosition = $(window).height() + $(window).scrollTop();
            var distanceToBottom = scrollHeight - scrollPosition;
            var threshold = 75; // Adjust this value to determine when to start loading more data

            if (distanceToBottom < threshold && !isLoading) {
                isLoading = true; // Set loader state to true

                if (perPage * (currentPage - 1) < 30) {
                    // Show loader element
                    $('#loader-wrapper').show();

                    // Simulate loading time with setTimeout
                    setTimeout(function() {
                        var start = perPage * (currentPage - 1);

                        var end = perPage * currentPage;
                        showProducts(start, end); // Show next set of products
                        currentPage++; // Increment current page
                        isLoading = false; // Set loader state to false
                        $('#loader-wrapper').hide(); // Hide loader element
                    }, 1000); // Change delay time as per your needs
                } else {
                    $('#fill-again-wrapper').show();
                }
            }
        });


        function fetchProducts() {
            // Show loader element
            $('#get-data-wrapper').show();

            var post = <?php echo $post ?>;

            // Return a promise to allow awaiting
            return new Promise(function(resolve, reject) {
                $.ajax({
                    url: '<?= base_url() ?>result/getproducts',
                    method: 'POST',
                    data: post,
                    dataType: 'json',
                    success: function(response) {
                        $('#get-data-wrapper').hide(); // Hide
                        $('#header-title').html("Rekomendasi Hadiah untuk kamu");
                        resolve(JSON.parse(response.listOfProducts)); // Resolve the promise with the listOfProducts
                    },
                    error: function(error) {
                        console.log('Error:', error);
                        reject(error); // Reject the promise with the error
                    }
                });
            });
        }


    });
</script>

<style>
    .text-originate {
        /* Set the text color to #2f2c28 */
        color: #2f2c28;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    }

    .loader {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        margin: auto;
        display: none;
    }

    .loading-dots {
        display: flex;
    }

    .loading-dot {
        width: 15px;
        height: 15px;
        margin: 0 5px;
        border-radius: 50%;
        background-color: #000;
        animation: loading-dot 1.5s ease-in-out infinite;
    }

    .loading-dot:nth-child(1) {
        animation-delay: 0s;
    }

    .loading-dot:nth-child(2) {
        animation-delay: 0.5s;
    }

    .loading-dot:nth-child(3) {
        animation-delay: 1s;
    }

    @keyframes loading-dot {
        0% {
            transform: scale(0.2);
        }

        20% {
            transform: scale(1);
        }

        40% {
            transform: scale(0.2);
        }
    }

    @media (max-width: 767px) {
        .product-card:active {
            transform: scale(1.05);
        }
    }
</style>