<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Frontend Mentor | Time Tracking Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-navy-950">
<div class="w-full h-screen flex justify-center items-center">
    <main class="flex justify-between">
        <div class="max-h-full">
            <div class="bg-purple-600 rounded-xl mb-5 px-6 pt-8 pb-28 z-10">
                <img
                    src="{{ Vite::asset('resources/images/image-jeremy.png') }}"
                    class="size-18 mr-4 rounded-full border-2 border-white"
                    alt="Jeremy Robson"
                >
                <h3 class="text-navy-200 text-sm mt-8">Report for</h3>
                <h2 class="text-white text-3xl w-1/2">Jeremy Robson</h2>
            </div>
            <div class="bg-navy-900 -translate-y-10 rounded-xl py-10 z-0">
                <p class="text-white">Test</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
            <div>
                <div class="bg-orange flex justify-end rounded-xl">
                    <img
                        src="{{ Vite::asset('resources/images/icon-work.svg') }}"
                        class="size-14 mr-4"
                        alt="Work"
                    >
                </div>
                <div class="bg-navy-900 p-6 rounded-xl w-52 -translate-y-5">
                    <div class="flex justify-between items-center">
                        <h1 class="text-white text-xl">Work</h1>
                        <x-icons.ellipsis class="size-5 text-white"/>
                    </div>
                    <h1 class="text-white text-5xl mt-6">32hrs</h1>
                    <h1 class="text-navy-200 text-xs mt-4">Last Week - 36hrs</h1>
                </div>
            </div>
            <div>
                <div class="bg-blue flex justify-end rounded-xl">
                    <img
                        src="{{ Vite::asset('resources/images/icon-play.svg') }}"
                        class="size-14 mr-4"
                        alt="Play"
                    >
                </div>
                <div class="bg-navy-900 p-6 rounded-xl w-52 -translate-y-5">
                    <div class="flex justify-between items-center">
                        <h1 class="text-white text-xl">Play</h1>
                        <x-icons.ellipsis class="size-5 text-white"/>
                    </div>
                    <h1 class="text-white text-5xl mt-6">10hrs</h1>
                    <h1 class="text-navy-200 text-xs mt-4">Last Week - 8hrs</h1>
                </div>
            </div>
            <div>
                <div class="bg-pink flex justify-end rounded-xl">
                    <img
                        src="{{ Vite::asset('resources/images/icon-study.svg') }}"
                        class="size-14 mr-4"
                        alt="Study"
                    >
                </div>
                <div class="bg-navy-900 p-6 rounded-xl w-52 -translate-y-5">
                    <div class="flex justify-between items-center">
                        <h1 class="text-white text-xl">Study</h1>
                        <x-icons.ellipsis class="size-5 text-white"/>
                    </div>
                    <h1 class="text-white text-5xl mt-6">4hrs</h1>
                    <h1 class="text-navy-200 text-xs mt-4">Last Week - 7hrs</h1>
                </div>
            </div>
            <div>
                <div class="bg-green flex justify-end rounded-xl">
                    <img
                        src="{{ Vite::asset('resources/images/icon-exercise.svg') }}"
                        class="size-14 mr-4"
                        alt="Exercise"
                    >
                </div>
                <div class="bg-navy-900 p-6 rounded-xl w-52 -translate-y-5">
                    <div class="flex justify-between items-center">
                        <h1 class="text-white text-xl">Exercise</h1>
                        <x-icons.ellipsis class="size-5 text-white"/>
                    </div>
                    <h1 class="text-white text-5xl mt-6">4hrs</h1>
                    <h1 class="text-navy-200 text-xs mt-4">Last Week - 5hrs</h1>
                </div>
            </div>
            <div>
                <div class="bg-purple-700 flex justify-end rounded-xl">
                    <img
                        src="{{ Vite::asset('resources/images/icon-social.svg') }}"
                        class="size-14 mr-4"
                        alt="Social"
                    >
                </div>
                <div class="bg-navy-900 p-6 rounded-xl w-52 -translate-y-5">
                    <div class="flex justify-between items-center">
                        <h1 class="text-white text-xl">Social</h1>
                        <x-icons.ellipsis class="size-5 text-white"/>
                    </div>
                    <h1 class="text-white text-5xl mt-6">5hrs</h1>
                    <h1 class="text-navy-200 text-xs mt-4">Last Week - 10hrs</h1>
                </div>
            </div>
            <div>
                <div class="bg-yellow flex justify-end rounded-xl">
                    <img
                        src="{{ Vite::asset('resources/images/icon-self-care.svg') }}"
                        class="size-14 mr-4"
                        alt="Self Care"
                    >
                </div>
                <div class="bg-navy-900 p-6 rounded-xl w-52 -translate-y-5">
                    <div class="flex justify-between items-center">
                        <h1 class="text-white text-xl">Self Care</h1>
                        <x-icons.ellipsis class="size-5 text-white"/>
                    </div>
                    <h1 class="text-white text-5xl mt-6">2hrs</h1>
                    <h1 class="text-navy-200 text-xs mt-4">Last Week - 2hrs</h1>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
