<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/dashboard">
                        {{-- <img src="{{ asset('mazer/images/logo/logo.png') }}" alt="Logo" srcset=""> --}}
                        <h3 class="text-success"> Rumah Syurga</h3>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                
                {{-- Dashboard --}}
                <li
                    class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- Pengguna --}}

                <li
                    class="sidebar-item has-sub {{ ($title === 'Pengguna') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-users-line"></i>
                        <span>Pengguna</span>
                    </a>
                    <ul class="submenu {{ ($title === 'Pengguna') ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('pengguna')) ? 'active' : ''  }}">
                            <a href="/pengguna">Dashboard</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('pengguna/daftar')) ? 'active' : ''  }}">
                            <a href="/pengguna/daftar">Daftar Pengguna</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('pengguna/ditangguhkan')) ? 'active' : ''  }}">
                            <a href="/pengguna/ditangguhkan">Daftar Ditangguhkan</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('pengguna/dihapus')) ? 'active' : ''  }}">
                            <a href="/pengguna/dihapus">Daftar Dihapus</a>
                        </li>
                    </ul>
                </li>

                {{-- Admin Sistem --}}

                <li
                    class="sidebar-item has-sub {{ ($title === 'Admin') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-user-shield"></i>
                        <span>Admin Sistem</span>
                    </a>
                    <ul class="submenu {{ ($title === 'Admin') ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('admin')) ? 'active' : ''  }}">
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('admin-daftar')) ? 'active' : ''  }}">
                            <a href="/admin-daftar">Daftar Admin</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('admin-ditangguhkan')) ? 'active' : ''  }}">
                            <a href="/admin-ditangguhkan">Admin Ditangguhkan</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('admin-dihapus')) ? 'active' : ''  }}">
                            <a href="/admin-dihapus">Admin Dihapus</a>
                        </li>
                    </ul>
                </li>

                {{-- Konsultasi --}}

                <li
                    class="sidebar-item has-sub {{ ($title === 'Konsultasi') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-user-doctor"></i>
                        <span>Konsultasi</span>
                    </a>
                    <ul class="submenu {{ ($title === 'Konsultasi') ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('konsultasi-chat')) ? 'active' : ''  }}">
                            <a href="/konsultasi-chat">Chat</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('konsultasi-transaksi')) ? 'active' : ''  }}">
                            <a href="/konsultasi-transaksi">Transaksi</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('konsultasi-pertemuan')) ? 'active' : ''  }}">
                            <a href="/konsultasi-pertemuan">Daftar Pertemuan</a>
                        </li>
                    </ul>
                </li>

                {{-- Artikel --}}

                <li
                    class="sidebar-item has-sub {{ ($title === 'Artikel') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-newspaper"></i>
                        <span>Artikel</span>
                    </a>
                    <ul class="submenu {{ ($title === 'Artikel') ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('artikel')) ? 'active' : ''  }}">
                            <a href="/artikel">Artikel</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('artikel/daftar')) ? 'active' : ''  }}">
                            <a href="/artikel/daftar">Daftar Artikel</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('artikel/jenis')) ? 'active' : ''  }}">
                            <a href="/artikel/jenis">Jenis Artikel</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('artikel/transaksi')) ? 'active' : ''  }}">
                            <a href="/artikel/transaksi">Transaksi</a>
                        </li>
                    </ul>
                </li>

                {{-- Wedding Organizer --}}

                <li
                    class="sidebar-item has-sub {{ ($title === 'WO') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-venus-mars"></i>
                        <span>Wedding Organizer</span>
                    </a>
                    <ul class="submenu {{ ($title === 'WO') ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('wedding')) ? 'active' : ''  }}">
                            <a href="/wedding">WO</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('wedding/daftar')) ? 'active' : ''  }}">
                            <a href="/wedding/daftar">Daftar WO</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('wedding/jenis')) ? 'active' : ''  }}">
                            <a href="/wedding/jenis">Jenis WO</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('wedding/transaksi')) ? 'active' : ''  }}">
                            <a href="/wedding/transaksi">Transaksi</a>
                        </li>
                    </ul>
                </li>

                {{-- Training --}}

                <li
                    class="sidebar-item has-sub {{ ($title === 'Training') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-users-viewfinder"></i>
                        <span>Training</span>
                    </a>
                    <ul class="submenu {{ ($title === 'Training') ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('training')) ? 'active' : ''  }}">
                            <a href="/training">Training</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('training/daftar')) ? 'active' : ''  }}">
                            <a href="/training/daftar">Daftar Training</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('training/kategori')) ? 'active' : ''  }}">
                            <a href="/training/kategori">Kategori</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('training/transaksi')) ? 'active' : ''  }}">
                            <a href="/training/transaksi">Transaksi</a>
                        </li>
                    </ul>
                </li>

                {{-- Kota --}}

                <li
                    class="sidebar-item {{ Request::is('kota') ? 'active' : '' }}">
                    <a href="/kota" class='sidebar-link'>
                        <i class="fa-solid fa-building"></i>
                        <span>Kota</span>
                    </a>
                </li>

                {{-- Pendidikan --}}

                <li
                    class="sidebar-item {{ Request::is('pendidikan') ? 'active' : '' }}">
                    <a href="/pendidikan" class='sidebar-link'>
                        <i class="fa-solid fa-user-graduate"></i>
                        <span>Pendidikan</span>
                    </a>
                </li>

                {{-- Pembayaran --}}

                <li
                    class="sidebar-item {{ Request::is('pembayaran') ? 'active' : '' }}">
                    <a href="/pembayaran" class='sidebar-link'>
                        <i class="fa-solid fa-credit-card"></i>
                        <span>Pembayaran</span>
                    </a>
                </li>

                {{-- Laporan --}}

                <li
                    class="sidebar-item has-sub {{ ($title === 'Laporan') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-file-lines"></i>
                        <span>Laporan</span>
                    </a>
                    <ul class="submenu {{ ($title === 'Laporan') ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('laporan')) ? 'active' : ''  }}">
                            <a href="/laporan">Dashboard</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('laporan/artikel')) ? 'active' : ''  }}">
                            <a href="/laporan/artikel">Artikel</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('laporan/wedding')) ? 'active' : ''  }}">
                            <a href="/laporan/wedding">Wedding Organizer</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('laporan/training')) ? 'active' : ''  }}">
                            <a href="/laporan/training">Training</a>
                        </li>
                    </ul>
                </li>

                {{-- Faq & Tips --}}

                <li
                    class="sidebar-item {{ Request::is('faq&tips') ? 'active' : '' }}">
                    <a href="/faq&tips" class='sidebar-link'>
                        <i class="fa-solid fa-bars-progress"></i>
                        <span>Faq & Tips</span>
                    </a>
                </li>

                {{-- Logout --}}

                <li
                    class="sidebar-item">
                    <a href="/" class='sidebar-link'>
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>