<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'School') }}</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{!! Theme::url('assets/images/logo.png'); !!}">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{!! Theme::url('assets/images/logo.png'); !!}">

  {!! Theme::css('assets/font-awesome/css/font-awesome.min.css'); !!}

  <!-- style -->
  {!! Theme::css('assets/animate.css/animate.min.css'); !!}
  {!! Theme::css('assets/glyphicons/glyphicons.css'); !!}
  {!! Theme::css('assets/font-awesome/css/font-awesome.min.css'); !!}
  {!! Theme::css('assets/material-design-icons/material-design-icons.css'); !!}

  {!! Theme::css('assets/bootstrap/dist/css/bootstrap.min.css'); !!}
    <!-- build:css /assets/styles/app.min.css -->
  {!! Theme::css('assets/styles/app.css'); !!}
    <!-- endbuild -->
  {!! Theme::css('assets/styles/font.css'); !!}
  {!! Theme::css('assets/bootstrap-rtl/dist/bootstrap-rtl.css'); !!}
  {!! Theme::css('assets/styles/app.rtl.css'); !!}
</head>
<body>
<div class="app" id="app">
    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <div class="app-header white box-shadow">
        @include('default.schools.partials.header')
        </div>
        <div class="app-footer white box-shadow">
        @include('default.schools.partials.footer')
        </div>
        <div class="app-body">
        @yield('content')
</div>
</div>
</div>
<!-- build:js /scripts/app.html.js -->
<!-- jQuery --> 
{!! Theme::js('libs/jquery/jquery/dist/jquery.js'); !!}
<!-- Bootstrap -->
{!! Theme::js('libs/jquery/tether/dist/js/tether.min.js'); !!}
{!! Theme::js('libs/jquery/bootstrap/dist/js/bootstrap.js'); !!}
<!-- core -->
{!! Theme::js('libs/jquery/underscore/underscore-min.js'); !!}
{!! Theme::js('libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js'); !!}
{!! Theme::js('libs/jquery/PACE/pace.min.js'); !!}

{!! Theme::js('scripts/config.lazyload.js'); !!}

{!! Theme::js('scripts/palette.js'); !!}
{!! Theme::js('scripts/ui-load.js'); !!}
{!! Theme::js('scripts/ui-jp.js'); !!}
{!! Theme::js('scripts/ui-include.js'); !!}
{!! Theme::js('scripts/ui-device.js'); !!}
{!! Theme::js('scripts/ui-form.js'); !!}
{!! Theme::js('scripts/ui-nav.js'); !!}
{!! Theme::js('scripts/ui-screenfull.js'); !!}
{!! Theme::js('scripts/ui-scroll-to.js'); !!}
{!! Theme::js('scripts/ui-toggle-class.js'); !!}

{!! Theme::js('scripts/app.js'); !!}

<!-- ajax -->
{!! Theme::js('libs/jquery/jquery-pjax/jquery.pjax.js'); !!}
{!! Theme::js('scripts/ajax.js'); !!}
<!-- endbuild -->

</body>
</html>
