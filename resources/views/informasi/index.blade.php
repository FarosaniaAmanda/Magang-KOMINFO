@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-50">

    <!-- ================= HEADER ================= -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900">

        <div class="absolute -top-24 -right-24 w-80 h-80
                    bg-white/10 rounded-full blur-3xl"></div>

        <div class="absolute -bottom-32 -left-20 w-96 h-96
                    bg-blue-400/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-16 md:py-20">

            <div class="max-w-3xl">

                <span class="inline-block text-blue-200
                             text-sm font-bold tracking-widest uppercase mb-4">
                    Pusat Informasi
                </span>

                <h1 class="text-3xl md:text-5xl
                           font-bold text-white leading-tight">

                    Informasi & Pengumuman

                </h1>

                <p class="text-blue-100 mt-5
                          text-base md:text-lg
                          leading-relaxed max-w-2xl">

                    Temukan berbagai informasi terbaru mengenai kegiatan,
                    program, pengumuman, dan layanan Pemerintah Kota Pasuruan.

                </p>

            </div>

        </div>

    </section>


    <!-- ================= CONTENT ================= -->
    <section class="py-12 md:py-16">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="flex flex-col md:flex-row
                        md:items-end md:justify-between
                        gap-4 mb-8">

                <div>

                    <p class="text-sm font-semibold text-blue-700 mb-2">
                        INFORMASI TERKINI
                    </p>

                    <h2 class="text-2xl md:text-3xl
                               font-bold text-slate-800">

                        Berita & Informasi

                    </h2>

                </div>

                <div class="text-sm text-slate-500">

                    {{ $informasi->count() }} informasi tersedia

                </div>

            </div>


            <!-- ================= CARDS ================= -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

                @forelse ($informasi as $item)

                    <a
                        href="{{ route('informasi.show', $item->id) }}"
                        class="group block"
                    >

                        <article
                            class="h-full bg-white
                                   rounded-2xl
                                   border border-slate-200
                                   overflow-hidden
                                   shadow-sm
                                   hover:shadow-2xl
                                   hover:-translate-y-2
                                   hover:border-blue-300
                                   transition-all duration-300"
                        >

                            <!-- Top Accent -->
                            <div
                                class="h-1.5 bg-gradient-to-r
                                       from-blue-600 to-indigo-500"
                            ></div>


                            <div class="p-7">

                                <!-- Category + Icon -->
                                <div class="flex items-center
                                            justify-between mb-6">

                                    <span
                                        class="inline-flex
                                               items-center
                                               px-3 py-1.5
                                               rounded-full
                                               bg-blue-50
                                               text-blue-700
                                               text-xs
                                               font-bold
                                               group-hover:bg-blue-600
                                               group-hover:text-white
                                               transition"
                                    >

                                        {{ $item->kategori }}

                                    </span>


                                    <div
                                        class="w-10 h-10
                                               rounded-xl
                                               bg-slate-50
                                               text-slate-400
                                               flex items-center
                                               justify-center
                                               group-hover:bg-blue-50
                                               group-hover:text-blue-600
                                               transition"
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
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"
                                            />
                                        </svg>

                                    </div>

                                </div>


                                <!-- Date -->
                                <div
                                    class="flex items-center gap-2
                                           text-sm text-slate-400 mb-4"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4"
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

                                    {{ $item->tanggal->format('d F Y') }}

                                </div>


                                <!-- Title -->
                                <h2
                                    class="text-xl font-bold
                                           text-slate-800
                                           leading-snug
                                           mb-4
                                           group-hover:text-blue-700
                                           transition"
                                >

                                    {{ $item->judul }}

                                </h2>


                                <!-- Summary -->
                                <p
                                    class="text-slate-600
                                           leading-relaxed
                                           line-clamp-3"
                                >

                                    {{ $item->ringkasan }}

                                </p>


                                <!-- Read More -->
                                <div
                                    class="mt-7 pt-5
                                           border-t border-slate-100
                                           flex items-center
                                           justify-between"
                                >

                                    <span
                                        class="text-sm font-bold
                                               text-blue-700"
                                    >
                                        Baca Selengkapnya
                                    </span>


                                    <span
                                        class="w-9 h-9
                                               rounded-full
                                               bg-blue-50
                                               text-blue-700
                                               flex items-center
                                               justify-center
                                               group-hover:bg-blue-600
                                               group-hover:text-white
                                               group-hover:translate-x-1
                                               transition-all"
                                    >

                                        →

                                    </span>

                                </div>

                            </div>

                        </article>

                    </a>

                @empty

                    <div class="lg:col-span-3">

                        <div
                            class="bg-white rounded-3xl
                                   border border-slate-200
                                   p-14 text-center"
                        >

                            <div
                                class="w-16 h-16 mx-auto mb-5
                                       rounded-2xl
                                       bg-blue-50
                                       text-blue-600
                                       flex items-center
                                       justify-center"
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
                                        stroke-width="1.8"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"
                                    />
                                </svg>

                            </div>

                            <h2 class="text-xl font-bold text-slate-700">
                                Belum Ada Informasi
                            </h2>

                            <p class="text-slate-500 mt-2">
                                Informasi terbaru akan segera tersedia.
                            </p>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>

    </section>

</div>

@endsection