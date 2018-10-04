<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'EcoleFa') }}</title>
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

<!-- ############ LAYOUT START-->

    <!-- aside -->
  @include('partials.aside')
  <!-- / -->

  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

            <!-- navbar collapse -->
            <div class="collapse navbar-collapse" id="collapse">
              <!-- link and dropdown -->
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link" href data-toggle="dropdown">
                    <i class="fa fa-fw fa-plus text-muted"></i>
                    <span>جدید</span>
                  </a>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>

              <div ui-include="'../views/blocks/navbar.form.html'"></div>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->

            <!-- navbar right -->
            <ul class="nav navbar-nav flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    {!! Theme::img('assets/images/a0.jpg', 'User Profile'); !!}
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div class="dropdown-menu pull-right dropdown-menu-scale">
                  <a class="dropdown-item" href="/dashboard/profile">
                    <span>پروفایل</span>
                  </a>
                  <a class="dropdown-item" href="/dashboard/profile/edit">
                    <span>ویرایش پروفایل</span>
                    <span class="label primary m-l-xs">3/9</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" ui-sref="app.docs">راهنما</a>

                  <a class="dropdown-item" href="{{ url('/logout') }}"
                     onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">خروج</a>
                  <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; کلیه حقوق برای <strong>ایکلفا</strong> محفوظ است <span class="hidden-xs-down">- توسعه یافته با عشق v0.0.1</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="#">درباره</a>
          <a class="nav-link" href="#">دریافت</a>
        </div>
      </div>
    </div>
    <div class="app-body">

<!-- ############ PAGE START-->
<div class="p-a white lt box-shadow">
	<div class="row">
		<div class="col-sm-6">
			<h4 class="mb-0 _300">سامانه مجازی مدارس</h4>
			<small class="text-muted">سیستم یکپارچه مدیریت مدارس <strong>ایکلفا</strong> </small>
		</div>
		<div class="col-sm-6">
			<div class="m-y-sm pull-right">
				<span class="m-r-sm">شروع مدیریت:</span>
				<div class="btn-group dropdown">
		          <button class="btn white btn-sm ">پروژه ها</button>
		          <button class="btn white btn-sm dropdown-toggle" data-toggle="dropdown"></button>
		          <div class="dropdown-menu dropdown-menu-scale pull-right">
		            <a class="dropdown-item" href>کاربران</a>
		            <a class="dropdown-item" href>کارها</a>
		            <a class="dropdown-item" href>صندوق پیام</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item">پروفایل</a>
		          </div>
		        </div>
	        </div>
		</div>
	</div>
</div>

    @yield('content')
<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->

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
