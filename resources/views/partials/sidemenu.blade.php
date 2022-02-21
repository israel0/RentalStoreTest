<a href="" class="intro-x d-flex align-items-center ps-5 pt-4">
    <img alt="Rental Store Template Israel Akinsola" class="w-6" src="{{ Help::getDefaultLogo() }}">
    <span class="d-none d-xl-block text-white fs-lg ms-3"> Rental<span class="fw-medium">Store</span> </span>
</a>

<div class="side-nav__devider my-6"></div>

<ul>
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
        <a href="javascript:;html" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
            <div class="side-menu__title">
                Users
                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
            </div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('users.index') }}" class="side-menu">
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