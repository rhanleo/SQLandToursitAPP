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
	 .detail{font-size:12px;}
	 .rate{color: #f3ebeb; background:#0b9a5a; width:80px; display:block; margin:0 auto; border-radius: 50%; padding:12px; padding-top: 10px; padding-bottom: 10px;font-weight: 600;}
	 .likes .far{color: #0d427b;}
	 .venue-img{width: 100%;margin-bottom: 5%;}
	 .forecast{font-weight: 500;letter-spacing: 10px;}
	 .img-venue{width: 100%; margin-bottom: 5%;border-radius: 15px;}
	 .temp li{float: left;list-style-type:none; text-align:center;width: 25%;}
	 .weather li{float: left;list-style-type:none; text-align:center;width: 50%;}
	 .label{font-size:11px;}
	 .w-img{margin-top: -20px;}
	 .w-desc{margin-top: -8px;}
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
					<img class='h-img' src='{{asset("images/japan/japan.png")}}'>
						<h2 class='text-center' h-title>Japan Favorite Places</h2><br>
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
								<a class="nav-link " href="#">
								<i class="fas fa-map-marker-alt" style='font-size: 35px;'></i><br>
								VENUE
								</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="#" id="details">
								<i class="fas fa-info-circle" style='font-size: 35px;'></i><br>
								DETAILS
								</a>
							  </li>
							</ul><br>
							<img class='img-venue' src="{!! $imgurl !!}">
							<H4 class='text-center'>{!! $venue['name'] !!} </H4>
							<p class="text-center detail">
										{!! $venue['location']['formattedAddress'][0] !!}, 
										{!! $venue['location']['formattedAddress'][1] !!}, 
										{!! $venue['location']['formattedAddress'][2] !!}, 
										{!! $venue['location']['formattedAddress'][3] !!}
										</p>
							<p class="text-center detail">
										<i class="fas fa-phone-square-alt"></i>
										{!! $venue['contact']['formattedPhone']!!} | 
										<i class="fas fa-globe"></i>
										{!! $venue['url'] !!}
										
										</p>
							<h1 class="text-center rate">{!! $venue['rating'] !!}</h1>
										<br>
										<p class="text-center likes"> <i class="far fa-thumbs-up"></i> <b>{!! $venue['likes']['count'] !!} </b> </p>
										<br><br>
							
							<H4 class='text-center forecast'> Forecasted (1 week) </H4><br>
							
							@foreach($forecasted as $forecast)
							<div class='row'>
									<div class='col-md-12 venues'>
										<h5 class="text-center" >{!! date("M d, Y", substr($forecast['dt'], 0, 10)) !!} </h5>
										<p  class="text-center" ><b>Temperature</b></p>
										<ul class="temp">
										
											<li>
												
												Morning <i class="fas fa-sun"></i>
												<p class="label" >{!! substr($forecast['temp']['morn'], 0, 2)
												 !!}&#176; </p>
											</li>
											<li>
												Night <i class="fas fa-cloud-moon"></i>
												<p class="label" >{!! 
												substr($forecast['temp']['night'], 0, 2) !!}&#176; </p>
											</li>
											<li>
												
												Min <i class="fas fa-angle-double-down"></i>
													<p class="label" >{!! 
												substr($forecast['temp']['min'], 0, 2) !!}&#176; </p>
											</li>
											<li>
												Max <i class="fas fa-angle-double-up"></i>
													<p class="label" >{!! 
												substr($forecast['temp']['max'], 0, 2) !!}&#176; </p>
											</li>
										</ul>
										<p  class="text-center" ><b>Weather</b></p>
										<ul class="weather">
										
											<li>
												
												{!! ucfirst($forecast['weather'][0]['main']) !!}
												<img class='w-img' src="http://openweathermap.org/img/wn/{!! $forecast['weather'][0]['icon'] !!}.png">
												<p class="label w-desc" >
												{!! ucfirst($forecast['weather'][0]['description']) !!} </p>
											</li>
											<li>
												Cloud <i class="fas fa-cloud"></i>
													<p class="label" >{!! $forecast['clouds'] !!} %</p>
											</li>
											
										</ul>
										
										
																			
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
		 var element = document.getElementById("details");
			element.classList.add("active");
		</script>
		
	  </div>

@endsection
