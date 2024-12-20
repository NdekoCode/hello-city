@include('layouts.partials.header')
<section class="flex items-center min-h-screen justify-between flex-col py-6">

    <main class="container max-w-7x mx-auto" role="main">

        @yield('content')
    </main>
    @include('layouts.partials.footer')
</section>
