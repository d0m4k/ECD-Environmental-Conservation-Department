<?php
require_once __DIR__.'/../functions.php';
function render_breadcrumb_nav()
{

    // still need to be clean ( future fix ** )
    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $parts = explode('/', $uri);

    echo '<div class="breadcrumb">';
    echo '<a href="/">အဖွင့်စာမျက်နှာ</a>';

    if (empty($uri)) {
        echo '</div>';
        return;
    }

    $path = '';
    $count = count($parts);
    // print_r($parts);
    foreach ($parts as $index => $slug) {
        $path .= '/' . $slug;
        $label = translate_route_names($slug);

        if ($index < $count - 1) {
            echo ' / <a href="' . $path . '">' . htmlspecialchars($label) . '</a>';
        } else {
            if(!empty($_GET['n'])){
                echo ' / <a href="'.$path.'">' . htmlspecialchars($label) . '</a>';
            }else{
                echo ' / <span>' . htmlspecialchars($label) . '</span>';
            }
        }
    }
    // Append query param ?n=TITLE if present
    if (!empty($_GET['n'])) {
        echo ' / <span>' . htmlspecialchars(urldecode($_GET['n'])) . '</span>';
    }

    echo '</div>';
}
