<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $pageTitle ?? 'Page Title' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Livewire Combo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item  {{ (request()->routeIs('counter')) ? 'active' : '' }}">
                  <a class="nav-link" href="/counter">Counter</a>
                </li>
                <li class="nav-item  {{ (request()->routeIs('calculator')) ? 'active' : '' }}">
                  <a class="nav-link" href="/calculator">Calculator</a>
                </li>
                <li class="nav-item  {{ (request()->routeIs('cascading-dropdown')) ? 'active' : '' }}">
                  <a class="nav-link" href="/cascading-dropdown">Cascading Dropdown</a>
                </li>
                <li class="nav-item  {{ (request()->routeIs('product')) ? 'active' : '' }}">
                  <a class="nav-link" href="/product">Products</a>
                </li>
              </ul>
              
            </div>
          </nav>
        {{ $slot }}
    </body>
</html>
