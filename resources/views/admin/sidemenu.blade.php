<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" navigation-header">
        <span data-i18n="nav.category.layouts">Menu Admin</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
      </li>
      <li class=" nav-item"><a href="#"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.templates.main">Dashboard</span></a></li>
      <li class=" nav-item"><a href="index.html"><i class="la la-book"></i><span class="menu-title" data-i18n="nav.dash.main">Data Recycle</span></a></li>
      <li class=" nav-item"><a href="index.html"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Pengguna</span></a>
        <ul class="menu-content">
          <li class="menu-item"><a class="menu-item" href="{{ route('admin.dashboard') }}" data-i18n="nav.dash.ecommerce">Dasboard</a>
          </li>
          <li class="menu-item"><a class="menu-item" href="{{ route('pengguna.index') }}" data-i18n="nav.dash.ecommerce">Pengguna</a>
          </li>
          <li><a class="menu-item" href="{{ route('pengguna.create') }}" data-i18n="nav.dash.crypto">Tambah Pengguna</a>
          </li>
        </ul>
    </li>
    <li class="nav-item"><a href="create"><i class="la la-pencil"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Input Data Recycle</span></a></li>
    <li class="active"><a href="{{ route('logout') }}"><i class="la la-external-link"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Logout</span></a></li>
    </ul>
  </div>
</div>
