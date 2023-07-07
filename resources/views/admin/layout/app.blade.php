@include('admin.layout.top')
<div id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Main Content -->
        @include('admin.layout.menu')
        <div id="content">
            <main>
                <div class="container-fluid px-4">
                    {{-- sisipkan content badan nya --}}
                @yield('content')
                </div>
            </main>
        </div>
    </div>
</div>
</div>

@include('admin.layout.bottom')