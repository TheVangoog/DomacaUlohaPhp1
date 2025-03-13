<?php
function getMenu(array $pages) {
    $menuItemss = '';
    foreach($pages as $page_name => $page_url) {
        if($page_name == 'External') {
            $menuItemss .= "<li><a href=\"$page_url\" target=\"_blank\">$page_name</a></li>";
            continue;
        }
        $menuItemss .= "<li><a href=\"$page_url\">$page_name</a></li>";
    }
    return $menuItemss;
}
?>