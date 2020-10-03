<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('dashboard.index')}}"><img src="../assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Management</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="detail">
                        @if(\Illuminate\Support\Facades\Auth::check())
                        <h4>{{\Illuminate\Support\Facades\Auth::user()->nom.' '.\Illuminate\Support\Facades\Auth::user()->prenom}}</h4>
                        <small>{{\Illuminate\Support\Facades\Auth::user()->getRole()}}</small>
                        @endif
                    </div>
                </div>
            </li>
            <!--li class="{{--Request::segment(1) === 'dashboard' ? 'active open' : null --}}"><a href="{{--route('dashboard.index')--}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li-->
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('sales.index')}}"><i class="zmdi zmdi-home"></i><span>Offres</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('produits.index')}}"><i class="zmdi zmdi-shopping-cart"></i><span>Produit</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('users.index')}}"><i class="zmdi zmdi-account"></i><span>Utilisateurs</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('logout')}}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>déconnecter</span></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</aside>
