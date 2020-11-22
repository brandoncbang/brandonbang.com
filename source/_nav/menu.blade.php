<nav id="js-nav-menu"
    class="fixed top-0 bottom-0 left-0 right-0 z-10 hidden bg-gray-900 md:block md:relative md:bg-transparent">
    <ul class="flex flex-col items-center h-full m-0 text-2xl list-none md:flex-row md:justify-end md:text-xl">
        <li class="mt-24 mb-12 md:mt-0 md:mb-0 md:mr-4">
            <a href="/services/" class="px-4 py-2 font-medium text-gray-300 transition-colors duration-300 ease-in-out hover:text-white">Services</a>
        </li>
        <li class="mb-12 md:mb-0 md:mr-4">
            <a href="/about/" class="px-4 py-2 font-medium text-gray-300 transition-colors duration-300 ease-in-out hover:text-white">About Me</a>
        </li>
        <li class="">
            <a href="/contact/" class="px-4 py-2 font-medium text-gray-300 transition-colors duration-300 ease-in-out hover:text-white">Contact</a>
        </li>
    </ul>
</nav>

<button class="z-20 flex transition-colors duration-300 ease-in-out rounded md:hidden hover:bg-gray-400 hamburger hamburger--spin" type="button">
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
            hamburger.classList.toggle('mx-4');
            hamburger.classList.toggle('my-4');
            navMenu.classList.toggle('hidden');
        });
    })();
</script>
@endpush