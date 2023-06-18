@include('publik.template-publik.header')

<div id="layoutSidenav_content">
    <main>
        <div class="wrapper">
            {{-- sisipkan content badan nya --}}
        @yield('content')
        </div>
    </main>
</div>
</div>

@include('publik.template-publik.footer')