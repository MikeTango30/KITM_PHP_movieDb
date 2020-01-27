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
        case('by_genre'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/filter_films.page.php');
            break;
        case('movie_control'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/movie_control.page.php');
            break;
        case('delete'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/delete_film.page.php');
            break;
        case('update'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/update_film.page.php');
            break;
        case('categories_control'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/categories_control.page.php');
            break;
        case('add_category'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/add_category.page.php');
            break;
        case('delete_category'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/delete_category.page.php');
            break;
        case('login'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/login.page.php');
            break;
        case('logof'):
            include ('templates/'.ACTIVE_TEMPLATE.'/pages/logof.page.php');
            break;
        default: include ('templates/'.ACTIVE_TEMPLATE.'/pages/all_movie.page.php');
            break;
    }
}