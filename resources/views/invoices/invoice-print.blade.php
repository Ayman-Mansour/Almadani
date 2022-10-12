<link rel="stylesheet" href="{{ asset('css/report.css') }}" />
<header class="clearfix">


		<h1>Almadani Typing</h1>
		<div style="margin: auto; display: block; " >
		<x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

	

<h1>Invoice</h1>
<p style="opacity: 1;
    color: BLACK;
    position: absolute;
    bottom: 850;
    right: 0;
    font-size: 18px;">Date : &nbsp; &nbsp; &nbsp;[  ]</p>
</header>
<main>
	<h2>Student Number : &nbsp; &nbsp; &nbsp;</h2>
	<h2>Student Name : &nbsp; &nbsp; &nbsp;</h2>
	<h2>Course Number : &nbsp; &nbsp; &nbsp;</h2>
	<h2>Course Name : &nbsp; &nbsp; &nbsp;</h2>
	<h2>Course Cost : &nbsp; &nbsp; &nbsp;</h2>
	<h2>Obtained : &nbsp; &nbsp; &nbsp;</h2>
	<h2>Remained : &nbsp; &nbsp; &nbsp;</h2>
	<p>User's name : &nbsp; &nbsp; &nbsp;{{ Auth::user()->name }}</p>
	<p>Signture </p>
	<p style="opacity: 0.7;
    color: BLACK;
    position: absolute;
    bottom: 570;
    right: 0;
    font-size: 12px;">Designed by : Ayman Mansour : <a href= 'WWW.ayman-mansour.com'></a></p>
</main>