<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="{{ route('any', 'index') }}" id="topnav-dashboard" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard me-1"></i> Dashboard
                        </a>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-invert-colors me-1"></i> UI Elements <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu dropdown-mega-menu-xl" aria-labelledby="topnav-ui">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{ route('second', ['ui', 'buttons']) }}" class="dropdown-item">Buttons</a>
                                        <a href="{{ route('second', ['ui', 'cards']) }}" class="dropdown-item">Cards</a>
                                        <a href="{{ route('second', ['ui', 'avatars']) }}" class="dropdown-item">Avatars</a>
                                        <a href="{{ route('second', ['ui', 'tabs-accordions']) }}" class="dropdown-item">Tabs & Accordions</a>
                                        <a href="{{ route('second', ['ui', 'modals']) }}" class="dropdown-item">Modals</a>
                                        <a href="{{ route('second', ['ui', 'progress']) }}" class="dropdown-item">Progress</a>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{ route('second', ['ui', 'notifications']) }}" class="dropdown-item">Notifications</a>
                                        <a href="{{ route('second', ['ui', 'offcanvas']) }}" class="dropdown-item">Offcanvas</a>
                                        <a href="{{ route('second', ['ui', 'placeholders']) }}" class="dropdown-item">Placeholders</a>
                                        <a href="{{ route('second', ['ui', 'spinners']) }}" class="dropdown-item">Spinners</a>
                                        <a href="{{ route('second', ['ui', 'images']) }}" class="dropdown-item">Images</a>
                                        <a href="{{ route('second', ['ui', 'carousel']) }}" class="dropdown-item">Carousel</a>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{ route('second', ['ui', 'video']) }}" class="dropdown-item">Embed Video</a>
                                        <a href="{{ route('second', ['ui', 'dropdowns']) }}" class="dropdown-item">Dropdowns</a>
                                        <a href="{{ route('second', ['ui', 'tooltips-popovers']) }}" class="dropdown-item">Tooltips & Popovers</a>
                                        <a href="{{ route('second', ['ui', 'general']) }}" class="dropdown-item">General UI</a>
                                        <a href="{{ route('second', ['ui', 'typography']) }}" class="dropdown-item">Typography</a>
                                        <a href="{{ route('second', ['ui', 'grid']) }}" class="dropdown-item">Grid</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-grid me-1"></i> Apps <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">

                            <a href="{{ route('second', ['apps', 'calendar']) }}" class="dropdown-item">Calendar</a>
                            <a href="{{ route('second', ['apps', 'chat']) }}" class="dropdown-item">Chat</a>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Email <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="{{ route('second', ['email', 'inbox']) }}" class="dropdown-item">Inbox</a>
                                    <a href="{{ route('second', ['email', 'templates']) }}" class="dropdown-item">Email Templates</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tasks <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="{{ route('second', ['task', 'details']) }}" class="dropdown-item">Details</a>
                                    <a href="{{ route('second', ['task', 'kanban-board']) }}" class="dropdown-item">Kanban Board</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none" href="apps-projects.html" id="topnav-contact"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    Projects
                                </a>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contacts"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contacts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contacts">
                                    <a href="contacts-list.html" class="dropdown-item">Members List</a>
                                    <a href="{{ route('second', ['contacts', 'profile']) }}" class="dropdown-item">Profile</a>
                                </div>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-lifebuoy me-1"></i> Components <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <a href="widgets.html" class="dropdown-item">Widgets</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extendedui"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Extended UI <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-extendedui">
                                    <a href="{{ route('second', ['extended', 'range-slider']) }}" class="dropdown-item">Range Slider</a>
                                    <a href="{{ route('second', ['extended', 'sweet-alert']) }}" class="dropdown-item">Sweet Alert</a>
                                    <a href="{{ route('second', ['extended', 'draggable-cards']) }}" class="dropdown-item">Draggable Cards</a>
                                    <a href="{{ route('second', ['extended', 'tour']) }}" class="dropdown-item">Tour Page</a>
                                    <a href="{{ route('second', ['extended', 'notification']) }}" class="dropdown-item">Notification</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Forms <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="{{ route('second', ['forms', 'elements']) }}" class="dropdown-item">General Elements</a>
                                    <a href="{{ route('second', ['forms', 'advanced']) }}" class="dropdown-item">Advanced</a>
                                    <a href="{{ route('second', ['forms', 'validation']) }}" class="dropdown-item">Validation</a>
                                    <a href="{{ route('second', ['forms', 'wizard']) }}" class="dropdown-item">Wizard</a>
                                    <a href="{{ route('second', ['forms', 'quilljs']) }}" class="dropdown-item">Quilljs Editor</a>
                                    <a href="{{ route('second', ['forms', 'pickers']) }}" class="dropdown-item">Pickers</a>
                                    <a href="{{ route('second', ['forms', 'file-uploads']) }}" class="dropdown-item">File Uploads</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Charts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="{{ route('second', ['charts', 'flot']) }}" class="dropdown-item">Flot Charts</a>
                                    <a href="{{ route('second', ['charts', 'morris']) }}" class="dropdown-item">Morris Charts</a>
                                    <a href="{{ route('second', ['charts', 'chartjs']) }}" class="dropdown-item">Chartjs Charts</a>
                                    <a href="{{ route('second', ['charts', 'sparklines']) }}" class="dropdown-item">Sparklines Charts</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tables <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="{{ route('second', ['tables', 'basic']) }}" class="dropdown-item">Basic Tables</a>
                                    <a href="{{ route('second', ['tables', 'datatables']) }}" class="dropdown-item">Data Tables</a>
                                    <a href="{{ route('second', ['tables', 'editable']) }}" class="dropdown-item">Editable Tables</a>
                                    <a href="{{ route('second', ['tables', 'responsive']) }}" class="dropdown-item">Responsive Tables</a>
                                    <a href="{{ route('second', ['tables', 'tablesaw']) }}" class="dropdown-item">Tablesaw Tables</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Icons <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="{{ route('second', ['icons', 'feather']) }}" class="dropdown-item">Feather Icons</a>
                                    <a href="{{ route('second', ['icons', 'mdi']) }}" class="dropdown-item">Material Design Icons</a>
                                    <a href="{{ route('second', ['icons', 'dripicons']) }}" class="dropdown-item">Dripicons</a>
                                    <a href="{{ route('second', ['icons', 'font-awesome']) }}" class="dropdown-item">Font Awesome 5</a>
                                    <a href="{{ route('second', ['icons', 'themify']) }}" class="dropdown-item">Themify</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Maps <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="{{ route('second', ['maps', 'google']) }}" class="dropdown-item">Google Maps</a>
                                    <a href="{{ route('second', ['maps', 'vector']) }}" class="dropdown-item">Vector Maps</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-cards-outline me-1"></i> Pages <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Auth Style <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="{{ route('second', ['auth', 'login']) }}" class="dropdown-item">Log In</a>
                                    <a href="{{ route('second', ['auth', 'register']) }}" class="dropdown-item">Register</a>
                                    <a href="{{ route('second', ['auth', 'recoverpw']) }}" class="dropdown-item">Recover Password</a>
                                    <a href="{{ route('second', ['auth', 'lock-screen']) }}" class="dropdown-item">Lock Screen</a>
                                    <a href="{{ route('second', ['auth', 'confirm-mail']) }}" class="dropdown-item">Confirm Mail</a>
                                    <a href="{{ route('second', ['auth', 'logout']) }}" class="dropdown-item">Logout</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Errors <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-error">
                                    <a href="{{ route('second', ['pages', 'error-404']) }}" class="dropdown-item">Error 404</a>
                                    <a href="{{ route('second', ['pages', 'error-500']) }}" class="dropdown-item">Error 500</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Utility <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="{{ route('second', ['pages', 'pricing']) }}" class="dropdown-item">Pricing</a>
                                    <a href="{{ route('second', ['pages', 'timeline']) }}" class="dropdown-item">Timeline</a>
                                    <a href="{{ route('second', ['pages', 'invoice']) }}" class="dropdown-item">Invoice</a>
                                    <a href="{{ route('second', ['pages', 'faqs']) }}" class="dropdown-item">FAQs</a>
                                    <a href="{{ route('second', ['pages', 'maintenance']) }}" class="dropdown-item">Maintenance</a>
                                    <a href="{{ route('second', ['pages', 'coming-soon']) }}" class="dropdown-item">Coming Soon</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-card-bulleted-settings-outline me-1"></i> Layouts <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <a href="{{ route('second', ['layouts-eg', 'horizontal']) }}" class="dropdown-item">Horizontal</a>
                            <a href="{{ route('any', 'index') }}" class="dropdown-item">Vertical</a>
                            <a href="{{ route('second', ['layouts-eg', 'preloader']) }}" class="dropdown-item">Preloader</a>
                        </div>
                    </li>
                </ul> <!-- end navbar-->
            </div> <!-- end .collapsed-->
        </nav>
    </div> <!-- end container-fluid -->
</div> <!-- end topnav-->
