<div class="container" style="margin-bottom: 5%; margin-top:2%;">
		<div class="info">
		 <div class="col-md-12">
			<div class="row" style="height:50px; line-height:50px;">
				<div class="col-md-3 bg-info" style="border: 1px solid black; border-bottom: none;">
					Prueba
				</div>
				<div class="col-md-6 bg-success" style="border: 1px solid black; border-right: none; border-left:none;">
					@yield('actual')
				</div>
				<div class="col-md-3 bg-success" style="border: 1px solid black; border-left: none;">
					Finder
				</div>
			</div>
		 </div>
		</div>
		<div class="content">
		 <div class="col-md-12">
		  <div class="row">
		  	<div class="col-md-3" style="border: 1px solid black;">
			 <section class="tipus_entrada">
				<div class="row">
				 @if(Request::is('totes') || Request::is('/'))
					<a href="{{route('totes')}}" style="color:darkblue;">Totes</a>
				 @else
					<a href="{{route('totes')}}">Totes</a>
				 @endif
				</div>
				<div class="row">
				 @if(Request::is('trucades'))
					<a href="{{route('trucades')}}" style="color:darkblue;">Trucades</a>
				 @else
					<a href="{{route('trucades')}}">Trucades</a>
				 @endif
				</div>
				<div class="row">
				 @if(Request::is('missatges'))
					<a href="{{route('missatges')}}" style="color:darkblue;">Missatges</a>
				 @else
					<a href="{{route('missatges')}}">Missatges</a>
				 @endif
				</div>
				<div class="row">
				 @if(Request::is('reunions'))
					<a href="{{route('reunions')}}" style="color:darkblue;">Reunió</a>
				 @else
					<a href="{{route('reunions')}}">Reunió</a>
				 @endif
				</div>
			 </section>
		  	</div>
		  	<div class="col-md-9" style="border: 1px solid black; border-left:none; border-top:none;">
			 <section class="contingut">
				@yield('contingut')
			 </section>
			</div>
		  </div>
		 </div>
		</div>
	</div>