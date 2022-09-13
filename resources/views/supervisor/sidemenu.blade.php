<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" navigation-header">
        <span data-i18n="nav.category.layouts">Menu Supervisor</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
        data-placement="right" data-original-title="Layouts"></i>
      </li>
      <li class="active"><a href="{{ route('supervisor.dashboard') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Dashboard</span></a>
      </li>
      <li class=" active"><a href=""><i class="la la-file"></i><span class="menu-title" data-i18n="nav.dash.main">Laporan</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="{{ route('recycle.laporan-belum-potong') }}" data-i18n="nav.dash.ecommerce">Belum Potong</a>
          </li>
          <li class="menu-item"><a class="menu-item" href="{{ route('recycle.laporan-tunggu-buffing') }}" data-i18n="nav.dash.ecommerce">Tunggu Buffing</a>
          </li>
          <li class="menu-item"><a class="menu-item" href="{{ route('recycle.laporan-siap-pouring') }}" data-i18n="nav.dash.ecommerce">Siap Pouring</a>
          </li>
        </ul>
    </li>
      <li class="active"><a href="{{ route('logout') }}"><i class="la la-external-link"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Logout</span></a>
      </li>
    </ul>
  </div>
</div>
