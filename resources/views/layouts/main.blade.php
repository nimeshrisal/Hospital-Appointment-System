@include('layouts/header')

<!-- yeild is used to define a section and is constantly used to get content from child page unto a master page -->

    @yield('index')
    @yield('content')
    @yield('appointment')
    @yield('edit')
    @yield('success')
    @yield('search')
    @yield('viewAttendees')
    @yield('viewAttendeesInfo')
    @yield('app_view')
    @yield('loginFailure')


@include('layouts/footer')