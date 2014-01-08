<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
	
	<!-- Included CSS files -->
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
	
	<!-- Included JS files -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
	
  </head>
  <body>
  
	<nav class="top-bar" data-topbar>
	<ul class="title-area">
	<li class="name">
	<h1><a href="{{ URL::to('/') }}">TooDoos - Task Management App</a></h1>
	</li>
	<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>
	<section class="top-bar-section">
	<!-- Right Nav Section -->
	<ul class="right" style="margin-right: 20px;">
	<li class="has-dropdown">
	<a href="#" style="margin-right: 40px;">MENU</a>
	<ul class="dropdown">
	<li><a href="{{ URL::to('tasks/create') }}" data-reveal-id="create" data-reveal-ajax="true">Create Task&nbsp;&nbsp;&plus;</a></li>
	<li><a href="{{ URL::to('tasks') }}">Show All Tasks</a></li>
	<!-- <li><a href="#">Show Unfinished Tasks</a></li> -->
	</ul>
	</li>
	</ul>
	</section>
	</nav>
	
  
  @yield('section')