 <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li  <?php
                                $type = $_GET['type'];
                                if (!isset($type)) {
                                    error_reporting(0);
                                }

                                if ($page=="/sis/admin/entry.php") { echo "class='active'";  }?>>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-cog icon-wrap"></i> <span class="mini-click-non">Main Settings</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

                                <li class="active"><a title="History" href="entry?type=history"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">History</span></a></li>
                                <li><a title="Mission and Vision" href="entry?type=missionvision"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Mission & Vision</span></a></li>
                                <li><a title="School Personnel" href="entry?type=schoolpersonnel"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">School Personnel</span></a></li>
                                 <li><a title="Principal Message" href="entry?type=messageprinc"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Principal Message</span></a></li>
                                <li><a title="Awards & Accomplishment" href="entry?type=awardsaccomplishment"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">Awards & Accomplishment</span></a></li>
                                <li><a title="Program Projects" href="entry?type=progsproj"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">Programs & Projects</span></a></li>
                                <li><a title="News And Updates" href="entry?type=newsandupdates"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">News & Updates</span></a></li>
                                <li><a title="Events" href="entry?type=events"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">Events</span></a></li>
                                <li><a title="Announcements" href="entry?type=announcements"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">Announcements</span></a></li>
                                <li><a title="Memoranda" href="entry?type=memoranda"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">Memoranda</span></a></li>
                                <li><a title="Liquidation Reports" href="entry?type=liquidationreports"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">Liquidation Reports</span></a></li>
                                <li><a title="PhilGeps Postings" href="entry?type=philgeps"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro" style="font-size: 12px;">PhilGeps Posting</span></a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>