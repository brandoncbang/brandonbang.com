<nav id="js-nav-menu" class="hidden absolute md:block md:relative z-10 top-0 bottom-0 left-0 right-0 bg-green-700 md:bg-transparent">
    <ul class="flex flex-col md:flex-row items-center md:justify-end h-full m-0 list-none text-2xl">
        <li class="mt-24 md:mt-0 mb-8 md:mb-0 md:mr-8">
            <a href="/services/" class="text-white md:text-green-700 hover:text-green-500">Services</a>
        </li>
        <li class="mb-8 md:mb-0 md:mr-8">
            <a href="/about/" class="text-white md:text-green-700 hover:text-green-500">About Me</a>
        </li>
        <li class="">
            <a href="/contact/" class="text-white md:text-green-700 hover:text-green-500">Contact</a>
        </li>
    </ul>
</nav>

<button class="md:hidden flex z-20 hamburger hamburger--spin" type="button">
    <span class="hamburger-box">
        <span class="hamburger-inner"></span>
    </span>
</button>

@push('scripts')
<script>
    (() => {
        let navMenu = document.querySelector('#js-nav-menu');
        let hamburger = document.querySelector('.hamburger');
        hamburger.addEventListener('click', (event) => {
            hamburger.classList.toggle('is-active');
            navMenu.classList.toggle('hidden');
        });
    })();
</script>
@endpush