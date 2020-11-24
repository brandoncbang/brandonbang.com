@extends('_layouts.master')

@section('body')
<section class="hero-section">
    <h2>Let's build a great website together.</h2>

    <p>Hi there, I’m a friendly Web Developer based in Southwest Florida. I offer quality custom web solutions using mobile-first design to deliver great performance and user experience at any resolution. Contact me today to find out how I can improve your web presence.</p>

    <div class="buttons-container">
        <a class="button button--primary" href="/contact/">How can I help you?</a>
        <a class="button button--secondary" href="#service-summary">Learn more</a>
    </div>
</section>

<section id="service-summary" class="service-summary-section">
    <h2>What I can do for you:</h2>

    <div class="cards-container">
        <div class="card service-card">
            <div class="service-card--icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M19 6h-8a1 1 0 0 0-1 1v13H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3zm-6 2h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"></path>
                </svg>
            </div>
            <h3>Mobile First</h3>
            <p>
                First impressions are everything. <a href="https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/worldwide/#monthly-201909-202009-bar">With ~50% of web traffic coming from mobile devices</a>, it’s more important than ever to ensure mobile users are not just an afterthought. I will make your site look its best at any screen size.
            </p>
        </div>
        <div class="card service-card">
            <div class="service-card--icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z"></path>
                </svg>
            </div>
            <h3>Best Practices</h3>
            <p>
                I take pride in my work, and I’ll do my best to make sure your site runs exceptionally well and meets modern web standards, making your SEO and accessibility goals much easier to meet.
            </p>
        </div>
        <div class="card service-card">
            <div class="service-card--icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M12 .5l4.226 6.183 7.187 2.109-4.575 5.93.215 7.486L12 19.69l-7.053 2.518.215-7.486-4.575-5.93 7.187-2.109L12 .5zM10 12H8a4 4 0 0 0 7.995.2L16 12h-2a2 2 0 0 1-3.995.15L10 12z"></path>
                </svg>
            </div>
            <h3>Custom Solutions</h3>
            <p>
                One size does not fit all. If you need something that cookie-cutter templates and page builders can't provide, I can help. Everyone has different needs, and I will custom-tailor a solution that works specifically for you.
            </p>
        </div>
    </div>

    <div class="buttons-container">
        <a class="button button--dark" href="/services/">Find out more</a>
    </div>
</section>
@endsection
