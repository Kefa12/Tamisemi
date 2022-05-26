<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>


@extends('layouts.master')
@section('content')

	<!-- Sidebar -->
  
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                 
                    <li class="submenu">
                      
                        <a href="#" class="noti-dot">
                            <i class="la la-dashboard"></i>
                            <span> Dashboard</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="active" href="">Admin Dashboard</a></li>

                            <li><a href="">Employee Dashboard</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_name=='Admin')
                        <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="">All User</a></li>
                                <li><a href="">Activity Log</a></li>
                                <li><a href="">Activity User</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="menu-title"> <span>ADD USER</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i> <span>ADD USER</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li> <a href="{{ url('Register_Headmaster') }}">HeadMaster</a></li>
                            <li>  <a href="{{ url('registe4') }}">Ward_Education_Officer</a></li>
                            <li>   <a href="{{ url('registe5') }}">District_Education_Officer</a></li>
                            <li> <a href="{{ url('registe6') }}">Regional_Education_Officer</a></li>
                            <li> <a href="{{ url('registe7') }}">Tamisemi_Director</a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                           
                        </ul>
                    </li>
                    
                   
                </ul>
            </div>
        </div>
    </div>
	<!-- /Sidebar -->

    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
          
            <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for super administratopr') }}
        </h2>
    </x-slot>
    <div class="dropdown">
    <button class="dropbtn">ADD USER</button>
  <div class="dropdown-content">
    <a href="{{ url('Register_Headmaster') }}">HeadMaster</a>
    <a href="{{ url('Register_WEO') }}">Ward_Education_Officer</a>
    <a href="{{ url('Register_DEO') }}">District_Education_Officer</a>
    <a href="{{ url('Register_RD') }}">Regional_Director</a>
    <a href="{{ url('Register_TAMISEMI_Director') }}">Tamisemi_Director</a>
  </div>
</div>
</div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged as superadministrator!
                
                </div>
            </div>
        </div>
    </div>
    
                   
    @role('Teacher')
    <p>This is visible to users with the admin role. Gets translated to
    \Laratrust::hasRole('admin')</p>
    @endrole
</x-app-layout>
            <!-- /Page Header -->
           
        <!-- /Page Content -->
    </div>
@endsection
