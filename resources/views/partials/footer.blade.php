<footer class="mt-auto">
    <div class="container max-w-7xl mx-auto text-gray-400 flex justify-center items-center flex-col mt-5">

        &copy; Copyright {{ date('Y') }} &middot; {{ config('app.name') }}
        {{-- Si on est sur la page "About" alors n'affiche pas ce lien --}}
        @if (!Route::is('app_about'))
            <a class="underline text-indigo-500 hover:text-indigo-700" href="{{ route('app_about') }}">
                About us
            </a>
        @endif
    </div>
</footer>
</body>

</html>
