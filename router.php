<?php

if (isset($_GET['page'])) {
    switch (htmlspecialchars($_GET['page'])) {
        case('newest'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/newest.page.php');
            break;
        case('all'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/all_movie.page.php');
            break;
        case('search'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/search.page.php');
            break;
        case('profile'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/profile.page.php');
            break;
        case('statistics'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/stats.page.php');
            break;
        case('add'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/add_movie.page.php');
            break;
    }
}