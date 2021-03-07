<link rel="stylesheet" href="css/nav.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">

<header>
    <nav id="navbar">
        <ul class="navlist">
            
            @guest
            <li class="nav-item">
                <a class="navlink" href="/index">Home</a>
            </li>
            <li class="nav-item">
                <a class="navlink" href="/login">Login</a>
            </li>
            @else
            <li class="nav-item">
                <a class="navlink" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="navlink" href="/login">Logout</a>
            </li>
            @endguest
        </ul>
        @if(session('status'))
            <br>
            {{ session('status') }}
        @endif
    </nav>
</header>