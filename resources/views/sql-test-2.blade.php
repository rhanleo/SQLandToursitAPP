@extends('app')

@section('content')
	  @include('common.success')
      @include('common.error')
      @include('common.errorsession')

<style>
	.content{display: block; margin: 0 auto;}
	
	.h-title{font-family:"Hiragino Kaku Gothic Pro",Osaka, "メイリオ", "MS PGothic", sans-serif;}
</style>
	  <div class="container-fluid">
		<div class="row">
			<div class="col-md-1">			
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<h1>SQL query 2</h1>
						<p>2. Write a query to display the ff columns ID (from teacher.id),
							Nickname, Open (total open slots from trn_teacher_time_table),
							Reserved (total reserved slots from trn_teacher_time_table),
							Taught (total taught from trn_evaluation) and NoShow (total
							no_show from trn_evaluation) using all tables above. Should
							show only those who are active (trn_teacher.status = 1 or 2)
							and those who have both Trainer and Assessor role.</p>
						<table class="table">
							<thead>
							  <tr>
								<th>ID</th>
								<th>Nickname</th>
								<th>Open</th>
								<th>Reserved</th>
								<th>Taught</th>
								<th width='30%'>No Show</th>
							  </tr>
							</thead>
							<tbody>
							@foreach($results1st as $result)
							  <tr>
								<td>{{$result->id}} </td>
								<td>{{$result->nickname}} </td>
								<td>{{$result->totalopen}} </td>
								<td>
									<?php
										foreach($resereved as $reserve){										
										   if($result->id == $reserve->id){
											  
											 echo  $reserve->totalreserved ;
										   }
										}
									?>
								</td>
								<td>
									<?php
										foreach($taughts as $taught){										
										   if($result->id == $taught->id){
											  
											 echo  $taught->totaltaught ;
										   }
										}
									?>
								</td>
								<td>
									<?php
										foreach($noshows as $noshow){										
										   if($result->id == $noshow->id){
											  
											 echo  $noshow->totalnoshow ;
										   }
										}
									?>
								</td>
							  </tr>
							 @endforeach 
							</tbody>
						  </table>
					</div>
				</div>
			</div>
			<div class="col-md-1">			
			</div>
	    </div>
		<script>
		 var element = document.getElementById("city");
			element.classList.add("active");
		</script>
	  </div>

@endsection
