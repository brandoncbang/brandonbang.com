<nav id="js-nav-menu" class="hidden fixed md:block md:relative z-10 top-0 bottom-0 left-0 right-0 bg-gray-100 border-t-4 md:border-t-0 border-blue-500 md:bg-transparent">
    <ul class="flex flex-col md:flex-row items-center md:justify-end h-full m-0 list-none text-2xl md:text-xl">
        <li class="mt-24 md:mt-0 mb-8 md:mb-0 md:mr-8">
            <a href="/services/" class="text-gray-800 hover:text-gray-700">Services</a>
        </li>
        <li class="mb-8 md:mb-0 md:mr-8">
            <a href="/about/" class="text-gray-800 hover:text-gray-700">About Me</a>
        </li>
        <li class="">
            <a href="/contact/" class="text-gray-800 hover:text-gray-700">Contact</a>
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
            hamburger.classList.toggle('fixed');
            hamburger.classList.toggle('right-0');
            hamburger.classList.toggle('top-0');
            hamburger.classList.toggle('mx-5');
            hamburger.classList.toggle('my-4');
            navMenu.classList.toggle('hidden');
        });
    })();
</script>
@endpush