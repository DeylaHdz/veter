<nav class="p-5 bg-emer_bluedark shadow md:flex md:items-center md:justify-between relative">

    <div class="flex justify-between items-center z-20">

        <span class="font-montserrat">
            <a href="/veter">
                <img class="h-20 mr-2 opacity-80 hover:opacity-100 ease-in duration-300" src="assets/img/emerpet.png" alt="Logo Vet-Er" />
            </a>
        </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block" onClick="Menu(this)">
            <svg class="w-6 h-6" aria-hidden="true" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </span>

    </div>

    <ul class="md:flex md:items-center md:static absolute  w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 hidden top-[100px] transition-all ease-in duration-500 font-montserrat font-bold text-[#FFF]">

        <a href="https://www.facebook.com/profile.php?id=100086996102277" target="_blank" class="mr-5"><i class="fa fa-facebook-square text-xl hover:text-p_blue duration-500"></i></a>
        
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-p_blue duration-500">Citas</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-p_blue duration-500">Servicios</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-p_blue duration-500">Productos</a>
        </li>

        <a href="/veter/login" class="bg-emer_green text-center text-[#FFF] font-montserrat font-bold duration-500 px-6 py-2 mx-4 hover:bg-emer_greendark hover:text-[#FFF] rounded-full text-xl">INICIAR SESIÓN</a>
    </ul>
</nav>

<script>
    function Menu(e){
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close",list.classList.add('top-[100px]') , list.classList.add('hidden')) :( e.name = "menu" ,list.classList.remove('top-[100px]'),list.classList.remove('hidden'))
    }
</script>