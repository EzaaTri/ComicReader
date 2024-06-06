<x-navbar></x-navbar>
<x-app-layout>
    <x-hero :komiks="$komiks" />
    <x-genre></x-genre>
    <x-card2 :komiks="$komiks" />
    <x-new-relase :komiks="$komiks" />
</x-app-layout>
<x-footer></x-footer>
 <style>
    .container{
        margin-top: -40px;
    }
 </style>
