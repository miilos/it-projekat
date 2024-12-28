<?php

function return_menu($active_link) {
    $menu_items = [
        ['./index.php', 'Home'],
        ['./about.php', 'O meni'],
        ['./sites.php', 'Omiljene stranice'],
        ['./music.php', 'Muzika'],
        ['./books.php', 'Omiljene knjige'],
        ['./sports.php', 'Sport'],
        ['./projects.php', 'Projekti'],
        ['#', 'Page 8'],
    ];
    $menu_html = '
    <div class="phone-menu">
        <div class="phone-menu__close-btn">
            <span class="material-symbols-outlined"> close </span>
        </div>

        <ul class="phone-menu-list">';  

    $i = 0;
    foreach($menu_items as $item) {
        if($i === $active_link) {
            $menu_html .= "<li class=\"phone-menu-list__item phone-menu-list__item--active\">
                                <a href=\"$item[0]\">$item[1]</a>
                                <span class=\"phone-menu-list__item-line\"></span>
                            </li>";
        }
        else {
            $menu_html .= "<li class=\"phone-menu-list__item\">
                                <a href=\"$item[0]\">$item[1]</a>
                                <span class=\"phone-menu-list__item-line\"></span>
                            </li>";
        }

        $i++;
    }

    $menu_html .= '</ul></div>';

    echo $menu_html;
}

?>