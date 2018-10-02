<!DOCTYPE html>
<html lang="en">
  @include('Partials._head')

  <body>

     @include('Partials._navigation')

        <div class="container">

            @include('Partials._messages')

            @yield('content')

        </div>

    @include('Partials._javascript')
    @yield('scripts')

  </body>


</html>
