
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="<?php echo URLROOT; ?>"><img class="main-logo" src="<?php echo URLROOT; ?>/img/logo/logo.png" alt="" /></a>
            <strong><a href="<?php echo URLROOT; ?>"><img src="<?php echo URLROOT;?>/img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li><li>
                        <a class="has-arrow" href="<?php echo URLROOT; ?>/instructors" aria-expanded="false"><span
                                class="educate-icon educate-professor icon-wrap mini-sub-pro"></span> <span
                                class="mini-click-non">Instructors</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="<?php echo URLROOT; ?>/instructors"><span class="mini-sub-pro">All
                                        Instructors</span></a></li>
                            <li><a title="Add Professor" href="<?php echo URLROOT; ?>/instructors/addInstructor"><span class="mini-sub-pro">Add
                                        Instructor</span></a></li>
                            
                          
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo URLROOT; ?>/students" aria-expanded="false"><span
                                class="educate-icon educate-student icon-wrap"></span> <span
                                class="mini-click-non">Students</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="<?php echo URLROOT; ?>/students"><span class="mini-sub-pro">All
                                        Students</span></a></li>
                            <li><a title="Add Students" href="<?php echo URLROOT; ?>/students/addStudent"><span class="mini-sub-pro">Add
                                        Student</span></a></li>
                       
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo URLROOT; ?>/courses" aria-expanded="false"><span
                                class="educate-icon educate-course icon-wrap"></span> <span
                                class="mini-click-non">Courses</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="<?php echo URLROOT; ?>/courses"><span class="mini-sub-pro">All
                                        Courses</span></a></li>
                            <li><a title="Add Courses" href="<?php echo URLROOT; ?>/courses/addCourse"><span class="mini-sub-pro">Add
                                        Course</span></a></li>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo URLROOT; ?>/ebooks" aria-expanded="false"><span
                                class="educate-icon educate-library icon-wrap"></span> <span
                                class="mini-click-non">Library</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Library" href="<?php echo URLROOT; ?>/ebooks"><span class="mini-sub-pro">E-Books Library 
                                        Assets</span></a></li>
                            <li><a title="Add Library" href="<?php echo URLROOT; ?>/ebooks/addEbook"><span class="mini-sub-pro">Add
                                        Library Asset</span></a></li>
                          
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo URLROOT; ?>/departments" aria-expanded="false"><span
                                class="educate-icon educate-department icon-wrap"></span> <span
                                class="mini-click-non">Departments</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Departments List" href="<?php echo URLROOT; ?>/departments"><span
                                        class="mini-sub-pro">Departments List</span></a></li>
                            <li><a title="Add Departments" href="<?php echo URLROOT; ?>/departments/addDepartment"><span class="mini-sub-pro">Add
                                        Departments</span></a></li>
                           
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo URLROOT; ?>/mails" aria-expanded="false"><span
                                class="educate-icon educate-message icon-wrap"></span> <span
                                class="mini-click-non">Mailbox</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="<?php echo URLROOT; ?>/mails"><span class="mini-sub-pro">Inbox</span></a>
                            </li>
                            <li><a title="View Mail" href="<?php echo URLROOT; ?>/mails/viewMail"><span class="mini-sub-pro">View
                                        Mail</span></a></li>
                            <li><a title="Compose Mail" href="<?php echo URLROOT; ?>/mails/composeMail"><span
                                        class="mini-sub-pro">Compose Mail</span></a></li>
                        </ul>
                    </li>    
                    <li id="removable">
                        <a class="has-arrow" href="<?php echo URLROOT; ?>/settings/register" aria-expanded="false"><span
                                class="educate-icon educate-pages icon-wrap"></span> <span
                                class="mini-click-non">Settings</span></a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            <?php if(isset($_SESSION['user_id'])):?>
                            <li><a title="Login" href="<?php echo URLROOT; ?>/settings/logout"><span class="mini-sub-pro">Logout</span></a></li>
                          <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>