<?php 
use yii\helpers\Url;
//echo Url::base();
//echo Url::to(['post/index']);
?>

      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened" style="display:block">
              <li> <a href="<?php echo Url::base();?>"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Dashboard</b> </a> </li>
             <!-- <li> <a href="pages/admin/user/index.html#/admin"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Users</b> </a> </li>
              <li> <a href="pages/admin/user/index.html#/create"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Create user</b> </a> </li>
              <li> <a href="pages/admin/user/index.html#/group"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Group</b> </a> </li>
              <li> <a href="pages/admin/user/index.html#/role"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Roles</b> </a> </li>
              <li> <a href="pages/admin/user/index.html#/password"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Change password</b> </a> </li>-->
            </ul>

          </li>

<!--System setup--->

   <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> ADMIN SETUP 
	<span class="plus"><i class="fa fa-plus"></i></span></a>
	<ul>
	<li> <a href="<?php echo Url::base();?>/setting/companysetup/index"><span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Company Setup</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/country/index"><span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Country</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/region/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Region</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/district/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>District</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/adminzone/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Zone</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/user/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Users</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/usergroup/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Users Group</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/group/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Groups</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/role/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Roles</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/grouprole/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Group Roles</b> </a> </li>
</ul>

<!--Admin and security setup--->
   <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i>SYSTEM SETUP <span class="plus"><i class="fa fa-plus"></i></span></a>
	<ul>
	
	<li> <a href="<?php echo Url::base();?>/setting/district/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Hackers</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/district/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Zones</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/district/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Usage Group</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/district/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>User Group</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/district/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Users</b> </a> </li>
	</ul>
	 </li>
<!--Core banking Setup--->
 	<li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i>CORE BANKING <span class="plus"><i class="fa fa-plus"></i></span></a>
	<ul>
	<li> <a href="<?php echo Url::base();?>/setting/accounttype/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Product Type</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/cbbranch/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Branch</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/cbcurrence/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Currency</b> </a> </li>
	<li> <a href="<?php echo Url::base();?>/setting/loantype/index"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Currency</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/create"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Create user</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/group"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Group</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/role"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Roles</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/password"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Change password</b> </a> </li>
	</ul>

<!--General Ledger (Accounting) setup--->
 	<li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i>ACCOUNTING(GL) <span class="plus"><i class="fa fa-plus"></i></span></a>
	<ul>
	<li> <a href="pages/admin/user/index.html#/admin"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Users</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/create"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Create user</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/group"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Group</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/role"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Roles</b> </a> </li>
	<li> <a href="pages/admin/user/index.html#/password"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Change password</b> </a> </li>
	</ul>

	 </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> UI KIT <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="pages/admin/user/index.html#/user/table"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>table</b> </a> </li>
              <li> <a href="pages/admin/user/index.html#/user/page"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Page</b> </a> </li>
              <li> <a href="pages/admin/user/index.html#/user/table"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tabs</b> </a> </li>
              <li> <a href="grid.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Grid</b> </a> </li>
              <li> <a href="alert.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Alert & Notification</b> </a> </li>
              <li> <a href="tabs.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tabs & Accordion</b> </a> </li>
              <li> <a href="tree.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tree View</b> </a> </li>
              <li> <a href="list.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>List Group</b> </a> </li>
              <li> <a href="portlets.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Portlets</b> </a> </li>
              <li> <a href="general.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>General</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> Forms <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="pages/template/index.html#/form"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Form</b> </a> </li>
              <li> <a href="pages/template/index.html#/page"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Page</b> </a> </li>
              <li> <a href="pages/template/index.html#/input_form"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>input_form</b> </a> </li>
              <li> <a href="pages/template/index.html#/form"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Others</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> APPS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="todo.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>To-Do</b> </a> </li>
              <li> <a href="task.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Task</b> </a> </li>
              <li> <a href="notes.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Notes</b> </a> </li>
              <li> <a href="media.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Media Manager</b> </a> </li>
              <li> <a href="calendar.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Calendar</b> </a> </li>
              <li> <a href="ticket.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ticket Support</b> </a> </li>
              <li> <a href="invoice.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Invoice</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> EMAIL <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="inbox.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Inbox</b> </a> </li>
              <li> <a href="compose.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Compose</b> </a> </li>
              <li> <a href="readmail.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Read Mail</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-folder-open-o"></i> PAGES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="login.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Login</b> </a> </li>
              <li> <a href="registration.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Registration</b> </a> </li>
              <li> <a href="lockscreen.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Lock Screen</b> </a> </li>
              <li> <a href="blankpage.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Blank Page</b> </a> </li>
              <li> <a href="404error.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>404 Error</b> </a> </li>
              <li> <a href="500error.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>500 Error</b> </a> </li>
              <li> <a href="search.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Search</b> </a> </li>
              <li> <a href="about.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>About</b> </a> </li>
              <li> <a href="contact.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-th"></i> TABLES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="statictable.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Static Table</b> </a> </li>
              <li> <a href="datatable.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Data Table</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-glass"></i> EXTRA <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="timeline.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Timeline</b> </a> </li>
              <li> <a href="profile.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Profile</b> </a> </li>
              <li> <a href="contactlist.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact List</b> </a> </li>
              <li> <a href="maps.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Maps</b> </a> </li>
              <li> <a href="gallery.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Gallery</b> </a> </li>
              <li> <a href="help.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Help</b> </a> </li>
            </ul>
          </li>
        </ul>
      </div>
   
