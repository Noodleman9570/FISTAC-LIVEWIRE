<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="titulo">
      Denom timbres
    </x-slot>

    <x-slot name="page">
      Denominacion de timbres
    </x-slot>
    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                
                <livewire:denom-timbres-table /> 
                
              </div>
          </div>
      </div>
  </div>
    <div fixed-plugin>
        <a fixed-plugin-button class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-slate-700">
          <i class="py-2 pointer-events-none fa fa-cog"> </i>
        </a>
        <!-- -right-90 in loc de 0-->
        <div fixed-plugin-card class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 duration-200">
          <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
            <div class="float-left">
              <h5 class="mt-4 mb-0 dark:text-white">Argon Configurator</h5>
              <p class="dark:text-white dark:opacity-80">See our dashboard options.</p>
            </div>
            <div class="float-right mt-6">
              <button fixed-plugin-close-button class="inline-block p-0 mb-4 text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:-translate-y-px tracking-tight-rem bg-150 bg-x-25 active:opacity-85 dark:text-white text-slate-700">
                <i class="fa fa-close"></i>
              </button>
            </div>
            <!-- End Toggle Button -->
          </div>
          <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
          <div class="flex-auto p-6 pt-0 overflow-auto sm:pt-4">
            <!-- Sidebar Backgrounds -->
            <div>
              <h6 class="mb-0 dark:text-white">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)">
            <div class="my-2 text-left" sidenav-colors>
                <span class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-500 to-violet-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" active-color data-color="blue" onclick="sidebarColor(this)"></span>
                <span class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="gray" onclick="sidebarColor(this)"></span>
                <span class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-700 to-cyan-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="cyan" onclick="sidebarColor(this)"></span>
                <span class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-emerald-500 to-teal-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="emerald" onclick="sidebarColor(this)"></span>
                <span class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-orange-500 to-yellow-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="orange" onclick="sidebarColor(this)"></span>
                <span class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-red-600 to-orange-600 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="red" onclick="sidebarColor(this)"></span>
              </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-4">
              <h6 class="mb-0 dark:text-white">Sidenav Type</h6>
              <p class="text-sm leading-normal dark:text-white dark:opacity-80">Choose between 2 different sidenav types.</p>
            </div>
            <div class="flex">
              <button transparent-style-btn class="inline-block w-full px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500" data-class="bg-transparent" active-style>White</button>
              <button white-style-btn class="inline-block w-full px-4 py-2.5 mb-2 ml-2 font-bold leading-normal text-center text-blue-500 capitalize align-middle transition-all bg-transparent border border-blue-500 border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-none hover:border-blue-500" data-class="bg-white">Dark</button>
            </div>
            <p class="block mt-2 text-sm leading-normal dark:text-white dark:opacity-80 xl:hidden">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="flex my-4">
              <h6 class="mb-0 dark:text-white">Navbar Fixed</h6>
              <div class="block pl-0 ml-auto min-h-6">
                <input navbarFixed class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" />
              </div>
            </div>
            <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
            <div class="flex mt-2 mb-12">
              <h6 class="mb-0 dark:text-white">Light / Dark</h6>
              <div class="block pl-0 ml-auto min-h-6">
                <input dark-toggle class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" />
              </div>
            </div>
            <a target="_blank" class="dark:border dark:border-solid dark:border-white inline-block w-full px-6 py-2.5 mb-4 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent border border-solid border-transparent rounded-lg cursor-pointer text-sm ease-in hover:shadow-xs hover:-translate-y-px active:opacity-85 tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850" href="https://www.creative-tim.com/product/argon-dashboard-tailwind" >Free Download</a>
            <a target="_blank" class="dark:border dark:border-solid dark:border-white dark:text-white inline-block w-full px-6 py-2.5 mb-4 font-bold leading-normal text-center align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-xs hover:-translate-y-px active:opacity-85 text-sm ease-in tracking-tight-rem bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none" href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/">View documentation</a>
            <div class="w-full text-center">
              <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard-tailwind" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
              <h6 class="mt-4 dark:text-white">Thank you for sharing!</h6>
              <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-tailwind" class="inline-block px-5 py-2.5 mb-0 mr-2 font-bold text-center text-white align-middle transition-all border-0  rounded-lg cursor-pointer hover:shadow-xs hover:-translate-y-px active:opacity-85 leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-twitter"></i> Tweet </a>
              <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-tailwind" class="inline-block px-5 py-2.5 mb-0 mr-2 font-bold text-center text-white align-middle transition-all border-0  rounded-lg cursor-pointer hover:shadow-xs hover:-translate-y-px active:opacity-85 leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-facebook-square"></i> Share </a>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>

{{-- <script>
    var pageName = window.location.pathname.split("/").pop().split(".")[0];

    var fixedPlugin = document.querySelector("[fixed-plugin]");
    var fixedPluginButton = document.querySelector("[fixed-plugin-button]");
    var fixedPluginButtonNav = document.querySelector("[fixed-plugin-button-nav]");
    var fixedPluginCard = document.querySelector("[fixed-plugin-card]");
    var fixedPluginCloseButton = document.querySelector("[fixed-plugin-close-button]");

    var navbar = document.querySelector("[navbar-main]");

    var buttonNavbarFixed = document.querySelector("[navbarFixed]");

    var sidenav = document.querySelector("aside");
    var sidenav_icons = sidenav.querySelectorAll("li a div");

    var sidenav_target = "../pages/" + pageName + ".blade.php";

    var whiteBtn = document.querySelector("[transparent-style-btn]");
    var darkBtn = document.querySelector("[white-style-btn]");

    var non_active_style = ["bg-none", "bg-transparent", "text-blue-500", "border-blue-500"];
    var active_style = ["bg-gradient-to-tl", "from-blue-500", "to-violet-500", "bg-blue-500", "text-white", "border-transparent"];

    var white_sidenav_classes = ["bg-white", "shadow-xl"];
    // var white_sidenav_highlighted = ["shadow-xl"];
    // var white_sidenav_icons = ["bg-white"];

    var black_sidenav_classes = ["bg-slate-850", "shadow-none"];
    // var black_sidenav_highlighted = ["shadow-none"];
    // var black_sidenav_icons = ["bg-gray-200"];

    var sidenav_highlight = document.querySelector("a[href=" + CSS.escape(sidenav_target) + "]");

    // fixed plugin toggle
    if (pageName != "rtl") {
    fixedPluginButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });

    fixedPluginButtonNav.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });

    fixedPluginCloseButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });

    window.addEventListener("click", function (e) {
        if (!fixedPlugin.contains(e.target) && !fixedPluginButton.contains(e.target) && !fixedPluginButtonNav.contains(e.target)) {
        if (fixedPluginCard.classList.contains("right-0")) {
            fixedPluginCloseButton.click();
        }
        }
    });
    } else {
    fixedPluginButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });

    fixedPluginButtonNav.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });

    fixedPluginCloseButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });

    window.addEventListener("click", function (e) {
        if (!fixedPlugin.contains(e.target) && !fixedPluginButton.contains(e.target) && !fixedPluginButtonNav.contains(e.target)) {
        if (fixedPluginCard.classList.contains("left-0")) {
            fixedPluginCloseButton.click();
        }
        }
    });
    }

    // color sidenav

    function sidebarColor(a) {
    var color = a.getAttribute("data-color");
    var parent = a.parentElement.children;
    var activeColor;

    var activeSidenavIconColorClass;

    var checkedSidenavIconColor = "bg-" + color + "-500/30";

    var sidenavIcon = document.querySelector("a[href=" + CSS.escape(sidenav_target) + "]");

    for (var i = 0; i < parent.length; i++) {
        if (parent[i].hasAttribute("active-color")) {
        activeColor = parent[i].getAttribute("data-color");

        parent[i].classList.toggle("border-white");
        parent[i].classList.toggle("border-slate-700");

        activeSidenavIconColorClass = "bg-" + activeColor + "-500/30";
        }
        parent[i].removeAttribute("active-color");
    }

    var att = document.createAttribute("active-color");

    a.setAttributeNode(att);
    a.classList.toggle("border-white");
    a.classList.toggle("border-slate-700");

    //   remove active style

    sidenavIcon.classList.remove(activeSidenavIconColorClass);

    //   add new style

    sidenavIcon.classList.add(checkedSidenavIconColor);
    }

    // sidenav style

    whiteBtn.addEventListener("click", function () {
    const active_style_attr = document.createAttribute("active-style");
    if (!this.hasAttribute(active_style_attr)) {
        // change trigger buttons style

        this.setAttributeNode(active_style_attr);

        non_active_style.forEach((style_class) => {
        this.classList.remove(style_class);
        });

        active_style.forEach((style_class) => {
        this.classList.add(style_class);
        });

        darkBtn.removeAttribute(active_style_attr);

        active_style.forEach((style_class) => {
        darkBtn.classList.remove(style_class);
        });

        non_active_style.forEach((style_class) => {
        darkBtn.classList.add(style_class);
        });

        // change actual styles

        black_sidenav_classes.forEach((style_class) => {
        sidenav.classList.remove(style_class);
        });
        white_sidenav_classes.forEach((style_class) => {
        sidenav.classList.add(style_class);
        });
        sidenav.classList.remove("dark");
    }
    });

    darkBtn.addEventListener("click", function () {
    const active_style_attr = document.createAttribute("active-style");
    if (!this.hasAttribute(active_style_attr)) {
        this.setAttributeNode(active_style_attr);
        non_active_style.forEach((style_class) => {
        this.classList.remove(style_class);
        });
        active_style.forEach((style_class) => {
        this.classList.add(style_class);
        });

        whiteBtn.removeAttribute(active_style_attr);
        active_style.forEach((style_class) => {
        whiteBtn.classList.remove(style_class);
        });
        non_active_style.forEach((style_class) => {
        whiteBtn.classList.add(style_class);
        });

        // change actual styles

        white_sidenav_classes.forEach((style_class) => {
        sidenav.classList.remove(style_class);
        });
        black_sidenav_classes.forEach((style_class) => {
        sidenav.classList.add(style_class);
        });
        sidenav.classList.add("dark");
    }
    });

    // navbar fixed plugin

    if (navbar) {
    if (navbar.getAttribute("navbar-scroll") == "true") {
        buttonNavbarFixed.setAttribute("checked", "true");
    }
    const white_elements = navbar.querySelectorAll(".text-white");
    const white_bg_elements = navbar.querySelectorAll("[sidenav-trigger] i.bg-white");
    const white_before_elements = navbar.querySelectorAll(".before\\:text-white");
    buttonNavbarFixed.addEventListener("change", function () {

        if (this.checked) {
        white_elements.forEach(element => {
            element.classList.remove("text-white")
            element.classList.add("dark:text-white")
        });
        white_bg_elements.forEach(element => {
            element.classList.remove("bg-white")
            element.classList.add("dark:bg-white")
            element.classList.add("bg-slate-500")
        });
        white_before_elements.forEach(element => {
            element.classList.add("dark:before:text-white")
            element.classList.remove("before:text-white")
        });
        navbar.setAttribute("navbar-scroll", "true");
        navbar.classList.add("sticky");
        navbar.classList.add("top-[1%]");
        navbar.classList.add("backdrop-saturate-200");
        navbar.classList.add("backdrop-blur-2xl");
        navbar.classList.add("dark:bg-slate-850/80");
        navbar.classList.add("dark:shadow-dark-blur");
        navbar.classList.add("bg-[hsla(0,0%,100%,0.8)]");
        navbar.classList.add("shadow-blur");
        navbar.classList.add("z-110");
        } else {
        navbar.setAttribute("navbar-scroll", "false");
        navbar.classList.remove("sticky");
        navbar.classList.remove("top-[1%]");
        navbar.classList.remove("backdrop-saturate-200");
        navbar.classList.remove("backdrop-blur-2xl");
        navbar.classList.remove("dark:bg-slate-850/80");
        navbar.classList.remove("dark:shadow-dark-blur");
        navbar.classList.remove("bg-[hsla(0,0%,100%,0.8)]");
        navbar.classList.remove("shadow-blur");
        navbar.classList.remove("z-110");
        white_elements.forEach(element => {
            element.classList.add("text-white")
            element.classList.remove("dark:text-white")
        });
        white_bg_elements.forEach(element => {
            element.classList.add("bg-white")
            element.classList.remove("dark:bg-white")
            element.classList.remove("bg-slate-500")
        });
        white_before_elements.forEach(element => {
            element.classList.remove("dark:before:text-white")
            element.classList.add("before:text-white")
        });
        }
    });
    } else {
    // buttonNavbarFixed.setAttribute("checked", "true");
    buttonNavbarFixed.setAttribute("disabled", "true");
    }

    var dark_mode_toggle = document.querySelector("[dark-toggle]");
    var root_html = document.querySelector("html");

    dark_mode_toggle.addEventListener("change", function () {
    dark_mode_toggle.setAttribute("manual", "true");
    if (this.checked) {
        root_html.classList.add("dark");
    } else {
        root_html.classList.remove("dark");
    }
    });
</script> --}}
