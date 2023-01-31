<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="<?php if (url_is('/dashboard/dashboard')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/dashboard/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
        <li class="list-divider"></li>
        <li class="submenu"> <a href="<?= base_url() ?>/bookings"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/bookings/all')) : ?>active<?php endif ?>" href="<?= base_url() ?>/bookings/all"> All Booking </a></li>
            <li><a class="<?php if (url_is('/bookings/edit')) : ?>active<?php endif ?>" href="<?= base_url() ?>/bookings/edit"> Edit Booking </a></li>
            <li><a class="<?php if (url_is('/bookings/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/bookings/add"> Add Booking </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/customers"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/customers/all')) : ?>active<?php endif ?>" href="<?= base_url() ?>/customers/all"> All customers </a></li>
            <li><a class="<?php if (url_is('/customers/edit')) : ?>active<?php endif ?>" href="<?= base_url() ?>/customers/edit"> Edit Customer </a></li>
            <li><a class="<?php if (url_is('/customers/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/customers/add"> Add Customer </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/rooms"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/rooms/all')) : ?>active<?php endif ?>" href="<?= base_url() ?>/rooms/all">All Rooms </a></li>

            <li><a class="<?php if (url_is('/rooms/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/rooms/add"> Add Rooms </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/staffs"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/staffs/all')) : ?>active<?php endif ?>" href="<?= base_url() ?>/staffs/all">All Staff </a></li>
            <li><a class="<?php if (url_is('/staffs/edit')) : ?>active<?php endif ?>" href="<?= base_url() ?>/staffs/edit"> Edit Staff </a></li>
            <li><a class="<?php if (url_is('/staffs/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/staffs/add"> Add Staff </a></li>
          </ul>
        </li>
        <li class="<?php if (url_is('/pricings/*')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/pricings/all"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>/employees"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/employees/all') || url_is('/employees/add') || url_is('/employees/edit')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees/all">Employees List </a></li>
            <li><a class="<?php if (url_is('/employees/leaves/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees/leaves/all">Leaves </a></li>
            <li><a class="<?php if (url_is('/employees/holidays/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees/holidays/all">Holidays </a></li>
            <li><a class="<?php if (url_is('/employees/attendance/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/employees/attendance/all">Attendance </a></li>
          </ul>
        </li>
        <li class="submenu"> <a href="<?= base_url() ?>/accounts"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/accounts/invoices/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/invoices/all">Invoices </a></li>
            <li><a class="<?php if (url_is('/accounts/payments/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/payments/all">Payments </a></li>
            <li><a class="<?php if (url_is('/accounts/expenses/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/expenses/all">Expenses </a></li>
            <li><a class="<?php if (url_is('/accounts/taxes/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/taxes/all">Taxes </a></li>
            <li><a class="<?php if (url_is('/accounts/provident_funds/*')) : ?>active<?php endif ?>" href="<?= base_url() ?>/accounts/provident_funds/all">Provident Fund </a></li>
          </ul>
        </li>

        <li class="<?php if (url_is('/calender/calender')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/calender/calender"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>/blog"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/blogs/all')) : ?>active<?php endif ?>" href="<?= base_url() ?>/blogs/all">All Blogs </a></li>
            <li><a class="<?php if (url_is('/blogs/add')) : ?>active<?php endif ?>" href="<?= base_url() ?>/blogs/add">Add Blog </a></li>
          </ul>
        </li>
        <li class="<?php if (url_is('/activities/activities')) : ?>active<?php endif ?>"> <a href="<?= base_url() ?>/activities/activities"><i class="far fa-bell"></i> <span>Activities</span></a> </li>
        <li class="submenu"> <a href="<?= base_url() ?>/reports"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
          <ul class="submenu_class" style="display: none;">
            <li><a class="<?php if (url_is('/reports/expenses')) : ?>active<?php endif ?>" href="<?= base_url() ?>/reports/expenses">Expense Report </a></li>
            <li><a class="<?php if (url_is('/reports/invoices')) : ?>active<?php endif ?>" href="<?= base_url() ?>/reports/invoices">Invoice Report </a></li>
          </ul>
        </li>
        <li> <a href="<?= base_url() ?>settings/setting"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>

      </ul>
    </div>
  </div>
</div>