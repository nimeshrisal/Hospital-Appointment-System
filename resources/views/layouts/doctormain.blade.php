@include('layouts/doctorheader')

<!-- yeild is used to define a section and is constantly used to get content from child page unto a master page -->

    @yield('index')
    @yield('login')
    @yield('appointment')
    @yield('edit')
    @yield('success')
    @yield('search')
    @yield('viewAttendees')
    @yield('viewAttendeesInfo')
    @yield('app_view')
    @yield('loginFailure')
    @yield('content')


@include('layouts/footer')