<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Skaityti daugiau</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <?php foreach ($menus["sideNavigation"] as $menuKey => $menuItem): ?>
            <?php if ($menuKey === "home"): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?= $menuItem ?><span class="sr-only">(current)</span></a>
                </li>
            <?php endif; ?>
            <?php if ($menuKey === "controls"): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $menuItem ?>
                </a>
                <?php endif; ?>
                <?php if ($menuKey === "menuDropdown"): ?>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <?php foreach ($menuItem as $dropdownKey => $dropdownItem): ?>
                            <?php if ($dropdownKey === "logOf"): ?>
                                <div class="dropdown-divider"></div>
                            <?php endif; ?>
                            <a class="dropdown-item" href="#"><?= $dropdownItem ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </li>
        </ul>
    </div>
</nav>
