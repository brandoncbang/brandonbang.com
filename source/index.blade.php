@extends('_layouts.master')

@section('body')
<section
    class="flex flex-col justify-center items-center px-6 py-16 md:pt-48 md:pb-32 bg-gradient-to-br from-teal-300 via-blue-600 to-indigo-800">
    <h2 class="text-center text-white text-4xl md:text-6xl leading-tight md:m-0 md:mb-10">Let's build a great website <span class="text-green-300">together.</span>
    </h2>
    <p class="text-lg md:text-xl text-white leading-10 max-w-screen-lg">
        I’m a friendly Web Developer based in Southwest Florida. I offer quality custom web solutions using mobile-first
        design to deliver great performance and user experience at any resolution. Contact me today and find out how I
        can improve your web presence.
    </p>
    <div class="flex flex-col md:flex-row justify-center items-stretch mt-20">
        <a href="/contact/"
            class="group flex justify-center items-center relative
                   text-lg text-center
                   px-6 hover:pr-12 py-3 mb-4 md:mb-0 md:mr-4 rounded
                   text-teal-900 hover:text-teal-900
                   bg-white border-2 border-white
                   transition-all ease-in-out duration-300">
            How can I help you?
            <svg class="absolute right-0 transform -translate-x-8 group-hover:translate-x-0
                        mr-4 transition-all ease-in-out duration-300
                        fill-current text-transparent group-hover:text-teal-900"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
            </svg>
        </a>
        <a href="#service-summary"
            class="text-lg text-center px-6 py-3 rounded text-teal-200 hover:text-white border-2 border-teal-200 hover:border-white transition-colors ease-in-out duration-300">Learn
            more</a>
    </div>
</section>
<section id="service-summary" class="px-6 py-10 md:py-16 mx-auto max-w-screen-xl">
    <h2 class="text-center text-3xl md:text-4xl mb-10 md:mb-16 text-blue-600">What I can do for you</h2>
    <div class="flex flex-col md:flex-row md:items-start max-w-md md:max-w-full mx-auto mt-12">
        <div class="flex-1 flex flex-col justify-center items-center mb-8 md:mb-0 md:mr-16">
            <div class="rounded-full p-4 bg-blue-500">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 6h-8a1 1 0 0 0-1 1v13H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3zm-6 2h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/></svg>
            </div>
            <h3 class="text-center mt-4">Mobile First</h3>
            <p class="leading-loose">
                First impressions are everything. <a href="https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/worldwide/#monthly-201909-202009-bar">With ~50% of web traffic coming from mobile devices</a>, it’s more important than ever to ensure mobile users are not just an afterthought. I will make your site look its best at any screen size.
            </p>
        </div>
        <div class="flex-1 flex flex-col justify-center items-center mb-8 md:mb-0 md:mr-16">
            <div class="rounded-full p-4 bg-blue-500">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z"/></svg>
            </div>
            <h3 class="text-center mt-4">Best Practices</h3>
            <p class="leading-loose">
                I take pride in my work, and I’ll do my best to make sure your site runs exceptionally well and meets modern web standards, making your SEO and accessibility goals much easier to meet.
            </p>
        </div>
        <div class="flex-1 flex flex-col justify-center items-center">
            <div class="rounded-full p-4 bg-blue-500">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 .5l4.226 6.183 7.187 2.109-4.575 5.93.215 7.486L12 19.69l-7.053 2.518.215-7.486-4.575-5.93 7.187-2.109L12 .5zM10 12H8a4 4 0 0 0 7.995.2L16 12h-2a2 2 0 0 1-3.995.15L10 12z"/></svg>
            </div>
            <h3 class="text-center mt-4">Custom Solutions</h3>
            <p class="leading-loose">
                One size does not fit all. If you need something that cookie-cutter templates and page builders can't provide, I can help. Everyone has different needs, and I will custom-tailor a solution that works specifically for you.
            </p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center items-center mt-12">
        <a href="/services/"
            class="group flex justify-center items-center relative
                   text-lg text-center
                   px-6 hover:pr-12 py-3 rounded
                   text-white hover:text-white
                   bg-blue-500 border-2 border-blue-500
                   transition-all ease-in-out duration-300">
            Find out more
            <svg class="absolute right-0 transform -translate-x-8 group-hover:translate-x-0
                        mr-4 transition-all ease-in-out duration-300
                        fill-current text-transparent group-hover:text-white"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
            </svg>
        </a>
    </div>
</section>
@stop