<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($active==='dashboard') active @endif" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active==='clubs') active @endif" aria-current="page" href="{{ route('club.index') }}">Clubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($active==='simulator') active @endif" href="{{ route('simulator') }}">Simulator</a>
                </li>
            </ul>
        </div>
    </div>
</nav>