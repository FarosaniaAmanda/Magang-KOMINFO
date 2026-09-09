<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Admin - E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="w-full max-w-md">

        <div class="bg-white rounded-2xl shadow-xl p-8">

            <div class="text-center mb-8">

                <h1 class="text-2xl font-bold text-green-900">
                    Admin E-Government
                </h1>

                <p class="text-gray-500 mt-2">
                    Sistem Informasi E-Government
                </p>

            </div>


            @if ($errors->any())

                <div class="mb-5 bg-red-100 text-red-700
                            px-4 py-3 rounded-lg">

                    {{ $errors->first() }}

                </div>

            @endif


            <form method="POST"
                  action="{{ route('admin.login.process') }}">

                @csrf


                <div class="mb-5">

                    <label class="block text-sm font-medium
                                  text-gray-700 mb-2">

                        Email

                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full px-4 py-3 border
                               border-gray-300 rounded-lg
                               focus:ring-2 focus:ring-green-500
                               focus:outline-none"
                        placeholder="admin@kominfo.go.id"
                    >

                </div>


                <div class="mb-6">

                    <label class="block text-sm font-medium
                                  text-gray-700 mb-2">

                        Password

                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full px-4 py-3 border
                               border-gray-300 rounded-lg
                               focus:ring-2 focus:ring-green-500
                               focus:outline-none"
                        placeholder="Masukkan password"
                    >

                </div>


                <button
                    type="submit"
                    class="w-full bg-green-700
                           hover:bg-green-800
                           text-white font-semibold
                           py-3 rounded-lg
                           transition">

                    Login Admin

                </button>

            </form>

        </div>

    </div>

</body>

</html>