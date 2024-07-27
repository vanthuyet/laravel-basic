<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="/client/fonts/icomoon/style.css">

  @include('client.layout.partial.css')

</head>

<body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      @include('client.layout.partial.header')
    </header>

    @yield('content')

    <footer class="site-footer border-top">
     @include('client.layout.partial.footer')
    </footer>
  </div>

  @include('client.layout.partial.js')

</body>

</html>