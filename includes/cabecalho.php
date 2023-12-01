<?php
require './app/classes/Notification.php';
require './app/classes/Inbox.php';
require './app/classes/Task.php';

$notificationObj = new Notification();
$inboxObj = new Inbox();
$taskObj = new Task();

$notifications = $notificationObj->notifications();
$inboxs = $inboxObj->inboxs();
$tasks = $taskObj->tasks();

$totalNotification = $notificationObj->total();
$totalInbox = $inboxObj->total();
$totalTaskObj = $taskObj->total();

?>


<header class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="header-inner">
        <!-- BEGIN LOGO -->
        <a class="navbar-brand" href="index.html">
            <img src="assets/img/logo.png" alt="logo" class="img-responsive" />
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="assets/img/menu-toggler.png" alt="" />
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-warning"></i>
                    <span class="badge">
                        <?php echo $totalNotification ?>
                    </span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>
                            Você tem <?php echo $totalNotification ?> novas notificações
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <?php

                            foreach ($notifications as $notification) {
                                echo '<li>
                                <a href="#">
                                    <span class="label label-sm label-icon label-' . $notification['label'] . '">
                                        ' . $notification['icon'] . '
                                    </span>
                                    ' . $notification['title'] . '
                                    <span class="time">
                                        ' . $notification['status'] . '
                                    </span>
                                </a>
                            </li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="#">Ver todas as notificações <i class="m-icon-swapright"></i></a>
                    </li>
                </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN INBOX DROPDOWN -->
            <li class="dropdown" id="header_inbox_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-envelope"></i>
                    <span class="badge">
                        <?php echo $totalInbox ?>
                    </span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p>
                            Você tem <?php echo $totalInbox ?> novas mensagens
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <?php
                            foreach ($inboxs as $key => $value) {
                                echo $value;
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="inbox.html">Ver todas as mensagens <i class="m-icon-swapright"></i></a>
                    </li>
                </ul>
            </li>
            <!-- END INBOX DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            <li class="dropdown" id="header_task_bar">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-tasks"></i>
                    <span class="badge">
                        <?php echo $totalTaskObj ?>
                    </span>
                </a>
                <ul class="dropdown-menu extended tasks">
                    <li>
                        <p>
                            Você tem <?php echo $totalTaskObj ?> tarefas pendentes
                        </p>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <?php

                            foreach ($tasks as $task) {
                                echo '<li>
                                     <a href="#">
                                         <span class="task">
                                             <span class="desc">
                                                ' . $task['desc'] . '
                                             </span>
                                             <span class="percent">
                                             ' . $task['percent'] . '
                                             </span>
                                         </span>
                                         <span class="progress">
                                             <span ' . $task['style'] . ' ' . $task['class'] . ' aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                 <span class="sr-only">
                                                 ' . $task['progress'] . '
                                                 </span>
                                             </span>
                                         </span>
                                     </a>
                                 </li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="#">Ver todas as tarefas <i class="m-icon-swapright"></i></a>
                    </li>
                </ul>
            </li>
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" src="assets/img/avatar1_small.jpg" />
                    <span class="username">
                        Estágiário
                    </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="extra_profile.html"><i class="fa fa-user"></i> Meu Perfil</a>
                    </li>
                    <li>
                        <a href="page_calendar.html"><i class="fa fa-calendar"></i> Calendário</a>
                    </li>
                    <li>
                        <a href="inbox.html"><i class="fa fa-envelope"></i> Mensagens
                            <span class="badge badge-danger">
                                3
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tasks"></i> Tarefas
                            <span class="badge badge-success">
                                7
                            </span>
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-key"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</header>