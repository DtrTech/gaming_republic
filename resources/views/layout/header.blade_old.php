<div class="sticky top-0 z-50">
    <nav class="hidden md:block bg-black ">
        <div class="sm:mx-4 md:mx-5 xl:mx-24 2xl:mx-36">
            <div class="flex items-center justify-start h-16">
                <div class="flex items-center h-full self-start">
                    <button class="btn-show-side-nav w-6 mr-4 inline-block lg:hidden">
                        <img src="https://republic.gg/v2/icon/icon-menu.svg" alt="">
                    </button>
                    <a href="{{ route('home') }}">
                        <img class="h-full w-full inline-block lg:hidden" src="https://republic.gg/v2/img/logo-square.svg" alt="">
                    </a>
                    <a href="https://republic.gg/v2" class="hidden lg:inline-block py-2">
                        <img class="h-full w-full min-w-[110px]" src="https://republic.gg/v2/img/logo.svg" alt="">
                    </a>
                    <div class="block ml-6">
                        <div class="hidden lg:flex space-x-2 md:space-x-4">
                            <a href="{{ route('home') }}" class="text-yellow-dark hover:text-yellow-dark px-2 py-2 rounded-lg text-sm font-medium uppercase" aria-current="page">Home</a>
                            <a href="#" class="text-white  hover:text-yellow-dark  px-2 py-2 rounded-lg text-sm font-medium uppercase">Events</a>
                            <a href="#" class="text-white  hover:text-yellow-dark  px-2 py-2 rounded-lg text-sm font-medium uppercase">News</a>
                            <a href="#" class="text-white  hover:text-yellow-dark  px-2 py-2 rounded-lg text-sm font-medium uppercase">Rewards</a>
                            <a href="#" class="text-white  hover:text-yellow-dark  px-2 py-2 rounded-lg text-sm font-medium uppercase">Promotions</a>

                        </div>
                    </div>
                </div>
                <div class="ml-auto pl-4  w-full justify-end flex space-x-2 md:space-x-4 h-10">
                    <div class="div-navbar-search cursor-pointer relative flex flex-col btn-black border-2 p-0 rounded-lg w-fit max-w-[200px] md:max-w-[400px]">
                        <form action="https://republic.gg/v2/search" method="get">
                            <div class="flex mx-3 my-2">
                                <div class="inline-block">
                                    <img class="w-full h-full" src="https://republic.gg/v2/icon/icon-magnifying-glass.svg" alt="">
                                </div>
                                <input name="q" class="navbar-search hidden bg-transparent h-full text-sm m-0 ml-2 justify-self-stretch self-center w-full focus:outline-none font-light" placeholder="Search...">
                                <button class="btn-clear-search hidden" type="button">
                                    <img class="w-5" src="https://republic.gg/v2/icon/icon-cross.svg" alt="">
                                </button>
                            </div>
                        </form>
                        <div class="navbar-search-result text-left hidden -mt-[2px] -mx-[2px] btn-black rounded-none border-2 border-yellow-dark z-50 h-5 sticky overflow-y-scroll text-sm transition-width" style="min-height: 200px;">
                    </div>
                </div>
   
                <div class="flex justify-center items-center"></div>
                                        
            </div>
        </div>
        
        <div class="mb-4 hidden lg:block">
            <div class="relative inline-block text-left" x-data="{ open: false }">
                <div>
                    <button type="button" x-on:click="open=true" class="inline-flex justify-center w-full rounded-md border border-dgrey shadow-sm px-4 py-2 bg-black text-sm font-medium text-white hover:text-yellow-dark " aria-expanded="true" aria-haspopup="true">
                        <svg class="mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        pokemonplayer52072@gmail.com
                    </button>
                </div>
                <div x-show="open" @click.outside="open = false" class="origin-top-left mt-1 absolute left-0 w-56 rounded-md bg-black border-2 border-dgrey z-20" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" data-alpine-was-cloaked="" style="display: none;">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-white" -->
                        <div class="text-white mx-4 py-3 text-sm font-bold border-b-2 border-dgrey" role="menuitem" tabindex="-1" id="menu-item-0">Settings</div>
                            <a href="https://republic.gg/v2/user/profile/index" class="text-white block mx-4 py-3 text-sm hover:text-yellow-dark" role="menuitem" tabindex="-1" id="menu-item-0">
                                My Account
                            </a>
                            <a href="https://republic.gg/v2/user/history" class="text-white block mx-4 py-3 text-sm hover:text-yellow-dark" role="menuitem" tabindex="-1" id="menu-item-1">My History</a>
                            <a href="https://republic.gg/v2/user/limit" class="text-white block mx-4 py-3 text-sm border-b-2 border-dgrey hover:text-yellow-dark" role="menuitem" tabindex="-1" id="menu-item-2">My Limit</a>
                            <a href="https://republic.gg/user/invite-friend" class="text-white block mx-4 py-3 pt-4 text-sm hover:text-yellow-dark" role="menuitem" tabindex="-1" id="menu-item-2">Invite Friends</a>
                            <form method="POST" action="https://republic.gg/v2/logout" role="none">
                                <input type="hidden" name="_token" value="z69QMrfP9Wn02pQidnjr4YdRj7flAp4RBiWAyGsK">                                        <button type="submit" class="text-white block w-full text-left mx-4 py-3 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Log out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="block md:hidden bg-black">
        <div class="relative flex flex-col">
            <div class="flex justify-start items-stretch h-14 pr-3 overflow-visible">
                <div class="flex items-center h-full">
                    <img class="h-full w-auto py-1 inline-block" alt="" data-cfsrc="https://republic.gg/v2/img/logo-square.png" src="https://republic.gg/v2/img/logo-square.png">
                </div>
                <div class="ml-auto mt-2">
                    <div wire:id="kwQK4wKG8UsaBIQ71Uca" class="div-navbar-search cursor-pointer relative flex flex-col btn-black border-2 p-0 rounded-lg w-fit max-w-[200px] md:max-w-[400px]">
                        <form action="https://republic.gg/v2/search" method="get">
                            <div class="flex mx-3 my-2">
                                <div class="inline-block">
                                    <img class="w-full h-full" src="https://republic.gg/v2/icon/icon-magnifying-glass.svg" alt="">
                                </div>
                                <input name="q" class="navbar-search hidden bg-transparent h-full text-sm m-0 ml-2 justify-self-stretch self-center w-full focus:outline-none font-light" placeholder="Search...">
                                <button class="btn-clear-search hidden" type="button">
                                    <img class="w-5" src="https://republic.gg/v2/icon/icon-cross.svg" alt="">
                                </button>
                            </div>
                        </form>
                        <div class="navbar-search-result text-left hidden -mt-[2px] -mx-[2px] btn-black rounded-none border-2 border-yellow-dark z-50 h-5 sticky overflow-y-scroll text-sm transition-width" style="min-height: 200px;">
                    </div>
                </div>

            </div>
        </div>
        <div class="flex pb-2 px-3 my-2">
            <button class="btn-show-side-nav ">
                <img class="w-6" src="https://republic.gg/v2/icon/icon-menu.svg" alt="">
            </button>
            <div class=" ml-auto flex justify-center items-center">
                    <div class="p-2 rounded-lg rounded-r-none border-r-0 border-dgrey border-2 text-white">
                        0.00 GG
                    </div>
                    <a href="https://republic.gg/v2/reload/index" class="block bg-yellow-dark px-3 py-1 rounded-lg rounded-l-none text-3xl"> + </a>
                    <div class="ml-4 rounded-lg py-2 px-3 border-dgrey border-2 text-white">
                        530.00 GR

                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
