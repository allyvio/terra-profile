@include('layouts._header')

<body>
  <div class="preloader">
    <div class="loading">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  </div>
  @yield('content')
  @include('layouts._footer')
  @include('layouts._script')
</body>

</html>