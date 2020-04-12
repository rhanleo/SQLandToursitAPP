@extends('app')

@section('content')
	  @include('common.success')
      @include('common.error')
      @include('common.errorsession')

<style>
	.content{display: block; margin: 0 auto;}
	.nav2 .nav-item a{text-align: center;	color: #000;	}
	.nav2 .nav-item a.active{color: #da9898;}
	.nav2 .nav-item a{font-size: 15px;}
	.nav2 .nav-item a .fas{font-size: 30px important;}
	.nav2 .nav-item{width: 33%;}
	h6{font-weight: 500; text-transform: uppercase;}
	.c-img{width: 100%;border-radius: 60%;height: 150px;}
	.c-name{text-align:center;color:#000;padding-top: 10px;}
	.venues{box-shadow: 3px 3px 3px 3px #b5aeae; border-radius: 10px; margin-bottom: 20px;
     padding: 10px 20px;}
	 .venues .label{color:#000;}
	 .h-img{width: auto;border-radius: 90%;display:block; margin: 0 auto;height:50px;}
	 .h-title{font-family:"Hiragino Kaku Gothic Pro",Osaka, "メイリオ", "MS PGothic", sans-serif;}
</style>
	  <div class="container-fluid">
		<div class="row">
			<div class="col-md-3">			
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">	<br>
						<img src="">
						<img class='h-img' src='{{asset("images/japan/japan.png")}}'>
						<h2 class='text-center h-title'>Japan Favorite Places</h2><br>
						<div class="content">	
							<ul class="nav2 nav" style='with" 100%; display:block;
							margin: 0 auto;'>
							  <li class="nav-item">
								<a class="nav-link " href="/">
								<i class="fas fa-city" style='font-size: 35px;'></i><br>
								CITY
								</a>
								
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="#" id="venue">
								<i class="fas fa-map-marker-alt" style='font-size: 35px;'></i><br>
								VENUE
								</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="#">
								<i class="fas fa-info-circle" style='font-size: 35px;'></i><br>
								DETAILS
								</a>
							  </li>
							</ul><br>
							<H6 class='text-center'>{!! $city !!} </H6><br><br>
							<b>Recommended Venues</b><br><br>
							@foreach($nearvenues as $venue)
							<div class='row'>
									<div class='col-md-12 venues'>
										<a href="/venue/{{$venue['id']}} ">

										<h6 class="label" >{!! $venue['name'] !!} </h6>
										<p class="label">
										{!! $venue['location']['formattedAddress'][0] !!}, 
										{!! $venue['location']['formattedAddress'][1] !!}, 
										{!! $venue['location']['formattedAddress'][2] !!}, 
										{!! $venue['location']['formattedAddress'][3] !!}
										</p>
										<p>{!! $venue['categories'][0]['name'] !!} </p>
										</a>									
									</div>
							</div>
							@endforeach
							
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-3">			
			</div>
	    </div>
		<script>
		 var element = document.getElementById("venue");
			element.classList.add("active");
		</script>
	  </div>

@endsection
