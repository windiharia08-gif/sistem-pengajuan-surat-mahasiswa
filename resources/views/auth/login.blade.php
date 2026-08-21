<x-guest-layout>

    <div class="min-h-screen bg-slate-50 flex items-center justify-center px-4 py-10">

        <div class="w-full max-w-md">

            {{-- LOGO --}}
            <div class="text-center mb-5">

                <div class="flex justify-center mb-4">
                    <img
                        src="{{ asset('images/logounw.png') }}"
                        alt="Logo Unw"
                        class="w-12 h-12 fill-current"
                    >
                </div>

                <h1 class="text-xl font-semibold text-slate-800">
                    Sistem Pengajuan Surat
                </h1>

                <p class="mt-2 text-sm text-slate-500">
                    Universitas Ngudi Waluyo
                </p>

            </div>


            {{-- LOGIN CARD --}}
            <div class="bg-white shadow-xl rounded-2xl p-8 border border-slate-100">

                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-slate-800">
                        Selamat Datang
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Silakan masuk menggunakan akun Anda.
                    </p>
                </div>


                {{-- SESSION STATUS --}}
                <x-auth-session-status
                    class="mb-4"
                    :status="session('status')"
                />


                <form method="POST" action="{{ route('login') }}">

                    @csrf


                    {{-- EMAIL --}}
                    <div>
                        <x-input-label
                            for="email"
                            :value="__('Email')"
                            class="text-slate-700"
                        />

                        <x-text-input
                            id="email"
                            class="block mt-2 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="nama@email.com"
                        />

                        <x-input-error
                            :messages="$errors->get('email')"
                            class="mt-2"
                        />
                    </div>


                    {{-- PASSWORD --}}
                    <div class="mt-5">

                        <x-input-label
                            for="password"
                            :value="__('Password')"
                            class="text-slate-700"
                        />

                        <x-text-input
                            id="password"
                            class="block mt-2 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Masukkan password"
                        />

                        <x-input-error
                            :messages="$errors->get('password')"
                            class="mt-2"
                        />

                    </div>


                    {{-- REMEMBER --}}
                    <div class="flex items-center justify-between mt-5">

                        <label
                            for="remember_me"
                            class="inline-flex items-center"
                        >

                            <input
                                id="remember_me"
                                type="checkbox"
                                class="rounded border-slate-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember"
                            >

                            <span class="ms-2 text-sm text-slate-600">
                                {{ __('Ingat saya') }}
                            </span>

                        </label>


                        @if (Route::has('password.request'))

                            <a
                                href="{{ route('password.request') }}"
                                class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline"
                            >
                                Lupa password?
                            </a>

                        @endif

                    </div>


                    {{-- LOGIN BUTTON --}}
                    <div class="mt-7">

                        <button
                            type="submit"
                            class="w-full inline-flex justify-center items-center px-4 py-3 bg-slate-800 border border-transparent rounded-lg font-semibold text-sm text-black uppercase tracking-wider hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500 transition"
                        >
                            Masuk
                        </button>

                    </div>

                </form>


                {{-- REGISTER --}}
                @if (Route::has('register'))

                    <div class="mt-6 pt-6 border-t border-slate-100 text-center">

                        <p class="text-sm text-slate-500">
                            Belum mempunyai akun?
                        </p>

                        <a
                            href="{{ route('register') }}"
                            class="inline-block mt-2 text-sm font-semibold text-indigo-600 hover:text-indigo-800 hover:underline"
                        >
                            Daftar sebagai Mahasiswa
                        </a>

                    </div>

                @endif

            </div>


            {{-- FOOTER --}}
            <p class="text-center text-xs text-slate-400 mt-6">
                © {{ date('Y') }} Sistem Pengajuan Surat Universitas
            </p>

        </div>

    </div>

</x-guest-layout>