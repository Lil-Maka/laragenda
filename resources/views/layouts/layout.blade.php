<!DOCTYPE html>
<html>
	@include('incs.head')
	<body>
		@include('incs.navbar')
		<div class="body" style="margin-left: 10%; margin-right: 10%;">
			@yield('body')
		 @if(Request::is('/') || Request::is('totes') || Request::is('trucades') || Request::is('missatges') || Request::is('reunions'))
		  
			@include('incs.taula')
		   
		 @endif
		</div>
		<div class="footer">
			@include('incs.footer')
		</div>
	</body>
</html>