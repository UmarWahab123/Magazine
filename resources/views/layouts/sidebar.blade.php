        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/index') }}">

                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
                 <li class="nav-item">
                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
                         aria-expanded="true" aria-controls="collapseone">
                         <i class="fas fa-fw fa-file"></i>
                         <span>Edition</span>
                     </a>
                     <div id="collapseone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                         <div class="bg-white py-2 collapse-inner rounded">
                             <a class="collapse-item" href="{{ route('addlist.create') }}">Add Edition</a>
                             <a class="collapse-item" href="{{ route('list.index') }}">Edition List</a>
                         </div>
                     </div>
                 </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
                    aria-expanded="true" aria-controls="collapsethree">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Active Editions</span>
                </a>
                <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <a class="collapse-item" href="{{ url('/page1') }}">Page No: 1</a> --}}
                        {{-- <a class="collapse-item" href="page-2.html">Page No: 2</a> --}}
                        {{-- <a class="collapse-item" href="page-3.html">Page No: 3</a> --}}
                        @php
                            $editionlists = editionList()
                        @endphp
                        @foreach ($editionlists as $editionlist)
                        <a class="collapse-item" href="{{ route('pagelist', ['id' => $editionlist->id]) }}">{{ Illuminate\Support\Str::limit($editionlist->edition_title, 15, '...') }}
</a>
                        @endforeach

                        {{-- <a class="collapse-item" href="{{ route('page5.index') }}">Page No: 5</a> --}}
                        {{-- <a class="collapse-item" href="{{ url('/page6') }}">Page No: 6</a> --}}
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
   <!-- Nav Item - Tables -->
   <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/all-template') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>View Templates</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Setting</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ url('/general') }}">General</a>
                        <a class="collapse-item" href="{{ url('/password') }}">Change Password</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
