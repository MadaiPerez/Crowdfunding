<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaña</title>
    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- cdn de tailwing y daisyui -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />


</head>

<body class="bg-white">
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
                            <a class="justify-between" href="perfilAjuste.php">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a href="perfilAjuste.php">Settings</a></li>
                        <li id="logOut"><a>Logout</a></li>
                    </ul>
                </div>
                <button id="botonav" class="lg:hidden">
                    <i class="fa-solid fa-bars fa-2xl"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- vista de proyecto -->


    <div class="mx-[20%] max-lg:mx-0   ">

        <div
            class="flex w-fit max-lg:flex-col max-lg:w-screen bg-[#CFD8D7] gap-8 py-16 max-lg:px-0 rounded-box my-8 px-[5%]">

            <!-- proyecto -->

            <div class="flex flex-col space-y-8 max-lg:p-4 max-lg:order-2">
                <div>
                    <!-- imagen del proyecto -->
                    <div>
                        <img src="img/hero.jpg" alt="">
                    </div>

                    <!-- titulo del proyecto -->

                    <div>
                        <h1>Titulo</h1>
                    </div>


                    <!-- descripcion de proyecto -->

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore id maxime quam placeat fuga
                            excepturi
                            earum aspernatur illum eum in a animi omnis alias quod quidem non, natus ipsa soluta.</p>
                    </div>


                    <!-- video del proyecto -->

                    <div>
                        <img src="img/hero.jpg" alt="">
                    </div>

                </div>


                <!-- perfil del creador -->
                <div class="flex gap-8">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                        <h4>carlos</h4>
                    </div>
                    <div>
                        <div class="flex flex-col gap-4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis vitae sapiente
                                explicabo</p>
                            <button class="justify-center btn">Chatear/Contactar</button>
                        </div>
                    </div>
                </div>


                <!-- secion de comentario o comunidad  -->

                <hr>

                <div class="flex flex-col gap-8">
                    <!-- mensaje -->
                    <div class="flex gap-8">
                        <div tabindex="0" role="button" class="space-y-2 btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component"
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                            <h4>juana</h4>
                        </div>
                        <div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis repudiandae quo
                                debitis, tempora beatae laborum aliquam? Illo, dolorem! At voluptatum delectus debitis a
                                in commodi blanditiis odit minima fuga recusandae.</p>
                        </div>
                    </div>

                    <!-- mensaje -->

                    <div class="flex gap-8">
                        <div tabindex="0" role="button" class="space-y-2 btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component"
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                            <h4>juana</h4>
                        </div>
                        <div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis repudiandae quo
                                debitis, tempora beatae laborum aliquam? Illo, dolorem! At voluptatum delectus debitis a
                                in commodi blanditiis odit minima fuga recusandae.</p>
                        </div>
                    </div>

                    <!-- mensaje -->

                    <div class="flex gap-8">
                        <div tabindex="0" role="button" class="space-y-2 btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component"
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                            <h4>juana</h4>
                        </div>
                        <div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis repudiandae quo
                                debitis, tempora beatae laborum aliquam? Illo, dolorem! At voluptatum delectus debitis a
                                in commodi blanditiis odit minima fuga recusandae.</p>
                        </div>
                    </div>

                </div>







            </div>






            <!-- secion de donativos -->



            <div class="mx-auto max-lg:order-1 max-md:w-screen">

                <div class="pt-1 max-lg:p-0 text-white bg-[#206A5D] rounded-box">
                    <div class="flex flex-col items-center m-8">
                        <button class="bg-[#CFD8D7] btn text-[#206A5D]">
                            DONAR
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <div class="space-y-2">
                            <p>$___,_: USD</p>
                            <h6 class="text-sm">Recaudados De El Objetivo</h6>
                            <p>$1000,00 USD</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4>Compartir</h4>
                        <ul class="flex justify-around gap-4 ">
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href=""><i class="fa-solid fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm text-center"><i class="fa-solid fa-arrow-trend-up"></i> 100 personas an
                            apoyado esta
                            campaña</h4>
                    </div>
                    <div class="flex items-center justify-center gap-2">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component"
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h4>Jane Doe</h4>
                            <h4>$100 USD</h4>
                        </div>
                    </div>


                </div>

            </div>

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