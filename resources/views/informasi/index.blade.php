@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#FAFAF7]">

```
<!-- ================= HEADER ================= -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#075E4A] via-[#087F5B] to-[#005C3B]">

    <!-- Decorative -->
    <div class="absolute -top-24 -right-24 w-80 h-80
                bg-white/10 rounded-full blur-3xl">
    </div>

    <div class="absolute -bottom-32 -left-20 w-96 h-96
                bg-[#E7B92E]/10 rounded-full blur-3xl">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-16 md:py-20">

        <div class="max-w-3xl">

            <!-- Label -->
            <span class="inline-block text-[#F4C430]
                         text-sm font-bold tracking-widest
                         uppercase mb-4">
                Pusat Informasi
            </span>

            <!-- Title -->
            <h1 class="text-3xl md:text-5xl
                       font-bold text-white
                       leading-tight">

                Informasi & Pengumuman

            </h1>

            <!-- Description -->
            <p class="text-[#E8F3EC] mt-5
                      text-base md:text-lg
                      leading-relaxed max-w-2xl">

                Temukan berbagai informasi terbaru mengenai kegiatan,
                program, pengumuman, dan layanan Pemerintah Kota Pasuruan.

            </p>

            <!-- Decorative Line -->
            <div class="flex items-center gap-3 mt-7">

                <span class="w-14 h-1 bg-[#F4C430] rounded-full"></span>

                <span class="text-sm text-white/60">
                    E-Government Kota Pasuruan
                </span>

            </div>

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

                <p class="text-sm font-semibold
                          text-[#008C45] mb-2">
                    INFORMASI TERKINI
                </p>

                <h2 class="text-2xl md:text-3xl
                           font-bold text-slate-800">

                    Berita & Informasi

                </h2>

                <div class="flex items-center gap-2 mt-3">

                    <span class="w-8 h-1
                                 bg-[#E7B92E]
                                 rounded-full">
                    </span>

                    <span class="text-sm text-slate-500">
                        Informasi resmi E-Government
                    </span>

                </div>

            </div>

            <div class="text-sm text-slate-500">

                {{ $informasi->count() }} informasi tersedia

            </div>

        </div>


        <!-- ================= CARDS ================= -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

            @forelse ($informasi as $item)

                <!-- CARD -->
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
                               hover:border-[#008C45]
                               transition-all duration-300"
                    >

                        <!-- Top Accent -->
                        <div
                            class="h-1.5 bg-gradient-to-r
                                   from-[#008C45]
                                   via-[#087F5B]
                                   to-[#E7B92E]"
                        ></div>


                        <div class="p-7">

                            <!-- Category + Icon -->
                            <div class="flex items-center
                                        justify-between mb-6">

                                <!-- Category -->
                                <span
                                    class="inline-flex
                                           items-center
                                           px-3 py-1.5
                                           rounded-full
                                           bg-[#E8F3EC]
                                           text-[#006F38]
                                           text-xs
                                           font-bold
                                           group-hover:bg-[#008C45]
                                           group-hover:text-white
                                           transition"
                                >

                                    {{ $item->kategori }}

                                </span>


                                <!-- Icon -->
                                <div
                                    class="w-10 h-10
                                           rounded-xl
                                           bg-[#FAFAF7]
                                           text-slate-400
                                           flex items-center
                                           justify-center
                                           group-hover:bg-[#E8F3EC]
                                           group-hover:text-[#008C45]
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
                                    class="w-4 h-4 text-[#008C45]"
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
                                       group-hover:text-[#008C45]
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
                                           text-[#008C45]"
                                >
                                    Baca Selengkapnya
                                </span>


                                <span
                                    class="w-9 h-9
                                           rounded-full
                                           bg-[#E8F3EC]
                                           text-[#008C45]
                                           flex items-center
                                           justify-center
                                           group-hover:bg-[#008C45]
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

                <!-- EMPTY STATE -->
                <div class="lg:col-span-3">

                    <div
                        class="bg-white rounded-3xl
                               border border-slate-200
                               p-14 text-center
                               shadow-sm"
                    >

                        <div
                            class="w-16 h-16 mx-auto mb-5
                                   rounded-2xl
                                   bg-[#E8F3EC]
                                   text-[#008C45]
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


        <!-- ================= BACK TO HOME ================= -->
        <div class="text-center mt-12">

            <a
                href="{{ route('home') }}"
                class="inline-flex items-center gap-2
                       text-[#008C45]
                       font-semibold
                       hover:text-[#005C3B]
                       transition"
            >

                <span>
                    ←
                </span>

                Kembali ke Beranda

            </a>

        </div>

    </div>

</section>
```

</div>

@endsection
