@extends('Layouts.app')

@section('content')
    @include('Layouts.navbar')
    <div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
        <img src="{{ asset('storage/images/image3.webp') }}" class="absolute top-0 left-0 min-h-full ob" alt="">
        <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
            <div class="col-span-6">
                <span class="uppercase text-white text-xs font-bold mb-2 block">WELCOME TO MOROCCAN HERITAGE MARKETPLACE</span>
                <h1 class="text-white font-extrabold text-5xl mb-8">Discover Authentic Moroccan Tools and Accessories</h1>
                <p class="text-stone-100 text-base">
                    Explore a curated collection of traditional Moroccan tools and accessories, celebrating the rich cultural heritage of Morocco. Shop now for unique products and immerse yourself in Moroccan craftsmanship.
                </p>
                <button class="mt-8 text-white bg-red-800 bg-opacity-50 transition-all uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10">Get started</button>
            </div>
        </div>
    </div>
    <div class="bg-[#f7d0b6] py-20">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center">
            <div class="max-w-xl">
                <h2 class="font-black text-sky-950 text-3xl mb-4">Shop Moroccan Heritage Products Worldwide</h2>
                <p class="text-base text-sky-950">
                    From traditional Moroccan pottery to handcrafted textiles, explore our diverse range of products sourced directly from artisans across Morocco. Join us in preserving Moroccan heritage through every purchase.
                </p>
            </div>
            <button class="text-sky-950 uppercase py-3 text-base px-10 border border-sky-950 hover:bg-sky-950 hover:bg-opacity-10">Shop Now</button>
        </div>
    </div>
    <div class="py-12 relative overflow-hidden bg-white">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="w-full flex flex-col items-end pr-16">
                <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">Whether you need Assistance</h2>
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                </div>
            </div>

            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
                <div class="relative z-20 pl-12">
                    <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                    <p class="text-white text-sm">
                        Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                    </p>
                    <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 relative overflow-hidden bg-white">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">


            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-[#f7d0b6] before:top-0 before:right-0">
                <div class="relative z-20 pl-12">
                    <h2 class="text-sky-950 font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                    <p class="text-sky-950 text-sm">
                        Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                    </p>
                    <button class="mt-8 text-sky-950 uppercase py-3 text-sm px-10 border border-sky-950 hover:bg-white hover:bg-opacity-10">Talk with expert</button>
                </div>
            </div>
            <div class="w-full flex flex-col pl-16">
                <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-left mb-12 mt-10">Whether you need Assistance</h2>
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                </div>
            </div>

        </div>
    </div>

    <div class="py-12 relative overflow-hidden bg-white">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="w-full flex flex-col items-end pr-16">
                <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">Whether you need Assistance</h2>
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                </div>
            </div>

            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
                <div class="relative z-20 pl-12">
                    <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                    <p class="text-white text-sm">
                        Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                    </p>
                    <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button>
                </div>
            </div>
        </div>
    </div>
@endsection
