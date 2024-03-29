<div class='row'>
    <div class='col-md m-0'>
        <ul class="nav flex-column sidebar-wrapper pt-2 px-3">
            <li class="nav-item p-1 logo-img text-center mb-2">
                <span class="badge badge-pill badge-light mb-3 p-0">
                    <a class="nav-link text-center" href="http://172.16.1.13:8000" >
                        <img src="{{ asset('images/primatech-logo.png') }}" style="width: 146px; height: 28px">
                    </a>
                </span>
            </li>    
            <li class="nav-item my-2">
                <a class="nav-link sblink" href="{{ route('dashboard') }}"><i class="fas fa-chart-line mr-3 sbicon"></i><span class='pb-2'>DASHBOARD</span></a>
            </li>
            @if (Auth::user()->admin == 1)
                <li class="nav-item my-2">
                    <a class="nav-link sblink" href="{{ route('admin') }}"><i class="fas fa-unlock-alt mr-3 sbicon"></i>ADMIN</a>
                </li>
            @endif            
            <li class="nav-item my-2">
                <a class="nav-link sblink" href="{{ route('master') }}"><i class="fas fa-database mr-3 sbicon"></i>MASTER LIST</a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link sblink" href="{{ route('scan') }}"><i class="fas fa-barcode mr-3 sbicon"></i>SCAN</a>
            </li>
            {{-- <li class="nav-item my-2">
                <a class="nav-link sblink" href="{{ route('outgoing') }}"><i class="fas fa-sign-out-alt mr-3 sbicon"></i>OUTGOING</a>
            </li> --}}
            <li class='mt-auto'>
                <!-- Footer -->
                <footer class="page-footer font-small blue">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">© 2018 Prima Tech Phils., Inc.
                        {{-- <br>Designed and built by
                        <br>Edmund O. Mati Jr. --}}
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer --> 
            </li>
        </ul>              
    </div>
</div>