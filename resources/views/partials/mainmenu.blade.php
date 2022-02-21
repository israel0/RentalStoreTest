
            <div class="mobile-menu-bar">
                <a href="" class="d-flex me-auto">
                    <img alt="" class="w-6" src="{{Help::getDefaultLogo()}} ">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler" class="mobile-menu-bar__toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white"></i> </a>
            </div>

            <ul class="mobile-menu-wrapper border-top border-theme-29 dark-border-dark-3 py-5">
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title">
                            Dashboard
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('home') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview  </div>
                            </a>
                        </li>
                      
                    </ul>
                </li>
            
                <li>
                    <a href="javascript:;html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                        <div class="side-menu__title">
                            Items
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('items.index') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Manage </div>
                            </a>
                        </li>
                      
                       
                    </ul>
                </li>
            
            
                <li>
                    <a href="{{ route('reports') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="side-menu__title"> Monthly Reports </div>
                    </a>
                </li>
                 
            </ul>
