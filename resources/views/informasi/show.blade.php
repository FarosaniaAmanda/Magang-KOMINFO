@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#FAFAF7]">

```
<!-- ================= HERO / HEADER ================= -->
<section
    class="relative overflow-hidden
           bg-gradient-to-br
           from-[#075E4A]
           via-[#087F5B]
           to-[#005C3B]"
>

    <!-- Decorative -->
    <div
        class="absolute -top-24 -right-24
               w-80 h-80
               bg-white/10
               rounded-full
               blur-3xl"
    >
    </div>

    <div
        class="absolute -bottom-32 -left-20
               w-96 h-96
               bg-[#E7B92E]/10
               rounded-full
               blur-3xl"
    >
    </div>


    <div
        class="relative max-w-5xl mx-auto
               px-6 py-16 md:py-20"
    >

        <!-- Breadcrumb -->
        <div
            class="flex items-center gap-2
                   text-sm text-[#DDEDE3]
                   mb-8"
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

            <span class="text-white/70">
                Detail Informasi
            </span>

        </div>


        <!-- Category -->
        <span
            class="inline-flex items-center
                   px-4 py-2
                   rounded-full
                   bg-white/15
                   border border-white/20
                   text-white
                   text-sm font-semibold
                   backdrop-blur-sm
                   mb-6"
        >

            {{ $item->kategori }}

        </span>


        <!-- Title -->
        <h1
            class="text-3xl md:text-5xl
                   font-bold text-white
                   leading-tight max-w-4xl"
        >

            {{ $item->judul }}

        </h1>


        <!-- Date -->
        <div
            class="flex items-center gap-2
                   mt-6 text-[#DDEDE3]"
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

            <span>
                {{ $item->tanggal->format('d F Y') }}
            </span>

        </div>


        <!-- Decorative Line -->
        <div class="flex items-center gap-3 mt-7">

            <span
                class="w-14 h-1
                       bg-[#F4C430]
                       rounded-full"
            ></span>

            <span class="text-sm text-white/60">
                E-Government Kota Pasuruan
            </span>

        </div>

    </div>

</section>


<!-- ================= CONTENT ================= -->
<section class="py-12 md:py-16">

    <div class="max-w-5xl mx-auto px-6">

        <div class="grid lg:grid-cols-[1fr_280px] gap-10">


            <!-- ================= MAIN CONTENT ================= -->
            <article
                class="bg-white
                       rounded-3xl
                       border border-slate-200
                       shadow-sm
                       overflow-hidden"
            >

                <div class="p-7 md:p-10 lg:p-12">


                    <!-- Ringkasan -->
                    <div
                        class="border-l-4
                               border-[#008C45]
                               bg-[#E8F3EC]
                               rounded-r-xl
                               p-5 mb-9"
                    >

                        <div class="flex items-start gap-3">

                            <!-- Icon -->
                            <div
                                class="flex-shrink-0
                                       w-9 h-9
                                       rounded-lg
                                       bg-[#008C45]
                                       text-white
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


                            <p
                                class="text-slate-700
                                       leading-relaxed"
                            >

                                {{ $item->ringkasan }}

                            </p>

                        </div>

                    </div>


                    <!-- Isi -->
                    <div
                        class="text-slate-700
                               text-lg
                               leading-8"
                    >

                        {!! nl2br(e($item->isi)) !!}

                    </div>


                    <!-- Bottom Accent -->
                    <div
                        class="mt-10 pt-7
                               border-t border-slate-100"
                    >

                        <div class="flex items-center gap-3">

                            <span
                                class="w-10 h-1
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


            <!-- ================= SIDEBAR ================= -->
            <aside class="space-y-5">


                <!-- Information Card -->
                <div
                    class="bg-white
                           rounded-2xl
                           border border-slate-200
                           shadow-sm
                           p-6"
                >

                    <!-- Header -->
                    <div
                        class="flex items-center
                               gap-3 mb-5"
                    >

                        <div
                            class="w-11 h-11
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
                                    d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000-18z"
                                />
                            </svg>

                        </div>


                        <div>

                            <h3
                                class="font-bold
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


                    <!-- Details -->
                    <div class="space-y-4 text-sm">

                        <!-- Kategori -->
                        <div>

                            <p
                                class="text-slate-400
                                       mb-1"
                            >
                                Kategori
                            </p>

                            <p
                                class="font-semibold
                                       text-[#006F38]"
                            >
                                {{ $item->kategori }}
                            </p>

                        </div>


                        <!-- Date -->
                        <div>

                            <p
                                class="text-slate-400
                                       mb-1"
                            >
                                Tanggal Publikasi
                            </p>

                            <p
                                class="font-semibold
                                       text-slate-700"
                            >
                                {{ $item->tanggal->format('d F Y') }}
                            </p>

                        </div>

                    </div>

                </div>


                <!-- ================= BACK BUTTON ================= -->
                <a
                    href="{{ route('informasi.index') }}"
                    class="group flex items-center
                           justify-center gap-2
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
                           transition-all duration-300"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5
                               group-hover:-translate-x-1
                               transition"
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

                    Kembali ke Informasi

                </a>


                <!-- ================= HOME BUTTON ================= -->
                <a
                    href="{{ route('home') }}"
                    class="group flex items-center
                           justify-center gap-2
                           w-full
                           px-5 py-4
                           bg-white
                           border border-[#008C45]
                           text-[#008C45]
                           rounded-2xl
                           font-semibold
                           hover:bg-[#E8F3EC]
                           hover:border-[#006F38]
                           transition-all duration-300"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5
                               group-hover:-translate-x-1
                               transition"
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

                    Kembali ke Beranda

                </a>

            </aside>

        </div>

    </div>

</section>
```

</div>

@endsection
