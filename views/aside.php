<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link <?= ($page === 'dashboard') ? '' : 'collapsed' ?>" href="dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link <?= ($page === 'usersprofile') ? '' : 'collapsed' ?>" href="usersprofile">
        <i class="bi bi-person"></i>
        <span>Players Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link <?= ($page === 'products') ? '' : 'collapsed' ?>" href="products">
        <i class="bi bi-cart"></i>
        <span>Products</span>
        </a>
    </li><!-- End products Page Nav -->

    <li class="nav-item">
        <a class="nav-link <?= ($page === 'news') ? '' : 'collapsed' ?>" href="news">
        <i class="bi bi-journal-text"></i>
        <span>News</span>
        </a>
    </li><!-- End news Nav -->

    <li class="nav-item">
        <a class="nav-link <?= ($page === 'logout') ? '' : 'collapsed' ?>" href="login">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Sign Out</span>
        </a>
    </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->