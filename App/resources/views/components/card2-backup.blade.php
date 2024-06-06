@php
use Illuminate\Support\Str;
@endphp

<style>
    .card {
        margin: 6px;
        background-color: transparent !important;
    }
    .container1 {
        width: 1180px;
        padding: 4px;
        background-color: #292929;
    }
    img {
        max-width: 8rem;
    }
    .text-popular {
        background-color: rgb(110, 79, 157);
        width: 1180px;
        height: 40px;
        font-family: Poppins, sans-serif;
        display: flex;
        justify-content: start;
        color: white;
        padding: 2px;
    }
    h2{

        margin: 4px;
        font-size: 15px;
    }
</style>

<div class="popular mt-2">
    <div class="text-popular rounded-top">
        <h2 style="backgorund-color: ">Popular Comic</h2>
    </div>
    <div class="container1 p-10">
        <div style="overflow-x: auto; white-space: nowrap;">
            @foreach ($komiks as $komik)
            <div class="card border-0" style="width: 8rem; display: inline-block;">
                <img src="/img/solev.png" class="card-img-top" alt="...">
                <div class="card-body text-white">
                    <p class="card-title">{{ Str::limit($komik->judul, 10) }}</p>
                    <p class="card-text text-secondary">{{ Str::limit($komik->genre, 15) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
