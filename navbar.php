<?php

function return_navbar($active_link) {
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
    <nav class="nav">
      <div class="burger-btn">
        <span class="material-symbols-outlined"> menu </span>
      </div>

      <ul class="nav-list">';  

    $i = 0;
    foreach($menu_items as $item) {
        if($i === $active_link) {
            $menu_html .= "<li class=\"nav-list__item nav-list__item--active\">
                                <a href=\"$item[0]\">$item[1]</a>
                                <span class=\"nav-list__item-line\"></span>
                            </li>";
        }
        else {
            $menu_html .= "<li class=\"nav-list__item\">
                                <a href=\"$item[0]\">$item[1]</a>
                                <span class=\"nav-list__item-line\"></span>
                            </li>";
        }

        $i++;
    }

    $menu_html .= '</ul></nav>';

    echo $menu_html;
}

?>