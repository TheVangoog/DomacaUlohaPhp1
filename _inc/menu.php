<?php
function getMenu(array $pages) {
    $menuItemss = '';
    foreach($pages as $page_name => $page_url) {
        $menuItemss .= "<li><a href=\"$page_url\">$page_name</a></li>";
    }
    return $menuItemss;
}
?>