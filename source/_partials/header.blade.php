<h1 class="nav-logo"><a href="/">{{ $page->siteName }}</a></h1>

<ul class="main-nav--list">
    <li class="main-nav--item">
        <a href="/services/">Services</a>
    </li>
    <li class="main-nav--item">
        <a href="/about/">About Me</a>
    </li>
    <li class="main-nav--item">
        <a href="/contact/">Contact</a>
    </li>
</ul>

<button class="mobile-nav--button mobile-nav--button--open">
    Open menu
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"><path fill="none" d="M0 0h24v24H0z"/><path d="M18 18v2H6v-2h12zm3-7v2H3v-2h18zm-3-7v2H6V4h12z"/></svg>
</button>

<div class="mobile-nav">
    <button class="mobile-nav--button mobile-nav--button--close">
        Close menu
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
    </button>
    
    <ul class="mobile-nav--list">
        <li class="mobile-nav--item">
            <a href="/services/">Services</a>
        </li>
        <li class="mobile-nav--item">
            <a href="/about/">About Me</a>
        </li>
        <li class="mobile-nav--item">
            <a href="/contact/">Contact</a>
        </li>
    </ul>
</div>
