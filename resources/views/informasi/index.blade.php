@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#FAFAF7]">


    <!-- ===================================================== -->
    <!-- HEADER INFORMASI -->
    <!-- ===================================================== -->
    <section class="relative overflow-hidden min-h-[420px]">


        <!-- ================= BACKGROUND IMAGE ================= -->
        <img
            src="{{ asset('images/pasuruan.jpeg') }}"
            alt="E-Government Kota Pasuruan"
            class="absolute inset-0
                   w-full h-full
                   object-cover"
        >


        <!-- ================= DARK/GOLD OVERLAY ================= -->
        <div
            class="absolute inset-0
                   bg-gradient-to-r
                   from-[#3D2D05]/90
                   via-[#6B5108]/70
                   to-[#C9A227]/35"
        ></div>


        <!-- ================= BOTTOM OVERLAY ================= -->
        <div
            class="absolute inset-x-0 bottom-0
                   h-36
                   bg-gradient-to-t
                   from-black/50
                   to-transparent"
        ></div>


        <!-- ================= DECORATIVE CIRCLE ================= -->
        <div
            class="absolute
                   -top-24
                   -right-24
                   w-80 h-80
                   rounded-full
                   bg-[#F4C430]/10
                   blur-3xl"
        ></div>


        <!-- ================================================= -->
        <!-- HEADER CONTENT -->
        <!-- ================================================= -->
        <div
            class="relative z-10
                   max-w-6xl mx-auto
                   px-6
                   min-h-[420px]
                   py-12 md:py-16
                   flex flex-col
                   justify-center"
        >


            <!-- Breadcrumb -->
            <div
                class="flex items-center gap-2
                       text-sm
                       text-white/75
                       mb-7"
            >

                <a
                    href="{{ route('home') }}"
                    class="hover:text-white transition"
                >
                    Beranda
                </a>

                <span>/</span>

                <span class="text-white">
                    Informasi
                </span>

            </div>


            <!-- Header Text -->
            <div class="max-w-3xl">


                <!-- Small Label -->
                <div class="mb-5">

                    <span
                        class="inline-flex
                               items-center
                               px-4 py-2
                               rounded-full
                               bg-[#F4C430]/90
                               text-[#4A3700]
                               text-sm
                               font-bold
                               shadow-lg
                               backdrop-blur-sm"
                    >
                        INFORMASI PEMERINTAHAN
                    </span>

                </div>


                <!-- Title -->
                <h1
                    class="text-4xl
                           md:text-5xl
                           lg:text-6xl
                           font-bold
                           text-white
                           leading-tight
                           tracking-tight
                           drop-shadow-xl"
                >
                    Berita & Informasi
                </h1>


                <!-- Description -->
                <p
                    class="mt-5
                           max-w-2xl
                           text-base
                           md:text-lg
                           text-white/80
                           leading-relaxed"
                >
                    Informasi terbaru mengenai kegiatan,
                    pelayanan, dan perkembangan
                    Pemerintah Kota Pasuruan.
                </p>


                <!-- Decorative Line -->
                <div
                    class="flex items-center gap-3
                           mt-7"
                >

                    <span
                        class="w-16 h-1
                               rounded-full
                               bg-[#F4C430]"
                    ></span>

                    <span
                        class="text-sm
                               text-white/60"
                    >
                        E-Government Kota Pasuruan
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- DAFTAR INFORMASI -->
    <!-- ===================================================== -->
    <section class="py-12 md:py-16">

        <div class="max-w-6xl mx-auto px-6">


            <!-- Section Heading -->
            <div
                class="flex flex-col
                       md:flex-row
                       md:items-end
                       md:justify-between
                       gap-4
                       mb-9"
            >

                <div>

                    <p
                        class="text-sm
                               font-semibold
                               uppercase
                               tracking-widest
                               text-[#008C45]"
                    >
                        Informasi Terkini
                    </p>

                    <h2
                        class="text-2xl
                               md:text-3xl
                               font-bold
                               text-slate-800
                               mt-1"
                    >
                        Berita Terbaru
                    </h2>

                </div>


                <div
                    class="text-sm
                           text-slate-500"
                >
                    Informasi Pemerintah Kota Pasuruan
                </div>

            </div>


            <!-- ================================================= -->
            <!-- GRID BERITA -->
            <!-- ================================================= -->
            @if($informasi->count())

                <div
                    class="grid
                           sm:grid-cols-2
                           lg:grid-cols-3
                           gap-7"
                >

                    @foreach($informasi as $item)

                        <!-- ================= CARD ================= -->
                        <a
                            href="{{ route('informasi.show', $item->id) }}"
                            class="group block"
                        >

                            <article
                                class="h-full
                                       bg-white
                                       rounded-3xl
                                       overflow-hidden
                                       border border-slate-200
                                       shadow-sm
                                       hover:shadow-xl
                                       hover:-translate-y-1
                                       transition-all
                                       duration-300"
                            >


                                <!-- ================= IMAGE ================= -->
                                <div
                                    class="relative
                                           w-full
                                           h-56
                                           bg-slate-100
                                           overflow-hidden"
                                >

                                    @if($item->gambar)

                                        <img
                                            src="{{ asset('storage/' . $item->gambar) }}"
                                            alt="{{ $item->judul }}"
                                            class="w-full
                                                   h-full
                                                   object-cover
                                                   group-hover:scale-105
                                                   transition-transform
                                                   duration-500"
                                        >

                                    @else

                                        <!-- Placeholder -->
                                        <div
                                            class="w-full
                                                   h-full
                                                   flex
                                                   flex-col
                                                   items-center
                                                   justify-center
                                                   bg-gradient-to-br
                                                   from-[#E8F3EC]
                                                   to-[#F5F8F6]
                                                   text-[#008C45]"
                                        >

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-12 h-12 mb-2"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                />
                                            </svg>

                                            <span
                                                class="text-sm
                                                       font-medium"
                                            >
                                                Tidak ada gambar
                                            </span>

                                        </div>

                                    @endif


                                    <!-- Image Overlay -->
                                    <div
                                        class="absolute inset-0
                                               bg-gradient-to-t
                                               from-black/25
                                               via-transparent
                                               to-transparent
                                               opacity-0
                                               group-hover:opacity-100
                                               transition-opacity
                                               duration-300"
                                    ></div>

                                </div>


                                <!-- ================= CARD CONTENT ================= -->
                                <div
                                    class="p-6"
                                >


                                    <!-- Category & Date -->
                                    <div
                                        class="flex
                                               items-center
                                               justify-between
                                               gap-3
                                               mb-4"
                                    >

                                        <span
                                            class="inline-flex
                                                   px-3 py-1.5
                                                   rounded-full
                                                   bg-[#E8F3EC]
                                                   text-[#006F38]
                                                   text-xs
                                                   font-semibold"
                                        >
                                            {{ $item->kategori }}
                                        </span>


                                        <span
                                            class="text-xs
                                                   text-slate-400
                                                   whitespace-nowrap"
                                        >
                                            {{ $item->tanggal->format('d M Y') }}
                                        </span>

                                    </div>


                                    <!-- Title -->
                                    <h3
                                        class="text-xl
                                               font-bold
                                               text-slate-800
                                               leading-snug
                                               group-hover:text-[#008C45]
                                               transition"
                                    >
                                        {{ $item->judul }}
                                    </h3>


                                    <!-- Summary -->
                                    <p
                                        class="mt-3
                                               text-slate-500
                                               leading-relaxed
                                               text-sm
                                               line-clamp-3"
                                    >
                                        {{ $item->ringkasan }}
                                    </p>


                                    <!-- Read More -->
                                    <div
                                        class="flex
                                               items-center
                                               gap-2
                                               mt-5
                                               text-[#008C45]
                                               font-semibold
                                               text-sm"
                                    >

                                        <span>
                                            Baca Selengkapnya
                                        </span>

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4
                                                   group-hover:translate-x-1
                                                   transition-transform"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                                            />
                                        </svg>

                                    </div>

                                </div>

                            </article>

                        </a>

                    @endforeach

                </div>

            @else

                <!-- ================= EMPTY STATE ================= -->
                <div
                    class="bg-white
                           rounded-3xl
                           border border-slate-200
                           p-12
                           text-center"
                >

                    <div
                        class="w-16 h-16
                               mx-auto
                               rounded-2xl
                               bg-[#E8F3EC]
                               text-[#008C45]
                               flex items-center
                               justify-center
                               mb-5"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM7 8h10M7 12h10M7 16h6"
                            />
                        </svg>

                    </div>


                    <h3
                        class="text-xl
                               font-bold
                               text-slate-800"
                    >
                        Belum Ada Informasi
                    </h3>


                    <p
                        class="mt-2
                               text-slate-500"
                    >
                        Belum terdapat berita atau informasi
                        yang dipublikasikan.
                    </p>

                </div>

            @endif


            <!-- ================================================= -->
            <!-- BOTTOM CTA -->
            <!-- ================================================= -->
            <div
                class="mt-12
                       pt-8
                       border-t
                       border-slate-200"
            >

                <a
                    href="{{ route('home') }}"
                    class="group
                           inline-flex
                           items-center
                           gap-3
                           px-6 py-3.5
                           rounded-2xl
                           bg-[#F4C430]
                           text-[#075E4A]
                           font-semibold
                           shadow-sm
                           hover:bg-[#E7B92E]
                           hover:shadow-lg
                           hover:-translate-y-0.5
                           transition-all
                           duration-300"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5
                               group-hover:-translate-x-1
                               transition-transform"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"
                        />
                    </svg>

                    Kembali ke Beranda

                </a>

            </div>

        </div>

    </section>

</div>

@endsection