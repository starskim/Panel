<!--begin: User Bar -->
<div class="kt-header__topbar-item kt-header__topbar-item--user">
  <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px, 0px">
    <!--use "kt-rounded" class for rounded avatar style-->
    <div class="kt-header__topbar-user kt-rounded-">
      <span class="kt-header__topbar-username kt-hidden-mobile">{{$user->name}}</span>
      <img alt="Pic" src="{{$user->avatar}}" class="kt-rounded-"/>
      <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
      <span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold">S</span>
    </div>
  </div>
  <div
    class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
    @include('common.partials._dropdown-user-solid')
  </div>
</div>
<!--end: User Bar -->
