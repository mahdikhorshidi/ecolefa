<div class="navbar navbar-toggleable-sm flex-row align-items-center white">
    <a data-toggle="collapse" data-target="#navbar-5" class="navbar-item hidden-md-up mr-3">
      <i class="material-icons">&#xe5d2;</i>
    </a>
    @include('schools.partials.brand')

    <!-- navbar collapse -->
    <div class="collapse navbar-collapse" >
      <!-- link and dropdown -->
      <ul class="nav navbar-nav navbar-nav-inline text-center pull-left m-l text-primary-hover">
        <li class="nav-item">
          <a class="nav-link" href>
            <span class="nav-text">
              <i class="material-icons">&#xe039;</i>
              <span class="text-xs">Video</span>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href>
            <span class="nav-text">
              <i class="material-icons">&#xe03d;</i>
              <span class="text-xs">Music</span>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href>
            <span class="nav-text">
              <i class="material-icons">&#xe3c4;</i>
              <span class="text-xs">Photo</span>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href>
            <span class="nav-text">
              <i class="material-icons">&#xe8d2;</i>
              <span class="text-xs">Blog</span>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href>
            <span class="nav-text">
              <i class="material-icons">&#xe8f8;</i>
              <span class="text-xs">Shop</span>
            </span>
          </a>
        </li>
      </ul>
      <!-- / link and dropdown -->
      {{-- <div ui-include="'../views/blocks/navbar.form.html'"></div> --}}
    </div>
    <!-- / navbar collapse -->

    <!-- nabar right -->
    <ul class="nav navbar-nav flex-row align-items-center ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link text-ellipsis" href data-toggle="dropdown">
          <span class="avatar w-32">
              {!! Theme::img('assets/images/a3.jpg', 'User Profile' ); !!}
            <i class="on b-white bottom"></i>
          </span>
          <span class="hidden-md-down nav-text m-l-sm text-left">
            <span class="_500">Rose Martin</span>
            <small class="text-muted">Administrator</small>
          </span>
        </a>
        {{-- <div ui-include="'../views/blocks/dropdown.user.html'"></div> --}}
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href data-toggle="dropdown">
          <i class="material-icons">&#xe5d4;</i>
        </a>
        {{-- <div ui-include="'../views/blocks/dropdown.right.html'"></div> --}}
      </li>
    </ul>
    <!-- / navbar right -->
    
</div>
