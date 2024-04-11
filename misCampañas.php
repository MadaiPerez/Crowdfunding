<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Campañas</title>


    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- cdn de tailwing y daisyui -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />


</head>

<body class="bg-white ">





    <!-- navbar -->
    <header>
        <nav class="w-[90%] max-lg:w-screen mx-auto flex justify-between max-lg:flex-wrap items-center ">

            <!-- logo -->

            <div class="p-1 max-lg:order-1">
                <a class="w-16 max-lg:m-4" href="index.php"><img src="img/logonav.jpeg" alt=""></a>
            </div>

            <!-- link de referencia  -->

            <div id="menunav" class="flex items-center w-full px-5 mx-auto h-fit max-lg:hidden max-lg:order-3 ">
                <ul class="flex items-center max-lg:flex-col gap-[4vw] mx-auto ">
                    <li>
                        <a href="buscar_campañas.php" class=" hover:text-gray-500 text-[#206A5D] ">Buscar Campañas</a>
                    </li>
                    <li>
                        <a href="sobreNosotos.php" class=" hover:text-gray-500 text-[#206A5D] ">Sobre nosotros</a></a>
                    </li>
                    <li>
                        <a href="misCampañas.php" class=" hover:text-gray-500 text-[#206A5D] ">Mis Campañas</a>
                    </li>
                    <li>
                        <a href="IniciarCampañas.php" class=" hover:text-gray-500 text-[#206A5D] ">iniciar Campaña</a>
                    </li>
                </ul>
            </div>

            <!-- botone de iniciar secion user y menu en dispositivos moviles -->
            <div class="flex items-center gap-4 px-3 max-lg:order-2">


                <button id="userA"
                    class="bg-gradient-to-r from-[#A2D988]/50 to-[#66994E]/10 rounded-full h-11 w-28 text-[#206A5D]">
                    iniciar Sesion
                </button>

                <!-- user -->
                <div id="userB" class="hidden dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between" href="PerfilAjuste.html">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a href="PerfilAjuste.html">Settings</a></li>
                        <li id="logOut"><a>Logout</a></li>
                    </ul>
                </div>
                <button id="botonav" class="lg:hidden">
                    <i class="fa-solid fa-bars fa-2xl"></i>
                </button>
            </div>
        </nav>
    </header>







    <!-- botones de panel, mensjajes y tranferencias -->

    <div class="w-full bg-white my-11">
        <div class="flex items-center justify-center gap-36 max-lg:flex max-lg:flex-col max-lg:gap-8">
            <button class="btn btn-active bg-[#CFD8D7] text-black hover:bg-white"><i
                    class="fa-solid fa-house"></i>Panel</button>
            <button class="btn btn-active bg-[#CFD8D7] text-black hover:bg-white"><i
                    class="fa-solid fa-building-columns"></i>Tranferencias</button>
            <button class="btn btn-active bg-[#CFD8D7] text-black hover:bg-white"><i
                    class="fa-solid fa-message"></i>Mensajes</button>
        </div>
    </div>


    <!-- dasboard de proyectos -->

    <div class="flex">
        <div class="flex flex-col items-center order-2 w-full gap-8 mt-16 bg-blue">


            <!-- primer proyecto -->

            <div class="">

                <div>
                    <button class="btn btn-sm btn-active bg-[#CFD8D7] text-black hover:bg-white"><a href="campaña.php">Ver</a></button>
                    <button class="btn btn-sm btn-active bg-[#CFD8D7] text-black hover:bg-white">Compartir
                        Recaudacion</button>
                </div>


                <h1 class="capitalize my-6  font-medium text-[#206A5D]">
                    proyectos
                </h1>

                <progress class="w-56 my-4 progress progress-success" value="70" max="100"></progress>

                <div>
                    <button class="text-xs btn btn-xs">Editar</button>
                    <button class="text-xs btn btn-xs ">Compartir Enlace</button>
                </div>
            </div>


            <!-- segundo proyecto -->

            <div class="">
            <div>
                    <button class="btn btn-sm btn-active bg-[#CFD8D7] text-black hover:bg-white"><a href="campaña.php">Ver</a></button>
                    <button class="btn btn-sm btn-active bg-[#CFD8D7] text-black hover:bg-white">Compartir
                        Recaudacion</button>
                </div>


                <h1 class="capitalize my-6  font-medium text-[#206A5D]">
                    proyectos
                </h1>

                <progress class="w-56 my-4 progress progress-success" value="70" max="100"></progress>

                <div>
                    <button class="text-xs btn btn-xs">Editar</button>
                    <button class="text-xs btn btn-xs ">Compartir Enlace</button>
                </div>
            </div>


            <div class="">

            <div>
                    <button class="btn btn-sm btn-active bg-[#CFD8D7] text-black hover:bg-white"><a href="campaña.php">Ver</a></button>
                    <button class="btn btn-sm btn-active bg-[#CFD8D7] text-black hover:bg-white">Compartir
                        Recaudacion</button>
                </div>

                <h1 class="capitalize my-6  font-medium text-[#206A5D]">
                    proyectos
                </h1>

                <progress class="w-56 my-4 progress progress-success" value="70" max="100"></progress>

                <div>
                    <button class="text-xs btn btn-xs">Editar</button>
                    <button class="text-xs btn btn-xs ">Compartir Enlace</button>
                </div>
            </div>

        </div>
        <div class="order-1 bg-blue max-lg:hidden">
            <img class="" src="img/enredadera.png" alt="">
        </div>
        <div class="order-3 bg-blue max-lg:hidden">
            <img src="img/enredadera2.png" alt="">
        </div>
    </div>





    <!-- footer -->


    <footer class="p-10 footer space-x-auto max-lg:justify-items-center">
        <aside>
            <img src="img/foteer.png" alt="">
            <p class="text-[#206A5D]">StarSeed.<br> 2024</p>
        </aside>
        <nav class="flex flex-col ">
            <h6 class="footer-title text-[#81B214]">Recaudacion de Fondos</h6>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Tecnologia</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Salud</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Emergencia</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Animales</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Educacion</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Animales</a>
        </nav>
        <nav class="flex flex-col ">
            <h6 class="footer-title text-[#81B214]">Mas Informacion</h6>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Como Funciona</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Porque Nosotros</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Pregustas Frecuentes</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Soporte Tecnico</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Contactanos</a>
        </nav>
        <nav class="flex flex-col ">
            <h6 class="footer-title self-center text-[#81B214]">Legal</h6>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Terminos de uso</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Privacy policy</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Cookie policy</a>
        </nav>
    </footer>




    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/menu.js"></script>
</body>

</html>