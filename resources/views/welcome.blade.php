<!DOCTYPE html>
<html>
<head>
    <title>Welcome </title>
</head>
<body>
    <header>
        <nav>
            <ul>
               
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <div class="content">
            <h1>Welcome </h1>
           
        </div>
    </div>
</body>
</html>
