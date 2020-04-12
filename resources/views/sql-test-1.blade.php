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
						<h1>SQL query 1</h1>
						<p>1. Write a query to display the ff columns ID (should start
							with T + 11 digits of trn_teacher.id with leading zeros like
							'T00000088424'), Nickname, Status and Roles (like
							Trainer/Assessor/Staff) using table trn_teacher and
							trn_teacher_role.</p>
						<table class="table">
							<thead>
							  <tr>
								<th>ID</th>
								<th>Nickname</th>
								<th>Status</th>
								<th width='30%'>Roles</th>
							  </tr>
							</thead>
							<tbody>
							@foreach($results1st as $result)
							  <tr>
								<td>{{$result->teacherID}} </td>
								<td>{{$result->nickname}} </td>
								<td>{{$result->status_name}} </td>
								<td>
								<ul>
								<?php
									
									foreach($roles as $role){										
									   if($result->id == $role->teacher_id){
										  
										 echo ' <li>' . $role->role_name . '</li>';
									   }
									}
									
									
								?>
								</ul>
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
