<header class="text-center pointer-events-none w-screen object-cover fixed bg-transparent z-50">
    <div class="container pointer-events-auto">
        <input type="checkbox" name="" id="menuBtn">
        <div class="menu_overlay">
            <label for="menuBtn">
                <i class="fas fa-times"></i>
            </label>
            <ul>
                <li><a href="#">Coach-E & de [PDF] weg</a></li>
                <li><a href="#">Particulier</a></li>
                <li><a href="#">Zakelijk</a></li>
                <li><a href="#">Inspiratie</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Foto's</a></li>
            </ul>
        </div>

    </div>
    <div class="flex flex-row justify-between">
        <a href="#">
            <div class="px-12  py-16 ml-24 bg-gray-900/20 ">
                <img class="h-20 " src="{{ Vite::asset('resources/media/logo.png') }}" alt="">
            </div>
        </a>

        <div class="p-5 flex flex-row gap-8 mt-6 mr-14 pointer-events-auto ">
            <a class="text-white hover:text-gray-200" href="/">Home</a>
            <label for="menuBtn">
                <i class="text-white hover:text-gray-200">More</i>
            </label>
        </div>
    </div>
    <div class="grid grid-rows-2 grid-flow-col gap-4 justify-end pr-8 fixed top-2/4 left-full -translate-x-1/2 -translate-y-1/2 ">
        <div class="pointer-events-auto">
            <a href="">
                <i class="fa-xl row-span-1 fa-brands  fa-instagram text-white hover:text-pink-400"></i>
            </a>
        </div>
        <div class="pointer-events-auto">
            <a href="">
                <i class="fa-xl row-span-1 fa-brands fa-linkedin text-white hover:text-blue-600"></i>
            </a>
        </div>

    </div>


</header>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
    }


    .menu_overlay {
        width: 100vw;
        height: 100vh;
        position: absolute;
        overflow: hidden;
        color: #fff;
        background: #94c78e;
        background: -webkit-linear-gradient(to right, #244f13, #94c78e);
        background: linear-gradient(to right, #244f13, #94c78e);
        z-index: 100;
        transform: translateX(110%);
        transition: transform 0.5s ease;
    }

    .menu_overlay .fas {

        position: absolute;
        right: 85px;
        top: 40px;
        font-size: 2.5rem;
        transition: all 0.3s ease;
    }
    .menu_overlay .fas:hover {
        color: #244f13;
        transform: scale(1.1) rotate(180deg);
    }

    .menu_overlay ul {
        height: 100%;
        width: 100%;
        list-style: none;
        padding: 20px;
        margin-left: 50px;
        font-size: 4rem;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    .menu_overlay a {
        color: #fff;
        text-decoration: none;
    }

    .menu_overlay a:hover {
        color: #000000;
    }

    #menuBtn {
        display: none;

    }

    #menuBtn:checked ~ .menu_overlay {
        transform: translateX(0);
    }


    .fas {
        font-size: 2rem;
        color: #222;
    }

    .fas:hover {
        color: #4b134f;
    }



    @media screen and (max-width: 650px) {
        .list a {
            font-size: 2rem;
        }
    }

</style>

