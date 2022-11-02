@extends('admin.layouts.app')

@section('title')

@endsection

@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ">

            <!-- Main Content -->
            <div id="content">

                @include('admin.layouts.navbar')

                @yield('contents')

                <!-- Footer -->
            </div>
            @include('admin.layouts.footer')
            <!-- End of Footer -->

            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Authentication -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a id="just_load_please" class="btn btn-primary" onclick="event.preventDefault();
                                this.closest('form').submit();"> {{ __('Logout') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
