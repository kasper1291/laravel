
@include('layouts.header')

@if(Request::is('/'))
    <h1>This is test</h1>
@endif
    @yield('content')


@include('layouts.footer')
