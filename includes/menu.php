<?php
require './app/classes/Menu.php';

$menuObj = new Menu();

$links = $menuObj->links();
?>

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..." />
                            <input type="button" class="submit" value=" " />
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            <?php

            foreach ($links as $link) {
                echo '<li class="' . $link['router'] . '">
                <a href="javascript:;">
                    <i class="fa fa-file-text"></i>
                    <span class="title">
                        ' . $link['menu'] . '
                    </span>
                    <span class="arrow ">
                    </span>
                </a>';

                if (!empty($link['submenu'])) {

                    echo '<ul class="sub-menu">';

                    foreach ($link['submenu'] as $subMenu) {
                        echo  '
                        <li>
                            <a href="#">' . $subMenu . '</a>
                        </li>';
                    }
                    echo '</ul>';
                }

                echo '</li>';
            }

            ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>