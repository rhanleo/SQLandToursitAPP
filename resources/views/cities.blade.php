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
	h6{font-weight: 500;}
	.c-img{width: 100%;border-radius: 60%;height: 150px;}
	.c-name{text-align:center;color:#000;padding-top: 10px;}
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
						<h2 class='text-center h-title'>Japan Favorite Places</h2><br>
						<div class="content">	
							<ul class="nav2 nav" style='with" 100%; display:block;
							margin: 0 auto;'>
							  <li class="nav-item">
								<a class="nav-link" href="/" id="city">
								<i class="fas fa-city" style='font-size: 35px;'></i><br>
								CITY
								</a>
								
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="/JP">
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
							<H6 class='text-center'>SELECT A CITY</H6><br><br>
							<div class='row'>
									<div class='col-md-4'>
										<a href="/Tokyo">
										<img class='c-img' src='{{asset("images/japan/tokyo.png")}}'>
										<p class='c-name' >TOKYO</p>
										</a>
									
									</div>
									<div class='col-md-4'>
										<a href="/Yokohama">
										<img class='c-img' src='{{asset("images/japan/yokohama.png")}}'>
										<p class='c-name' >YOKOHAMA</p>
										</a>
									
									</div>
									<div class='col-md-4'>
										<a href="/Kyoto">
										<img class='c-img' src='{{asset("images/japan/kyoto.png")}}'>
										<p class='c-name' >KYOTO</p>
										</a>
									
									</div>									
							</div>
							
							<div class='row'>
									<div class='col-md-4'>
										<a href="/Osaka">
										<img class='c-img' src='{{asset("images/japan/osaka.png")}}'>
										<p class='c-name' >OSAKA</p>
										</a>
									
									</div>
									<div class='col-md-4'>
										<a href="/Sapporo">
										<img class='c-img' src='{{asset("images/japan/sapporo.png")}}'>
										<p class='c-name' >SAPPORO</p>
										</a>
									
									</div>
									<div class='col-md-4'>
										<a href="/Shibuya">
										<img class='c-img' src='{{asset("images/japan/nagoya.jpg")}}'>
										<p class='c-name' >SHIBUYA</p>
										</a>
									
									</div>									
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-3">			
			</div>
	    </div>
		<script>
		 var element = document.getElementById("city");
			element.classList.add("active");
		</script>
	  </div>

@endsection
