<header class="h-screen">
    <div class="top-bar bg-[#fec740] text-[#264653]">
        <div class="container mx-auto flex justify-between items-center py-3">
            <div>
                <i class="fa-solid fa-clock"></i>
                Lun - Vie: <span class="font-semibold">9:00am - 9:00pm</span>
                <i class="fa-solid fa-phone ml-4"></i>
                Llámanos: <span class="font-semibold">(604)4521-4532</span>
            </div>
            <div>idioma</div>
        </div>
    </div>
    <div class="navbar container mx-auto flex justify-between items-center py-3">
        <div>
            <a href="#"><img class="max-w-[150px]" src="{{asset('storage/images/logo-livis.png')}}" alt=""></a>
        </div>
        <nav>
            <ul class="pt-sans-regular flex justify-center items-center tracking-wider">
                <li class="mr-6"><a href="#">Inicio</a></li>
                <li class="mr-6"><a class="text-[#545454]" href="#">Nosotros</a></li>
                <li class="mr-6"><a class="text-[#545454]" href="#">Productos</a></li>
                <li><a class="text-white bg-[#7db03c] rounded-3xl px-8 py-5" href="#">Contacto</a></li>
            </ul>
        </nav>
    </div>
    <div class="hero bg-white">
        <div class="container mx-auto flex justify-between items-center">
            <div class="max-w-[50%] px-10">
                <h2 class="viga text-5xl text-[#05172c] mb-3">Lacteos Centroamericanos Totalmente Naturales</h2>
                <p class="text-[#264653] text-lg">Vestibulum ornare purus sapien, eu tempus turpis pellentesque vitae.
                    In hac habitasse platea
                    dictumst. Nunc sapien lectus, aliquam a semper ege</p>
            </div>
            <img class="max-w-[50%]" src="{{asset('storage/images/productos.png')}}" alt="">
        </div>
    </div>
</header>
@include('partials.hero')
