@extends('_layouts.master')

@section('body')
<section class="flex flex-col items-center justify-center px-6 py-16 bg-blue-600 md:py-48 bg-hero-pattern">
    <h2 class="mb-10 text-5xl font-semibold text-center text-white md:text-6xl"
        style="text-shadow: 4px 4px #3C366B;">Let's build a great website together.
    </h2>
    <p class="max-w-screen-lg text-xl antialiased leading-loose tracking-wide text-gray-200 md:text-3xl">
        Hi there, I’m a friendly Web Developer based in Southwest Florida. I offer quality custom web solutions using mobile-first
        design to deliver great performance and user experience at any resolution. Contact me today and find out how I
        can improve your web presence.
    </p>
    <div class="flex flex-col items-stretch justify-center mt-10 md:flex-row md:mt-20">
        <a href="/contact/" class="relative flex items-center justify-center px-6 py-3 mb-4 text-lg text-center text-teal-900 transition-all duration-300 ease-in-out bg-yellow-300 rounded group hover:pr-12 md:mb-0 md:mr-4 hover:text-teal-900" style="box-shadow: 6px 6px #3C366B;">
            How can I help you?
            <svg class="absolute right-0 mr-4 text-transparent transition-all duration-300 ease-in-out transform -translate-x-8 fill-current group-hover:translate-x-0 group-hover:text-teal-900" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
            </svg>
        </a>
        <a href="#service-summary" class="relative flex items-center justify-center px-6 py-3 mb-4 text-lg text-center text-indigo-900 transition-colors duration-300 ease-in-out bg-blue-400 rounded md:mb-0 md:mr-4 hover:text-indigo-900 hover:bg-blue-300" style="box-shadow: 6px 6px #3C366B;">
            Learn more
        </a>
    </div>
</section>
<section id="service-summary" class="px-6 py-10 border-t-8 border-blue-800 md:px-10 md:py-16">
    <h2 class="mb-2 text-3xl text-center text-blue-400 md:text-4xl md:mb-16">What I can do for you:</h2>
    <div class="flex flex-col max-w-md mx-auto mt-12 md:flex-row md:items-stretch md:max-w-full">
        <div
            class="flex flex-col items-center justify-start flex-1 px-6 py-10 mb-6 bg-gray-700 border-2 border-gray-700 rounded md:mb-0 md:mr-10">
            <div class="p-4 bg-blue-400 rounded-full">
                <svg class="text-blue-800 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M19 6h-8a1 1 0 0 0-1 1v13H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3zm-6 2h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                </svg>
            </div>
            <h3 class="mt-4 text-center text-white">Mobile First</h3>
            <p class="leading-loose text-gray-200">
                First impressions are everything. <a
                    href="https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/worldwide/#monthly-201909-202009-bar">With
                    ~50% of web traffic coming from mobile devices</a>, it’s more important than ever to ensure mobile
                users are not just an afterthought. I will make your site look its best at any screen size.
            </p>
        </div>
        <div
            class="flex flex-col items-center justify-start flex-1 px-6 py-10 mb-6 bg-gray-700 border-2 border-gray-700 rounded md:mb-0 md:mr-10">
            <div class="p-4 bg-blue-400 rounded-full">
                <svg class="text-blue-800 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z" />
                </svg>
            </div>
            <h3 class="mt-4 text-center text-white">Best Practices</h3>
            <p class="leading-loose text-gray-200">
                I take pride in my work, and I’ll do my best to make sure your site runs exceptionally well and meets
                modern web standards, making your SEO and accessibility goals much easier to meet.
            </p>
        </div>
        <div
            class="flex flex-col items-center justify-start flex-1 px-6 py-10 mb-6 bg-gray-700 border-2 border-gray-700 rounded md:mb-0">
            <div class="p-4 bg-blue-400 rounded-full">
                <svg class="text-blue-800 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M12 .5l4.226 6.183 7.187 2.109-4.575 5.93.215 7.486L12 19.69l-7.053 2.518.215-7.486-4.575-5.93 7.187-2.109L12 .5zM10 12H8a4 4 0 0 0 7.995.2L16 12h-2a2 2 0 0 1-3.995.15L10 12z" />
                </svg>
            </div>
            <h3 class="mt-4 text-center text-white">Custom Solutions</h3>
            <p class="leading-loose text-gray-200">
                One size does not fit all. If you need something that cookie-cutter templates and page builders can't
                provide, I can help. Everyone has different needs, and I will custom-tailor a solution that works
                specifically for you.
            </p>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center md:flex-row md:mt-12">
        <a href="/services/" class="relative flex items-center justify-center px-6 py-3 mb-4 text-lg text-center text-indigo-900 transition-all duration-300 ease-in-out bg-blue-400 rounded group hover:pr-12 md:mb-0 md:mr-4 hover:text-indigo-900" style="box-shadow: 6px 6px #4F46E5;">
            Find out more
            <svg class="absolute right-0 mr-4 text-transparent transition-all duration-300 ease-in-out transform -translate-x-8 fill-current group-hover:translate-x-0 group-hover:text-indigo-900" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
            </svg>
        </a>
    </div>
</section>
@stop