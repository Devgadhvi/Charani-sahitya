<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="wrap-header">
    <header class="header flat-header lh-header header-style1">
        <div class="site-header-inner">
            <div class="container">
                <div id="logo" class="logo">
                    <a href="index.html" class="text-xl-start"> Charani Sahitya</a>
                </div>
                <div class="mobile-button"><span></span></div>
                <div class="header-menu">
                    <nav id="main-nav" class="main-nav">
                        <ul class="menu">
                            <li>
                                <div class="input-group input-group-sm mb-3p">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn" type="button">
                                            <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </li>
                            <li><a href="index.php" class="menu-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                            <li><a href="poets.php" class="menu-item <?php echo ($current_page == 'poets.php') ? 'active' : ''; ?>">Poets</a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- header -->
</div>