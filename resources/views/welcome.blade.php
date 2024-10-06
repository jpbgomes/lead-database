<x-app-layout>
    <x-full-container class="overflow-y-visible pt-10">
        <x-container class="flex flex-col items-center">
            <x-title>a <span class="text-white">developer</span> who works to get the <span class="text-white">best out of
                    people.</span></h1></x-title>

            <x-cbutton class="bg-white my-14 text-sm font-medium" href="mailto:josepedrogomes27@gmail.com">Reach
                Out</x-cbutton>

            <div class="flex flex-wrap items-center justify-center gap-5 mb-14">
                <a target="_blank"
                    class="flex items-center justify-center transition-all hover:bg-neutral-800 px-2 py-1 gap-2 bg-lightblack text-white rounded-xl text-sm"
                    href="https://github.com/jpbgomes">
                    <img src="logos/github.png" alt="" class="w-6 h-6">@jpbgomes
                </a>

                <a target="_blank"
                    class="flex items-center justify-center transition-all hover:bg-neutral-800 px-2 py-1 gap-2 bg-lightblack text-white rounded-xl text-sm"
                    href="https://www.linkedin.com/in/jpbgomes">
                    <img src="logos/linkedin.png" alt="" class="w-6 h-6">@jpbgomes
                </a>

                <a target="_blank"
                    class="flex items-center justify-center transition-all hover:bg-neutral-800 px-2 py-1 gap-2 bg-lightblack text-white rounded-xl text-sm"
                    href="https://www.youtube.com/@jpbgomes">
                    <img src="logos/youtube.png" alt="" class="w-6 h-6">@jpbgomes
                </a>
            </div>

            <div class="w-full flex flex-col items-center gap-3">
                <div class="w-full bg-lightblack flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 sm:gap-10 p-3 rounded-lg">
                    <div class="flex items-center gap-5">
                        <img src="works/nortada.png" alt="Nortada de Sabores" class="w-[60px]">

                        <div>
                            <h1>Nortada de Sabores</h1>
                            <p class="text-neutral-400 mb-2">Restaurant with booking and fully managed by
                                staff.</p>
                        </div>
                    </div>

                    <div>
                        <x-cbutton
                            class="flex items-center gap-2 border border-neutral-500 text-neutral-200 hover:bg-neutral-700 text-sm"
                            href="https://nortadadesabores.com" target="_blank">Learn More <i
                                class="fa-solid fa-utensils"></i></x-cbutton>
                    </div>
                </div>

                <div class="w-full bg-lightblack flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 sm:gap-10 p-3 rounded-lg">
                    <div class="flex items-center gap-5">
                        <img src="works/amaisterapia.png" alt="A + TErapia" class="w-[60px]">

                        <div>
                            <h1>A + Terapia</h1>
                            <p class="text-neutral-400 mb-2">Massages clinic system with client database and outreach.
                            </p>
                        </div>
                    </div>

                    <div>
                        <x-cbutton
                            class="flex items-center gap-2 border border-neutral-500 text-neutral-200 hover:bg-neutral-700 text-sm"
                            href="https://amaisterapia.com" target="_blank">Check it out
                            <i class="fa-solid fa-spa"></i></x-cbutton>
                    </div>
                </div>
            </div>
        </x-container>

        <x-container class="flex flex-col items-center mt-40 mb-10 sm:mb-40">
            <x-title>my <span class="text-white">path</span> into the <span class="text-white">tech and business</span>
                world.</x-title>

            <div class="flex justify-between items-center gap-4 sm:gap-10 h-[1220px] sm:h-[1000px] mt-20">
                <div class="h-full w-full flex flex-col items-center justify-start gap-10">
                    <div
                        class="w-full flex flex-col items-start justify-center gap-5 sm:gap-3 bg-neutral-800 p-3 sm:p-5 rounded-lg h-40">
                        <h2 class="text-start text-2xl">Age 6</h2>
                        <h1 class="text-start text-md text-neutral-200">First Interaction with a Computer</h1>
                    </div>

                    <div
                        class="w-full flex flex-col items-start justify-center gap-5 sm:gap-3 bg-neutral-800 p-3 sm:p-5 rounded-lg h-60 sm:h-40 mt-28">
                        <h2 class="text-start text-2xl">Age 14</h2>
                        <h1 class="text-start text-md text-neutral-200">Started Programming in Lua</h1>
                    </div>

                    <div
                        class="w-full flex flex-col items-start justify-center gap-5 sm:gap-3 bg-neutral-800 p-3 sm:p-5 rounded-lg h-60 sm:h-40 mt-36">
                        <h2 class="text-start text-2xl">Age 16</h2>
                        <h1 class="text-start text-md text-neutral-200">Joined a Programming-Focused High School Course
                        </h1>
                    </div>
                </div>

                <div class="h-full border border-neutral-300 rounded-full"></div>

                <div class="h-full w-full flex flex-col items-center justify-start gap-10">
                    <div
                        class="w-full flex flex-col items-start justify-center gap-5 sm:gap-3 bg-neutral-800 p-3 sm:p-5 rounded-lg h-60 sm:h-40 mt-40">
                        <h2 class="text-start text-2xl">Age 10</h2>
                        <h1 class="text-start text-md text-neutral-200">Started a Bracelet Business at School (Ended by
                            Principal)</h1>
                        <a href="/works/bracelet.jpg" target="_blank"
                            class="flex items-center gap-2 px-3 py-1 border border-neutral-500 text-neutral-200 hover:bg-neutral-700 text-sm">Learn
                            More</a>

                    </div>

                    <div class="w-full flex flex-col items-start justify-center gap-3 sm:gap-5 bg-neutral-800 p-5 sm:p-3 rounded-lg h-40 sm:h-60 mt-32">
                        <h2 class="text-start text-2xl text-neutral-100">Age 15</h2>
                        <p class="text-start text-md text-neutral-200">Team project: Built, programmed, and launched a mini satellite (CanSat Junior).</p>
                        <a href="https://www.esero.pt/592/Reveja-a-Final-da-1---edi--o-do-CanSat-Jr" target="_blank"
                            class="flex items-center gap-2 px-3 py-1 border border-neutral-500 text-neutral-200 hover:bg-neutral-700 text-sm"
                            aria-label="Learn more about the CanSat Junior project">Learn More</a>
                    </div>                    

                    <a href="{{ route('login') }}">
                        <div
                            class="w-full flex flex-col items-start justify-center gap-5 sm:gap-3 bg-neutral-800 p-3 sm:p-5 rounded-lg h-60 sm:h-40 mt-36">
                            <h2 class="text-start text-2xl">Age 18</h2>
                            <h1 class="text-start text-md text-neutral-200">Graduated High School with Highest
                                Distinction
                                (PAT)</h1>
                        </div>
                    </a>
                </div>
            </div>
        </x-container>
    </x-full-container>
</x-app-layout>
