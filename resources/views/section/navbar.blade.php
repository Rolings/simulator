<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($active==='dashboard') active @endif" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if($active==='clubs') active @endif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clubs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('club.index') }}">List</a></li>
                        <li><a class="dropdown-item" href="{{ route('club.create') }}">Create</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if($active==='simulator') active @endif" href="{{ route('simulator') }}">Simulator</a>
                </li>
            </ul>
        </div>
    </div>
</nav>