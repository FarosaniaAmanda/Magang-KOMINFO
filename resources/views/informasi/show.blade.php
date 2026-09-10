@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#F7F9F8]">

    <!-- ===================================================== -->
    <!-- HERO / HEADER DENGAN BACKGROUND GAMBAR -->
    <!-- ===================================================== -->
    <section class="relative overflow-hidden min-h-[540px]">

        <!-- ================= BACKGROUND IMAGE ================= -->
        @if($item->gambar)

            <img
                src="{{ asset('storage/' . $item->gambar) }}"
                alt="{{ $item->judul }}"
                class="absolute inset-0
                       w-full h-full
                       object-cover"
            >

        @else

            <!-- Background jika tidak ada gambar -->
            <div
                class="absolute inset-0
                       bg-gradient-to-br
                       from-[#082B3A]
                       via-[#075E73]
                       to-[#008C7A]"
            ></div>

        @endif


        <!-- ================= OVERLAY ================= -->
        <div
    class="absolute inset-0
           bg-gradient-to-r
           from-[#5C4300]/90
           via-[#8A6A08]/65
           to-[#C9A227]/30"
></div>


        <!-- Overlay bawah -->
        <div
            class="absolute inset-x-0 bottom-0
                   h-48
                   bg-gradient-to-t
                   from-black/55
                   to-transparent"
        ></div>


        <!-- ================= HERO CONTENT ================= -->
        <div
            class="relative z-10
                   max-w-6xl mx-auto
                   px-6
                   min-h-[540px]
                   py-10 md:py-14
                   flex flex-col
                   justify-end"
        >

            <!-- ================= BREADCRUMB ================= -->
            <div
                class="absolute
                       top-8 left-6 right-6
                       flex flex-wrap
                       items-center gap-2
                       text-sm text-white/75"
            >

                <a
                    href="{{ route('home') }}"
                    class="hover:text-white transition"
                >
                    Beranda
                </a>

                <span>/</span>

                <a
                    href="{{ route('informasi.index') }}"
                    class="hover:text-white transition"
                >
                    Informasi
                </a>

                <span>/</span>

                <span class="text-white/50">
                    Detail Informasi
                </span>

            </div>


            <!-- ================= ARTICLE HEADER ================= -->
            <div class="max-w-4xl pb-5">

                <!-- Category -->
                <div class="mb-6">

                    <span
                        class="inline-flex items-center
                               px-4 py-2
                               rounded-full
                               bg-[#008C45]/90
                               border border-white/20
                               text-white
                               text-sm font-semibold
                               shadow-lg
                               backdrop-blur-md"
                    >
                        {{ $item->kategori }}
                    </span>

                </div>


                <!-- Title -->
                <h1
                    class="text-3xl
                           sm:text-4xl
                           md:text-5xl
                           lg:text-6xl
                           font-bold
                           text-white
                           leading-[1.08]
                           tracking-tight
                           drop-shadow-xl"
                >
                    {{ $item->judul }}
                </h1>


                <!-- Date -->
                <div
                    class="flex items-center gap-3
                           mt-7"
                >

                    <!-- Calendar Icon -->
                    <div
                        class="w-10 h-10
                               rounded-xl
                               bg-white/15
                               border border-white/20
                               backdrop-blur-md
                               flex items-center
                               justify-center
                               text-white"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                            />
                        </svg>

                    </div>


                    <div>

                        <p
                            class="text-xs
                                   text-white/55
                                   uppercase
                                   tracking-wider"
                        >
                            Dipublikasikan
                        </p>

                        <p
                            class="text-base
                                   md:text-lg
                                   font-medium
                                   text-white"
                        >
                            {{ $item->tanggal->format('d F Y') }}
                        </p>

                    </div>

                </div>


                <!-- Decorative Line -->
                <div
                    class="flex items-center gap-3
                           mt-7"
                >

                    <span
                        class="w-16 h-1
                               bg-[#F4C430]
                               rounded-full"
                    ></span>

                    <span
                        class="text-sm
                               text-white/65"
                    >
                        E-Government Kota Pasuruan
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- ===================================================== -->
    <!-- CONTENT -->
    <!-- ===================================================== -->
    <section class="py-12 md:py-16">

        <div class="max-w-6xl mx-auto px-6">

            <div
                class="grid
                       lg:grid-cols-[minmax(0,1fr)_300px]
                       gap-8 lg:gap-10
                       items-start"
            >


                <!-- ================================================= -->
                <!-- MAIN ARTICLE -->
                <!-- ================================================= -->
                <article
                    class="bg-white
                           rounded-3xl
                           border border-slate-200
                           shadow-[0_10px_40px_rgba(15,23,42,0.05)]
                           overflow-hidden"
                >

                    <div class="p-7 sm:p-9 md:p-11">


                        <!-- ========================================= -->
                        <!-- RINGKASAN BERITA -->
                        <!-- ========================================= -->
                        <div class="mb-10">

                            <!-- Label -->
                            <div
                                class="flex items-center gap-3
                                       mb-4"
                            >

                                <div
                                    class="w-9 h-9
                                           rounded-xl
                                           bg-[#E8F3EC]
                                           text-[#008C45]
                                           flex items-center
                                           justify-center"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000 18z"
                                        />
                                    </svg>

                                </div>


                                <div>

                                    <p
                                        class="text-xs
                                               font-semibold
                                               uppercase
                                               tracking-widest
                                               text-[#008C45]"
                                    >
                                        Ringkasan Berita
                                    </p>

                                    <p
                                        class="text-xs
                                               text-slate-400
                                               mt-0.5"
                                    >
                                        Informasi singkat
                                    </p>

                                </div>

                            </div>


                            <!-- Highlight -->
                            <div
                                class="relative
                                       overflow-hidden
                                       rounded-2xl
                                       border border-[#D5EBDD]
                                       bg-gradient-to-r
                                       from-[#F0F8F3]
                                       to-[#F8FBF9]
                                       p-5 md:p-6"
                            >

                                <!-- Decorative -->
                                <div
                                    class="absolute
                                           -right-10
                                           -top-10
                                           w-28 h-28
                                           rounded-full
                                           bg-[#008C45]/5"
                                ></div>


                                <div
                                    class="relative
                                           flex items-start gap-4"
                                >

                                    <div
                                        class="flex-shrink-0
                                               w-10 h-10
                                               rounded-xl
                                               bg-[#008C45]
                                               text-white
                                               flex items-center
                                               justify-center
                                               shadow-sm"
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000-18z"
                                            />
                                        </svg>

                                    </div>


                                    <p
                                        class="text-slate-700
                                               leading-7
                                               text-base
                                               md:text-lg"
                                    >
                                        {{ $item->ringkasan }}
                                    </p>

                                </div>

                            </div>

                        </div>


                        <!-- ========================================= -->
                        <!-- ISI BERITA -->
                        <!-- ========================================= -->
                        <div>

                            <!-- Heading -->
                            <div
                                class="flex items-center gap-3
                                       mb-6"
                            >

                                <span
                                    class="w-1.5 h-8
                                           rounded-full
                                           bg-[#008C45]"
                                ></span>

                                <div>

                                    <p
                                        class="text-xs
                                               font-semibold
                                               uppercase
                                               tracking-widest
                                               text-[#008C45]"
                                    >
                                        Isi Berita
                                    </p>

                                    <h2
                                        class="text-xl
                                               md:text-2xl
                                               font-bold
                                               text-slate-800"
                                    >
                                        Informasi Lengkap
                                    </h2>

                                </div>

                            </div>


                            <!-- Article Text -->
                            <div
                                class="prose
                                       prose-slate
                                       max-w-none
                                       text-slate-700
                                       text-base
                                       md:text-lg
                                       leading-8"
                            >

                                {!! nl2br(e($item->isi)) !!}

                            </div>

                        </div>


                        <!-- ========================================= -->
                        <!-- BOTTOM ACCENT -->
                        <!-- ========================================= -->
                        <div
                            class="mt-12
                                   pt-7
                                   border-t
                                   border-slate-100"
                        >

                            <div
                                class="flex
                                       flex-wrap
                                       items-center gap-3"
                            >

                                <span
                                    class="w-12 h-1
                                           bg-[#008C45]
                                           rounded-full"
                                ></span>

                                <span
                                    class="w-3 h-3
                                           bg-[#E7B92E]
                                           rounded-full"
                                ></span>

                                <span
                                    class="text-sm
                                           text-slate-400"
                                >
                                    E-Government Kota Pasuruan
                                </span>

                            </div>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- SIDEBAR -->
                <!-- ================================================= -->
                <aside class="space-y-5">


                    <!-- ============================================= -->
                    <!-- INFORMATION CARD -->
                    <!-- ============================================= -->
                    <div
                        class="bg-white
                               rounded-3xl
                               border border-slate-200
                               shadow-[0_10px_40px_rgba(15,23,42,0.05)]
                               overflow-hidden"
                    >

                        <!-- Card Header -->
                        <div
                            class="p-6
                                   border-b
                                   border-slate-100
                                   bg-gradient-to-br
                                   from-[#F4FAF6]
                                   to-white"
                        >

                            <div
                                class="flex items-center gap-4"
                            >

                                <div
                                    class="w-12 h-12
                                           rounded-2xl
                                           bg-[#E8F3EC]
                                           text-[#008C45]
                                           flex items-center
                                           justify-center"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000-18z"
                                        />
                                    </svg>

                                </div>


                                <div>

                                    <h3
                                        class="font-bold
                                               text-lg
                                               text-slate-800"
                                    >
                                        Informasi
                                    </h3>

                                    <p
                                        class="text-sm
                                               text-slate-500"
                                    >
                                        Detail publikasi
                                    </p>

                                </div>

                            </div>

                        </div>


                        <!-- Card Details -->
                        <div class="p-6 space-y-6">


                            <!-- Kategori -->
                            <div>

                                <div
                                    class="flex items-center
                                           gap-2 mb-2"
                                >

                                    <span
                                        class="w-2 h-2
                                               rounded-full
                                               bg-[#008C45]"
                                    ></span>

                                    <p
                                        class="text-xs
                                               uppercase
                                               tracking-wider
                                               font-semibold
                                               text-slate-400"
                                    >
                                        Kategori
                                    </p>

                                </div>


                                <div
                                    class="inline-flex
                                           px-3 py-2
                                           rounded-xl
                                           bg-[#E8F3EC]
                                           text-[#006F38]
                                           font-semibold
                                           text-sm"
                                >
                                    {{ $item->kategori }}
                                </div>

                            </div>


                            <!-- Divider -->
                            <div
                                class="border-t
                                       border-slate-100"
                            ></div>


                            <!-- Tanggal -->
                            <div>

                                <div
                                    class="flex items-center
                                           gap-2 mb-2"
                                >

                                    <span
                                        class="w-2 h-2
                                               rounded-full
                                               bg-[#E7B92E]"
                                    ></span>

                                    <p
                                        class="text-xs
                                               uppercase
                                               tracking-wider
                                               font-semibold
                                               text-slate-400"
                                    >
                                        Tanggal Publikasi
                                    </p>

                                </div>


                                <p
                                    class="font-semibold
                                           text-slate-700"
                                >
                                    {{ $item->tanggal->format('d F Y') }}
                                </p>

                            </div>


                            <!-- Divider -->
                            <div
                                class="border-t
                                       border-slate-100"
                            ></div>


                            <!-- Sumber -->
                            <div>

                                <div
                                    class="flex items-center
                                           gap-2 mb-2"
                                >

                                    <span
                                        class="w-2 h-2
                                               rounded-full
                                               bg-[#075E73]"
                                    ></span>

                                    <p
                                        class="text-xs
                                               uppercase
                                               tracking-wider
                                               font-semibold
                                               text-slate-400"
                                    >
                                        Sumber
                                    </p>

                                </div>


                                <p
                                    class="font-semibold
                                           text-slate-700"
                                >
                                    E-Government Kota Pasuruan
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- ============================================= -->
                    <!-- BACK TO INFORMATION -->
                    <!-- ============================================= -->
                    <a
                        href="{{ route('informasi.index') }}"
                        class="group
                               flex items-center
                               justify-center
                               gap-3
                               w-full
                               px-5 py-4
                               bg-[#008C45]
                               hover:bg-[#006F38]
                               text-white
                               rounded-2xl
                               font-semibold
                               shadow-sm
                               hover:shadow-lg
                               hover:-translate-y-0.5
                               transition-all
                               duration-300"
                    >

                        <span
                            class="flex items-center
                                   justify-center
                                   w-9 h-9
                                   rounded-xl
                                   bg-white/15"
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

                        </span>

                        <span>
                            Kembali ke Informasi
                        </span>

                    </a>


                    <!-- ============================================= -->
                    <!-- BACK TO HOME -->
                    <!-- ============================================= -->
                    <a
    href="{{ route('home') }}"
    class="group flex items-center
           justify-center gap-2
           w-full
           px-5 py-4
           bg-[#F4C430]
           border border-[#F4C430]
           text-[#075E4A]
           rounded-2xl
           font-semibold
           shadow-sm
           hover:bg-[#E7B92E]
           hover:border-[#D4AA25]
           hover:shadow-lg
           hover:-translate-y-0.5
           transition-all duration-300"
>

                        <span
                            class="flex items-center
                                   justify-center
                                   w-9 h-9
                                   rounded-xl
                                   bg-[#E8F3EC]"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5
                                       group-hover:-translate-y-0.5
                                       transition-transform"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M3 12l9-9 9 9M5 10v10h14V10"
                                />
                            </svg>

                        </span>

                        <span>
                            Kembali ke Beranda
                        </span>

                    </a>


                    <!-- ============================================= -->
                    <!-- SMALL BRAND CARD -->
                    <!-- ============================================= -->
                    <div
                        class="rounded-3xl
                               bg-gradient-to-br
                               from-[#0B2942]
                               via-[#075E73]
                               to-[#008C7A]
                               p-6
                               text-white
                               shadow-sm
                               overflow-hidden
                               relative"
                    >

                        <!-- Decorative -->
                        <div
                            class="absolute
                                   -right-10
                                   -top-10
                                   w-28 h-28
                                   rounded-full
                                   bg-white/10"
                        ></div>


                        <div class="relative">

                            <p
                                class="text-xs
                                       uppercase
                                       tracking-widest
                                       text-white/55
                                       mb-2"
                            >
                                Portal Resmi
                            </p>

                            <h4
                                class="text-lg
                                       font-bold
                                       leading-snug"
                            >
                                E-Government
                                Kota Pasuruan
                            </h4>

                            <p
                                class="text-sm
                                       text-white/65
                                       mt-2
                                       leading-relaxed"
                            >
                                Informasi dan layanan
                                pemerintahan Kota Pasuruan.
                            </p>

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </section>

</div>

@endsection