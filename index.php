<!DOCTYPE html>

<head>
    <base href="">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="../../../public/images/favicon.png">
    <!--Bootstrap Sheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <!-- Page Title  -->
    <title>Fund Manager | Manager Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="../../../public/assets/css/dashlite.css?ver=3.0.3">
    <link id="skin-default" rel="stylesheet" href="../../../public/assets/css/theme.css?ver=3.0.3">

    <!--Sweet Allert>-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="" class="logo-link nk-sidebar-logo">
                            <!-- <img class="logo-light logo-img" src="../../../public/images/logo.png" srcset="../../../public/images/logo2x.png 2x" alt="logo"> -->
                            <!-- <img class="logo-dark logo-img" src="../../../public/images/logo-dark.png" srcset="../../../public/images/logo-dark2x.png 2x" alt="logo-dark"> -->
                            <!-- <img class="logo-small logo-img logo-img-small" src="../../../public/images/logo-small.png" srcset="../../../public/images/logo-small2x.png 2x" alt="logo-small"> -->
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                    <!-- Rating Machine-->
                                <li class="nk-menu-item">
                                    <a href="https://fund-manager-tools-production.up.railway.app/" class="nk-menu-link">
                                        <!-- <a href="https://fund-manager-tools-production.up.railway.app/" class="nk-menu-link"> -->
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Fund Manager</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu-sub -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand d-xl-none">
                                <a href="" class="logo-link">
                                    <!-- <img class="logo-light logo-img" src="../../../public/images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="../../../public/images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> -->
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item is-unread">
                                                        <a class="chat-link" href="">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <!-- <span>AB</span> -->
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Admin Ishtiyak</div>
                                                                    <span class="time">4:49 AM</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="">
                                                            <div class="chat-media user-avatar">
                                                                <!-- <img src="./images/avatar/b-sm.jpg" alt=""> -->
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <!-- <img src="./images/avatar/c-sm.jpg" alt=""> -->
                                                                </div>
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                            <div class="chat-info">
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="">
                                                            <div class="chat-media user-avatar">
                                                                <!-- <img src="./images/avatar/a-sm.jpg" alt="">
                                                                <span class="status dot dot-lg dot-success"></span> -->
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                    </li><!-- .chat-item -->
                                                </ul><!-- .chat-list -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-unverified">Unverified</div>
                                                    <div class="user-name dropdown-indicator">Admin</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Admin</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href=""><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href=""><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href=""><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href=""><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href=""><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Manager Rated Companies</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                        </li>
                                                        <!-- <li class="nk-block-tools-opt"><a href="https://fund-manager-tools-production.up.railway.app/" class="btn btn-warning"><em class="icon ni ni-reports"></em><span>Back</span></a></li> -->
                                                        <li class="nk-block-tools-opt"><a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/inputs2.php" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Perform New Rating</span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <?php
                                        include_once 'resources/config.php';
                                        $record_per_page = 12;
                                        $page = '';
                                        if (isset($_GET['page'])) {
                                            $page = $_GET['page'];
                                        } else {
                                            $page = 1;
                                        }
                                        $start_from = ($page - 1) * $record_per_page;
                                        $page_result = mysqli_query($conn, "SELECT * FROM fund_manager_requirements ORDER BY id DESC");
                                        $total_records = mysqli_num_rows($page_result);
                                        $total_pages = ceil($total_records / $record_per_page);
                                        $result = mysqli_query($conn, "SELECT * FROM fund_manager_requirements ORDER BY id DESC LIMIT $start_from, $record_per_page");

                                        ?> 
                                        <?php if (mysqli_num_rows($result) > 0) { ?>
                                            <div class="container">
                                                <table class='table table-bordered table-striped w-100'>
                                                    <tr>
                                                        <td><strong>Company Name</strong></td>
                                                        <td><strong>Actions</strong></td>
                                                    </tr>
                                                    <?php 
                                                    $i = 0;
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $row['company']; ?></td>
                                                            <div class="">
                                                                <td class="">
                                                                    <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/single.php?company=<?php echo $row['company']; ?>" title='View Rating'><i class='material-icons'><span class='glyphicon glyphicon-eye-open'></span></a> |
                                                                    <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/edit.php?company=<?php echo $row['company']; ?>" title='Update Rating'><span class='glyphicon glyphicon-pencil'></span></a> |
                                                                    <a href="https://fund-manager-tools-production.up.railway.app/resources/includes/process.php?company=<?php echo $row['company']; ?>" class="del-btn" title='Delete Rating'><span class='glyphicon glyphicon-trash'></span></a>
                                                                    <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/view-risk.php?id=<?php echo $row['id']; ?>"><span class="btn btn-dim btn-sm btn-primary">Risk Analysis</span></a>
                                                                    <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/view_fin_risk.php?id=<?php echo $row['id']; ?>"><span class="btn btn-dim btn-sm btn-dark">Financial Risk</span></a>
                                                                    <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/view_account.php?id=<?php echo $row['id']; ?>"><span class="btn btn-dim btn-sm btn-secondary">Account Quality, Governance & Investment Strate</span></a>
                                                                    <!-- <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/view-gov.php?id=<?php echo $row['id']; ?>"><span class="btn btn-dim btn-sm btn-primary">Governance</span></a> -->



                                                                    <!-- <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/single.php?company=<?php echo $row['company']; ?>" title='View Rating'><i class='material-icons'><span class='glyphicon glyphicon-eye-open'></span></a> |
                            <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/edit.php?company=<?php echo $row['company']; ?>" title='Update Rating'><span class='glyphicon glyphicon-pencil'></span></a> | 
                            <a href="https://fund-manager-tools-production.up.railway.app/resources/includes/process.php?company=<?php echo $row['company']; ?>" class="del-btn" title='Delete Rating'><span class='glyphicon glyphicon-trash'></span></a> 
                            <a href="https://fund-manager-tools-production.up.railway.app/resources/templates/pages/view-risk.php?id=<?php echo $row['id']; ?>"><span class="btn btn-dim btn-sm btn-primary">Risk Analysis</span></a>
                            <a href="http://ratingmachine.herokuapp.com/resources/templates/pages/view_fin_risk.php?id=<?php echo $row['id']; ?>"><span class="btn btn-dim btn-sm btn-dark">Financial Risk</span></a>
                            <a href="http://ratingmachine.herokuapp.com/resources/templates/pages/view_account.php?id=<?php echo $row['id']; ?>"><span class="btn btn-dim btn-sm btn-secondary">Account Quality & Governance</span></a>
 -->
                                                                </td>
                                                            </div>
                                                            <div>

                                                            </div>
                                                        </tr>
                                                    <?php $i++;
                                                    } ?>
                                                </table>
                                                <?php
                                                ?>

                                            </div>

                                            <?php
                                            if (isset($_GET['m'])) { ?>
                                                <div class="flash-data" data-flashdata="<?php echo $_GET['m']; ?>"></div>
                                            <?php } ?>
                                            <?php
                                            if (isset($_GET['n'])) { ?>
                                                <div class="flash-data_n" data-flashdata_n="<?php echo $_GET['n']; ?>"></div>
                                            <?php } ?>
                                            <?php
                                            if (isset($_GET['s'])) { ?>
                                                <div class="flash-data_s" data-flashdata_s="<?php echo $_GET['s']; ?>"></div>
                                            <?php } ?>



                                            

                                        <?php } else {
                                            echo "No data found";
                                        } ?>
                                    </div>

                                </div>
                                <div align="center" pagination justify-content-center justify-content-md-start class="page-item">
                                    <?php
                                    $i = 1;
                                    while ($i <= $total_pages) {
                                        // echo "<a class='page-link' href='https://fund-manager-tools-production.up.railway.app?page=".$i."'>&nbsp".$i."&nbsp</a>";
                                        echo "<a class='page-link' href='https://fund-manager-tools-production.up.railway.app?page=" . $i . "'>&nbsp" . $i . "&nbsp</a>";
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>

                            <script>
                                $('.del-btn').on('click', function(e) {
                                    e.preventDefault();
                                    window.url = $(this).attr('href')
                                    //var form = event.target.form;
                                    Swal.fire({
                                        title: 'Are you sure to delete?',
                                        text: "You won't be able to revert this!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                    }).then((result) => {
                                        if (result.value) {
                                            window.location.href = window.url;

                                            //window.location.href=https://fund-manager-tools-production.up.railway.app/resources/includes/process.php?company=".$GET['company']";?>;

                                        }
                                    })
                                })

                                const flashdata = $('.flash-data').data('flashdata')
                                if (flashdata) {
                                    swal.fire({
                                        type: 'success',
                                        title: 'Record Deleted',
                                        text: 'Record has been deleted'
                                    })
                                }
                                const flashdata_n = $('.flash-data_n').data('flashdata_n')
                                if (flashdata_n) {
                                    Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Record Saved Successfull',
                                    text: 'Your record has been saved successfully',
                                    showConfirmButton: false,
                                    timer: 2000
                                    })
                                }

                            </script>
                            <br>
                            <!-- content @e -->
                            <!-- footer @s -->
                            <div class="nk-footer">
                                <div class="container-fluid">
                                    <div class="nk-footer-wrap">
                                        <div class="nk-footer-copyright"><a href="" target="_blank"></a>
                                        </div>
                                        <div class="nk-footer-links">
                                            <ul class="nav nav-sm">
                                                <li class="nav-item dropup">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="language-list">
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer @e -->
                        </div>
                        <!-- wrap @e -->
                    </div>
                    <!-- main @e -->
                </div>
                <!-- app-root @e -->
                <!-- select region modal -->
                <div class="modal fade" tabindex="-1" role="dialog" id="region">
                    <div class="modal-dialog modal-lg" role="document">
                    </div><!-- .modla-dialog -->
                </div><!-- .modal -->
                <!-- JavaScript -->
                <script src="../../../public/assets/js/bundle.js?ver=3.0.3"></script>
                <script src="../../../public/assets/js/scripts.js?ver=3.0.3"></script>
                <script src="../../../public/assets/js/charts/chart-ecommerce.js?ver=3.0.3"></script>
</body>

</html>