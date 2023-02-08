{{--сайдбар будем подключать в страницы и страницы подключать в layout--}}
{{--либо подключить сайдбар в layout, если он будет везде использоваться--}}
<div class="sidebar">
    <nav>
        <ul>
            <li><h1 class="icon-logo logo"></h1></li>
            <li><a href="{{ route('home') }}" class="icon-home"></a></li>
            <li><a href="{{ route('courses') }}" class="icon-courses"></a></li>
            <li><a href="{{ route('profile') }}" class="icon-profile"></a></li>
            <li><a href="{{ route('messages') }}" class="icon-settings"></a></li>
            <li><a href="{{ route('settings') }}" class="icon-settings"></a></li>
            <li class="exit"><a href="" class="icon-exit"></a></li>
        </ul>
    </nav>
</div>
