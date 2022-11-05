@extends("layout.site")

<header class="header">
    <div class="absolute top-0 py-5 left-0 z-50 bg-blue-900 w-full text-white">
        <div class="container mx-auto justify-center flex">
            <div class="flex flex-row place-items-center text-blue-700-100">
                <ul id="nav" class="flex flex-row gap-8 underline">
                    <li class="nav-item">
                        <a class="page-scroll active" href="#section1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="page-scroll" href="#section2">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="page-scroll" href="#section3">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="page-scroll" href="#section4">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
@section('content')
<div class="py-96">
<a>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur blanditiis culpa cupiditate deleniti eius ex fugiat nesciunt pariatur ullam? A dolores error iste, libero minima nulla odit perspiciatis. Commodi, excepturi.</a>
</div>
<div class="py-96">
<a>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur blanditiis culpa cupiditate deleniti eius ex fugiat nesciunt pariatur ullam? A dolores error iste, libero minima nulla odit perspiciatis. Commodi, excepturi.</a>
</div>
@endsection

<script>
    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        const header_navbar = document.querySelector(".navbar-area");
        const sticky = header_navbar.offsetTop;
        const logo = document.querySelector(".navbar-brand img");

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }
    };
    // for menu scroll
    const pageLink = document.querySelectorAll(".page-scroll");

    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });
    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".page-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document.querySelector(".page-scroll").classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }
</script>
