<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Administracion</title>
</head>
<body>
    <div id="NavBar" class=" fixed top-0 left-0 z-50 w-1/4 h-full bg-blue-950 shadow-md">
        <div class="bg-gray-600 py-3 flex justify-between px-3 fixed w-1/4">
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
            <h1 class="font-bold text-2xl text-white pl-3">Categorias</h1>
            <div class=" flex flex-col items-center pt-5">
                <a href="" class="w-full flex justify-between py-1  hover:text-white hover:text-lg hover:font-semibold hover:bg-red-300 rounded-md pl-3">
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

</body>
</html>
