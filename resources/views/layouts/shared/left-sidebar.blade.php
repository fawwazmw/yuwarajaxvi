<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <img src="/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"
                    aria-expanded="false">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

            <p class="text-muted left-user-info">
                @if (Auth::user()->role == 'admin')
                    Admin
                @elseif(Auth::user()->role == 'teacher')
                    SPV
                @elseif(Auth::user()->role == 'student')
                    Mahasiswa
                @endif
            </p>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-muted left-user-info">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('any', 'index') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="{{ route('second', ['apps', 'calendar']) }}">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span> Calendar </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('second', ['apps', 'chat']) }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Chat </span>
                    </a>
                </li>

                <li>
                    <a href="#email" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Email </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="email">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['email', 'inbox']) }}">Inbox</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['email', 'templates']) }}">Email Templates</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTasks" data-bs-toggle="collapse">
                        <i class="mdi mdi-clipboard-outline"></i>
                        <span> Tasks </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['task', 'kanban-board']) }}">Kanban Board</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['task', 'details']) }}">Details</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('second', ['apps', 'projects']) }}">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span> Projects </span>
                    </a>
                </li>

                <li>
                    <a href="#contacts" data-bs-toggle="collapse">
                        <i class="mdi mdi-book-open-page-variant-outline"></i>
                        <span> Contacts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="contacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['contacts', 'list']) }}">Members List</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['contacts', 'profile']) }}">Profile</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Custom</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-plus-outline"></i>
                        <span> Auth Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['auth', 'login']) }}">Log In</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['auth', 'register']) }}">Register</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['auth', 'recoverpw']) }}">Recover Password</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['auth', 'lock-screen']) }}">Lock Screen</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['auth', 'confirm-mail']) }}">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['auth', 'logout']) }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-file-multiple-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['pages', 'starter']) }}">Starter</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['pages', 'pricing']) }}">Pricing</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['pages', 'timeline']) }}">Timeline</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['pages', 'invoice']) }}">Invoice</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['pages', 'faq']) }}">FAQs</a>
                            </li>

                            <li>
                                <a href="{{ route('second', ['pages', 'error-404']) }}">Error 404</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['pages', 'error-500']) }}">Error 500</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['pages', 'maintenance']) }}">Maintenance</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['pages', 'coming-soon']) }}">Coming Soon</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarLayouts" data-bs-toggle="collapse">
                        <i class="mdi mdi-dock-window"></i>
                        <span> Layouts </span>
                        <span class="menu-arrow"></span>

                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['layouts-eg', 'horizontal']) }}">Horizontal</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['layouts-eg', 'preloader']) }}">Preloader</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Components</li>

                <li>
                    <a href="#sidebarBaseui" data-bs-toggle="collapse">
                        <i class="mdi mdi-briefcase-outline"></i>
                        <span> Base UI </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBaseui">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['ui', 'buttons']) }}">Buttons</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'cards']) }}">Cards</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'avatars']) }}">Avatars</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'tabs-accordions']) }}">Tabs & Accordions</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'modals']) }}">Modals</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'progress']) }}">Progress</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'notifications']) }}">Notifications</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'offcanvas']) }}">Offcanvas</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'placeholders']) }}">Placeholders</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'spinners']) }}">Spinners</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'images']) }}">Images</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'carousel']) }}">Carousel</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'video']) }}">Embed Video</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'dropdowns']) }}">Dropdowns</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'tooltips-popovers']) }}">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'general']) }}">General UI</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'typography']) }}">Typography</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['ui', 'grid']) }}">Grid</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('any', 'widgets') }}">
                        <i class="mdi mdi-gift-outline"></i>
                        <span> Widgets </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarExtendedui" data-bs-toggle="collapse">
                        <i class="mdi mdi-layers-outline"></i>
                        <span class="badge bg-info float-end">Hot</span>
                        <span> Extended UI </span>
                    </a>
                    <div class="collapse" id="sidebarExtendedui">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['extended', 'range-slider']) }}">Range Slider</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['extended', 'sweet-alert']) }}">Sweet Alert</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['extended', 'draggable-cards']) }}">Draggable Cards</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['extended', 'tour']) }}">Tour Page</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['extended', 'notification']) }}">Notification</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarIcons" data-bs-toggle="collapse">
                        <i class="mdi mdi-shield-outline"></i>
                        <span> Icons </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['icons', 'feather']) }}">Feather Icons</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['icons', 'mdi']) }}">Material Design Icons</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['icons', 'dripicons']) }}">Dripicons</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['icons', 'font-awesome']) }}">Font Awesome 5</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['icons', 'themify']) }}">Themify</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarForms" data-bs-toggle="collapse">
                        <i class="mdi mdi-texture"></i>
                        <span> Forms </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarForms">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['forms', 'elements']) }}">General Elements</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['forms', 'advanced']) }}">Advanced</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['forms', 'validation']) }}">Validation</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['forms', 'wizard']) }}">Wizard</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['forms', 'quilljs']) }}">Quilljs Editor</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['forms', 'pickers']) }}">Picker</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['forms', 'file-uploads']) }}">File Uploads</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTables" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['tables', 'basic']) }}">Basic Tables</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['tables', 'datatables']) }}">Data Tables</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['tables', 'editable']) }}">Editable Tables</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['tables', 'responsive']) }}">Responsive Tables</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['tables', 'tablesaw']) }}">Tablesaw Tables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCharts" data-bs-toggle="collapse">
                        <i class="mdi mdi-chart-donut-variant"></i>
                        <span> Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['charts', 'flot']) }}">Flot Charts</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['charts', 'morris']) }}">Morris Charts</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['charts', 'chartjs']) }}">Chartjs Charts</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['charts', 'sparklines']) }}">Sparkline Charts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarMaps" data-bs-toggle="collapse">
                        <i class="mdi mdi-map-outline"></i>
                        <span> Maps </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('second', ['maps', 'google']) }}">Google Maps</a>
                            </li>
                            <li>
                                <a href="{{ route('second', ['maps', 'vector']) }}">Vector Maps</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                    Second Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel2">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                    Third Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel3">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                                Item 2 <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarMultilevel4">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
