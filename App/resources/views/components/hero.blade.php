<!-- Slider Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>
    /* Custom styles */
    .slider-item {
        text-align: center;
    }

    .slider-item img {
        max-width: 100%;
        height: 100%;
    }

    /* Set height of carousel item */
    .owl-carousel .owl-item {
        height: 400px; /* Set the desired height */
    }
</style>

<div class="owl-carousel">
    @php
        $latestChapter = null;
    @endphp
    @foreach($komiks as $komik)
        @php
            $chapter = $komik->chapters->sortByDesc('tanggal_rilis')->first();
            if (!$latestChapter) {
                $latestChapter = $chapter;
            }
        @endphp
        <div class="item ">
            <div class="mt-2 mb-1 rounded mx-auto" style="max-width: 1180px;">
                <section class="bg-dark">
                    <div class="container-fluid overflow-hidden">
                        <div class="row">
                            <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end" style="margin: auto">
                                <div class="row py-3 py-sm-5 py-xl-9 mt-md-10 justify-content-sm-center">
                                    <div class="col-12 col-sm-10">
                                        <h5 class="display-2 fw-bolder mb-4 text-white" style="font-weight: 600;
                                            font-size: 17px;">Chapter : {{ $latestChapter->nomor_chapter }}</h5>
                                        <h1 class="display-2 fw-bolder mb-4 text-white" style="font-weight: 600;
                                            font-size: 26px;">{{ $komik->judul }}</h1>
                                        <div class="row">
                                            <div class="col-12 col-xxl-8">
                                                <p class="fs-5 mb-5 text-white">{{ $komik->deskripsi }}</p>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-sm-flex">
                                            <button type="button" class="btn btn-warning bsb-btn-3xl rounded-pill">Read Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 p-0">
                                <img class="img-fluid w-50 h-100 object-fit-cover" style="max-width: 50%" loading="lazy" src="{{ $komik->gambar }}" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endforeach
</div>

<!-- Script untuk slider Owl Carousel -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            autoHeight: false
        });
    });
</script>
