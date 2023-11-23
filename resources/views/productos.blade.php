<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    @vite('resources/css/app.css')
    <script src="/js/productos.js"></script>
</head>
<body>
    <div class="flex justify-between px-10 py-1 text-white bg-dark-opaco">
        <div>
            <span>Atención al cliente: (01)619-4801</span>
        </div>
        <div class="font-bold">
            <a class="px-5 text-xs" href="">Agora</a>
            <a class="px-5 text-xs" href="">Financiera oh!</a>
            <a class="px-5 text-xs" href="">Inkafarma</a>
            <a class="px-5 text-xs" href="">Mifarma</a>
            <a class="px-5 text-xs" href="">Plaza vea</a>
            <a class="px-5 text-xs" href="">Promart</a>
            <a class="px-5 text-xs" href="">Real plaza</a>
            <a class="px-5 text-xs" href="">Vivanda</a>
        </div>
    </div>
    <div class="flex flex-col items-center bg-red-500 py-2">
        <div class="flex w-full justify-between items-center">
            <div class="flex px-10">
                <div class="px-5 flex items-center">
                    <a href="">
                        <svg width="86" height="44" viewBox="0 0 86 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M52.4514 17.0595C54.12 12.3427 58.782 8.95149 64.2525 8.95149C69.723 8.95149 74.3849 12.3427 76.0708 17.0595H52.4514ZM21.9164 35.2551C14.6396 35.2551 8.75623 29.3505 8.75623 22.0689C8.75623 14.7872 14.6568 8.88263 21.9164 8.88263C29.1932 8.88263 35.0765 14.7872 35.0765 22.0689C35.0765 29.3505 29.176 35.2551 21.9164 35.2551ZM64.5449 0C53.9996 0 45.2434 7.81534 43.4715 18.0923C41.5964 7.88419 32.6509 0.137715 21.9164 0.137715C9.8056 0.137715 0 9.96713 0 22.0689C0 34.1878 9.8056 44 21.9164 44C32.2553 44 40.9083 36.8388 43.2135 27.1987C45.5358 36.77 53.9824 43.8623 64.0289 43.8623C72.4066 43.8623 80.1995 38.9562 83.7261 31.795H73.6624C71.8733 33.482 69.3617 35.4789 64.2525 35.4789C55.6511 35.4789 52.4686 28.0939 51.488 24.9609H85.9624C86.7194 11.0516 75.916 0 64.5449 0Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <div class="text-white text-xs flex flex-col items-center font-bold cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" id="MenuButton" class="icon icon-tabler icon-tabler-menu-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 6l16 0" />
                        <path d="M4 12l16 0" />
                        <path d="M4 18l16 0" />
                    </svg>
                    <label for="">Menu</label>
                </div>

            </div>
            <div class="flex px-10 w-full relative">
                <input class="w-full pl-6 pr-4 py-2 rounded-2xl outline-none" type="text" name="buscador" placeholder="Que esta buscando hoy?">
                <a href="" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute  right-14  icon icon-tabler icon-tabler-search" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </a>
            </div>
            <div class="flex px-10 text-white  justify-between text-xs font-bold">
                <div class="px-5 w-1/3 ">
                    <button id="btnMostrarLogin" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                        </svg>
                        <label for="">Ingresar</label>
                    </button>
                </div>

                <div class="px-5 w-1/3">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 21l18 0" />
                            <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                            <path d="M5 21l0 -10.15" />
                            <path d="M19 21l0 -10.15" />
                            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        </svg>
                        <label for="">Tiendas</label>
                    </a>
                </div>
                <div class="px-5 w-1/3 flex flex-col items-center">
                    <b class="fixed bg-white rounded-full flex text-black p-1">01</b>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M12.5 17h-6.5v-14h-2" />
                            <path d="M6 5l14 1l-.86 6.017m-2.64 .983h-10.5" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                        </svg>
                    </a>
                    <label for="">Carrito</label>
                </div>
            </div>
        </div>
    </div>


  
   


    <div id="login" class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-md shadow-md w-1/4">
        <form  class=" flex flex-col items-center" action="/login" method="POST">
            @csrf <!-- Agrega el token CSRF -->
            <div class="flex flex-col w-full h-6 font-bold items-end">
                <svg xmlns="http://www.w3.org/2000/svg" id="cerrar-login" class="cursor-pointer icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </div>
            <div class="text-gray-800 text-lg mb-4">Iniciar Sesión</div>
            @if ($errors->any())
                <div class="alert alert-danger  text-red-600">
                    {{ $errors->first('mensaje') }}
                </div>
            @endif
            <div class="mb-4 w-full">
                <label for="correo" class="block text-sm text-gray-800 mb-1">Correo</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded-md py-1 px-3">
            </div>
            <div class="mb-4 w-full">
                <label for="contrasena" class="block text-sm text-gray-800 mb-1">Contraseña</label>
                <input name="password" type="password" class="w-full border border-gray-300 rounded-md py-1 px-3">
            </div>
            <div class="mb-4">
                <a href="#" class="text-blue-600">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="mb-4 w-full">
                <button type="submit" class="w-full bg-blue-600 text-white rounded-md py-2 px-4">Ingresar</button>
            </div>
            <div class="">O inicia sesión con</div>
            <div class="flex w-full justify-around py-5">
                <button>
                    <img class="h-10" src="/img/google.png" alt="logo google">
                </button>
                <button>
                    <img class="h-10" src="/img/facebook.png" alt="logo facebook">
                </button>
            </div>
            <div class="mb-4">
                <a href="#" class="">¿No tienes una cuenta?</a>
            </div>
            <div class="mb-4 w-full">
                <button type="button" id="registrate-button" class="w-full bg-white text-red-600 border border-red-600 rounded-md py-2 px-4">Registrate</button>
            </div>
        </form>
    </div>

    <div id="login-register" class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-md shadow-md w-1/4">
        <form  class=" flex flex-col items-center" action="{{ url('/registro') }}" method="POST">
            @csrf <!-- Agrega el token CSRF -->
            <div class="flex flex-col w-full h-6 font-bold items-end">
                <svg xmlns="http://www.w3.org/2000/svg" id="cerrar-login-register" class="cursor-pointer icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </div>
            <div class="text-gray-800 text-lg mb-4">Crea tu cuenta</div>
            <div class="mb-4 w-full">
                <label for="correo" class="block text-sm text-gray-800 mb-1">Correo</label>
                <input type="email" name="correo" class="w-full border border-gray-300 rounded-md py-1 px-3">
            </div>
            <div class="mb-4 w-full">
                <label for="contrasena" class="block text-sm text-gray-800 mb-1">Contraseña</label>
                <input name="contrasena" type="password" class="w-full border border-gray-300 rounded-md py-1 px-3">
            </div>
            <div class="mb-4 w-full">
                <label for="nombres" class="block text-sm text-gray-800 mb-1">Nombres</label>
                <input name="nombres" type="text" class="w-full border border-gray-300 rounded-md py-1 px-3">
            </div>
            <div class="mb-4 w-full">
                <label for="apellidos" class="block text-sm text-gray-800 mb-1">Apellidos</label>
                <input name="apellidos" type="text" class="w-full border border-gray-300 rounded-md py-1 px-3">
            </div>

            <div class="mb-4 w-full">
                <button type="submit" id="registrate-button" class="w-full bg-red-600 text-white border border-red-600 rounded-md py-2 px-4">Confirmar</button>
            </div>
        </form>
    </div>

    <div id="NavBar" class="hidden fixed top-0 left-0 z-50 w-1/4 h-full bg-white shadow-md">
        <div class="bg-red-500 py-3 flex justify-between px-3 fixed w-1/4">
            <svg width="86" height="44" viewBox="0 0 86 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M52.4514 17.0595C54.12 12.3427 58.782 8.95149 64.2525 8.95149C69.723 8.95149 74.3849 12.3427 76.0708 17.0595H52.4514ZM21.9164 35.2551C14.6396 35.2551 8.75623 29.3505 8.75623 22.0689C8.75623 14.7872 14.6568 8.88263 21.9164 8.88263C29.1932 8.88263 35.0765 14.7872 35.0765 22.0689C35.0765 29.3505 29.176 35.2551 21.9164 35.2551ZM64.5449 0C53.9996 0 45.2434 7.81534 43.4715 18.0923C41.5964 7.88419 32.6509 0.137715 21.9164 0.137715C9.8056 0.137715 0 9.96713 0 22.0689C0 34.1878 9.8056 44 21.9164 44C32.2553 44 40.9083 36.8388 43.2135 27.1987C45.5358 36.77 53.9824 43.8623 64.0289 43.8623C72.4066 43.8623 80.1995 38.9562 83.7261 31.795H73.6624C71.8733 33.482 69.3617 35.4789 64.2525 35.4789C55.6511 35.4789 52.4686 28.0939 51.488 24.9609H85.9624C86.7194 11.0516 75.916 0 64.5449 0Z" fill="white"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" id="cerrar-navBar" class="cursor-pointer icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        </div>
        <div class="h-5/6 overflow-y-auto mt-20">
            <h1 class="font-bold text-2xl text-gray-700 pl-3">Categorias</h1>
            <div class=" flex flex-col items-center pt-5">
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Navidad</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Tecnologia</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Electro Hogar</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Moda Mujer</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Moda Hombre</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Moda Infantil</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Calzado</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Belleza</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for=""> Accesorios</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for=""> Dormitorio</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Muebles</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Decohogar</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Deportes</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Jugueteria y bebes</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for=""> Mascotas</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
            </div>
            <div class="border border-t-gray-600">
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Mis pedidos</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Nuestras Tiendas</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
                <a href="" class="w-full flex justify-between py-1  hover:text-black hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
                    <label for="">Cambios y devoluciones</label>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Productos de la categoría: {{ $categoria->nombre }}</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach($productos as $producto)
                <a href="#" class="relative bg-white p-4 rounded-md border border-black overflow-hidden transition-transform transform hover:scale-105">
                    <p class="text-lg font-bold">Nombre: <span class="text-gray-700">{{ $producto->nombre }}</span></p>
                    <p class="text-base">Descripción: <span class="text-gray-700">{{ $producto->descripcion }}</span></p>
                    <p class="text-base">Precio: <span class="text-green-600 font-bold">${{ $producto->precio }}</span></p>
                    <div class="absolute inset-0  opacity-0 hover:opacity-100 transition-opacity"></div>
                </a>
            @endforeach
        </div>
    </div>

</body>
</html>

