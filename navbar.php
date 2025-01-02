<?php

function return_navbar($active_link) {
    $menu_items = array(
        array('./index.php', 'Home'),
        array('./about.php', 'O meni'),
        array('./sites.php', 'Omiljene stranice'),
        array('./music.php', 'Muzika'),
        array('./books.php', 'Omiljene knjige'),
        array('./sports.php', 'Sport'),
        array('./projects.php', 'Projekti'),
        array('./guitar.php', 'Gitara'),
    );
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