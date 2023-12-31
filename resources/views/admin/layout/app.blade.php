@include('admin.layout.top')
<div id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Main Content -->
        @include('admin.layout.menu')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid mt-5  px-4">
                    {{-- sisipkan content badan nya --}}
                @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
</div> @if (Auth::user()->role == 'user')
<meta http-equiv="refresh" content="0; url=/">
@endif
@include('admin.layout.bottom')