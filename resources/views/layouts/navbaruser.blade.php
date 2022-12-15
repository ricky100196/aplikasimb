<ul class="nav page-navigation">
    <li class="nav-item">
      <a class="nav-link" href={{ route('home') }}>
        <i class="mdi mdi-file-document-box menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
        <a href={{ route('tes') }} class="nav-link">
          <i class="mdi mdi-chart-areaspline menu-icon"></i>
          <span class="menu-title">Ujian Minat dan Bakat</span>
          <i class="menu-arrow"></i>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('riwayat') }}" class="nav-link">
          <i class="mdi mdi-finance menu-icon"></i>
          <span class="menu-title">Riwayat</span>
          <i class="menu-arrow"></i>
        </a>
    </li>
  </ul>
