@if($menu)
    
@endif
<ul class="navbar-nav mx-auto">
<li class="nav-item">
    <a class="nav-link active" href="{{ url('/') }}">{{ __('Главная') }}</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Online Courses</a>
    <div class="dropdown-menu" aria-labelledby="dropdown04">
        <a class="dropdown-item" href="courses.html">HTML</a>
        <a class="dropdown-item" href="courses.html">WordPress</a>
        <a class="dropdown-item" href="courses.html">Web Development</a>
        <a class="dropdown-item" href="courses.html">Javascript</a>
        <a class="dropdown-item" href="courses.html">Photoshop</a>
    </div>

</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
    <div class="dropdown-menu" aria-labelledby="dropdown05">
        <a class="dropdown-item" href="#">HTML</a>
        <a class="dropdown-item" href="#">WordPress</a>
        <a class="dropdown-item" href="#">Web Development</a>
        <a class="dropdown-item" href="#">Javascript</a>
        <a class="dropdown-item" href="#">Photoshop</a>
    </div>

</li>
<li class="nav-item">
    <a class="nav-link" href="blog.html">Blog</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="about.html">About</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contact.html">Contact</a>
</li>
</ul>

<ul class="navbar-nav absolute-right">
@if(Route::has('login'))
    @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
        </li>
    @else
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">{{ __('Логин') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">{{ __('Регистрация') }}</a>
            </li>
        @endif
    @endauth
@endif
</ul>
