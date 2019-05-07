<!DOCTYPE html>
<html>
	@include('incs.head')
	<body>
		@include('incs.navbar')
		<div class="body" style="margin-left: 10%; margin-right: 10%;">
			@yield('body')
		</div>
		<div class="footer">
			@include('incs.footer')
		</div>
	</body>
</html>