<div id="aside" class="app-aside modal nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column">
        <div class="navbar no-radius">
            <!-- brand -->
            <a class="navbar-brand">
                <div ui-include="'/assets/images/logo.svg'"></div>
                <img src="/assets/images/logo.png" alt="." class="hide">
                <span class="hidden-folded inline">ایکُلفا</span>
            </a>
            <!-- / brand -->
        </div>
        <div class="hide-scroll" data-flex>
            <nav class="scroll nav-light">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">منوی اصلی</small>
                    </li>
                    <li>
                        <a href="/dashboard" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">داشبورد</span>
                        </a>
                    </li>
                    <li>
                        <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                            <span class="nav-label">
                      <b class="label rounded label-sm primary">5</b>
                    </span>
                            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">اعضا</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="/dashboard/profile" >
                                    <span class="nav-text">پروفایل</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/school" >
                                    <span class="nav-text">مدرسه</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @hasrole('super-admin')
                    <li class="active">
                        <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">مدیریت</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="/dashboard/admin/users" >
                                    <span class="nav-text">کاربران</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/admin/roles" >
                                    <span class="nav-text">نقش ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/admin/permissions" >
                                    <span class="nav-text">دسترسی ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard/admin/schools" >
                                    <span class="nav-text">مدارس</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endhasrole

                    <li class="nav-header hidden-folded">
                        <small class="text-muted">راهنما</small>
                    </li>
                    <li class="hidden-folded" >
                        <a href="docs.html" >
                            <span class="nav-text">مستندات</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="b-t">
            <div class="nav-fold">
                <a href="profile.html">
        	    <span class="pull-left">
        	      <img src="/assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
                    <span class="clear hidden-folded p-x">
                    @if (!Auth::guest())
                            <span class="block _500">{{ Auth::user()->name }}</span>
                        @endif
                        <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>آنلاین</small>
        	    </span>
                </a>
            </div>
        </div>
    </div>
</div>