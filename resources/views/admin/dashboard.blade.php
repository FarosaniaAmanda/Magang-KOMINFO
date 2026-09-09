<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-100">


<div class="min-h-screen flex">


    <!-- SIDEBAR -->

    <aside class="w-64 bg-[#005C3B] text-white
                  fixed left-0 top-0 bottom-0">

        <div class="p-6">

            <h1 class="text-xl font-bold">
                E-Government
            </h1>

            <p class="text-x1 text-sm mt-1">
                Admin Panel
            </p>

        </div>


        <nav class="px-4 space-y-2">


            <a href="{{ route('admin.dashboard') }}"
               class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">

                Dashboard

            </a>


            <a href="{{ route('admin.informasi.index') }}"
              class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">   

               Berita
            </a>


            <a href="#"
               class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">

                Kegiatan

            </a>


            <a href="{{ route('admin.agenda.index') }}"
                class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">    
            Agenda
            </a>


        </nav>


        <div class="absolute bottom-6 left-4 right-4">

            <form method="POST"
                  action="{{ route('admin.logout') }}">

                @csrf

                <button
                    type="submit"
                    class="w-full text-left px-4 py-3
                           rounded-lg hover:bg-red-600">

                    Logout

                </button>

            </form>

        </div>

    </aside>



    <!-- MAIN -->

    <main class="ml-64 flex-1">


        <!-- HEADER -->

        <header class="bg-white border-b
                       px-8 py-5
                       flex justify-between items-center">

            <div>

                <h2 class="text-2xl font-bold
                           text-gray-800">

                    Dashboard

                </h2>

                <p class="text-gray-500 text-sm">

                    Kelola informasi E-Government

                </p>

            </div>


            <div class="text-right">

                <p class="font-semibold text-gray-800">

                    {{ auth()->user()->name }}

                </p>

                <p class="text-sm text-gray-500">

                    Administrator

                </p>

            </div>

        </header>



        <!-- CONTENT -->

        <section class="p-8">


            <div class="mb-8">

                <h3 class="text-xl font-semibold">

                    Selamat datang,
                    {{ auth()->user()->name }}

                </h3>

                <p class="text-gray-500 mt-1">

                    Berikut ringkasan pengelolaan website
                    E-Government.

                </p>

            </div>



            <!-- STATISTICS -->

            <div class="grid grid-cols-1
                        md:grid-cols-3
                        gap-6">


                <!-- BERITA -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">
                        Total Berita
                    </p>

                    <h3 class="text-3xl font-bold
                               text-blue-700 mt-2">

                        0

                    </h3>

                </div>



                <!-- KEGIATAN -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">
                        Total Kegiatan
                    </p>

                    <h3 class="text-3xl font-bold
                               text-green-600 mt-2">

                        0

                    </h3>

                </div>



                <!-- AGENDA -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">
                        Agenda Mendatang
                    </p>

                    <h3 class="text-3xl font-bold
                               text-orange-500 mt-2">

                        0

                    </h3>

                </div>


            </div>



            <!-- INFORMASI -->

            <div class="bg-white rounded-2xl
                        shadow-sm p-6 mt-8">

                <h3 class="font-semibold text-lg">

                    Aktivitas Admin

                </h3>

                <p class="text-gray-500 mt-2">

                    Belum ada aktivitas terbaru.

                </p>

            </div>


        </section>


    </main>


</div>


</body>

</html>