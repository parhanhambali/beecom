<div class="dashboard">
    <nav id="sidebard" class="bg-dark">
        <ul class="menu">
            <li><?php echo anchor('dashboard', 'Dashboard'); ?></li>
            <li><?php echo anchor('dashboard/karyawan', 'Karyawan'); ?></li>
            <li><?php echo anchor('dashboard/gaji-dan-tunjangan', 'Gaji & Tunjangan'); ?></li>
            <li><?php echo anchor('dashboard/absensi', 'Absensi'); ?></li>
            <li><?php echo anchor('dashboard/posisi', 'posisi'); ?></li>
            <li><?php echo anchor('dashboard/departemen', 'Departemen'); ?></li>
            <li><?php echo anchor('logout', 'Logout'); ?></li>
        </ul>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand bg-light">
            <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
                <i class="fa fa-align-justify"></i>
            </button>

            <a class="navbar-brand logo-dashboard" href="#">PERUSAHAAN</a>
        </nav>

        <div class="container-fluid">
            <!-- INI UNTUK KONTENNYA -->
        </div>
    </div>
</div>