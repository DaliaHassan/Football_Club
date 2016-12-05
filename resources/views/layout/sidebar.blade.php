<?php
/**
 * Created by PhpStorm.
 * User: dalia.hassan
 * Date: 12/4/2016
 * Time: 4:33 PM
 */

 ?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Clubs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ URL::to('/addClub')}}"><i class="fa fa-circle-o"></i> Add Club</a></li>
                    <li><a href="{{ URL::to('/clubs')}}"><i class="fa fa-circle-o"></i> List Clubs</a></li>

                </ul>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Matches</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ URL::to('/addMatch')}}"><i class="fa fa-circle-o"></i> Add Match</a></li>
                    <li><a href="{{ URL::to('/matches')}}"><i class="fa fa-circle-o"></i> List Matches</a></li>
                </ul>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Teams</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Add Team</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> List Teams</a></li>
                </ul>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Palyers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>Add Player</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> List Players</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

