<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class Teacher extends Authenticatable
{
    
    protected $fillable = [
        'nickname', 'status',
    ];

 
	 public function get1stQuery(){
		  $query = DB::table('trn_teachers')
		  ->join('teacher_status', 'trn_teachers.status', '=', 'teacher_status.type')
		  ->select(DB::raw('CONCAT("T00000", trn_teachers.id) AS teacherID'), 'trn_teachers.nickname',   'trn_teachers.id','teacher_status.status_name')
		  ->get();
		  return $query;
		  
	 }
	 
	 public function get2ndQuery(){
		  $query = DB::table('trn_teachers')
		  ->join('trn_time_table', 'trn_teachers.id', '=', 'trn_time_table.teacher_id')
		  ->select('trn_teachers.nickname',   'trn_teachers.id',DB::raw('count(trn_time_table.teacher_id) AS totalopen'))
		  ->where('trn_time_table.status', 1)
		  ->groupBy('trn_teachers.id')
		  ->get();
		  return $query;
		  
	 }
	 public function getReserved(){
		  $query = DB::table('trn_teachers')
		  ->join('trn_time_table', 'trn_teachers.id', '=', 'trn_time_table.teacher_id')
		  ->select('trn_teachers.nickname',   'trn_teachers.id',DB::raw('count(trn_time_table.teacher_id) AS totalreserved'))
		  ->where('trn_time_table.status', 3)
		  ->groupBy('trn_teachers.id')
		  ->get();
		  return $query;
		  
	 }
	 public function getTaught(){
		  $query = DB::table('trn_teachers')
		  ->join('trn_evaluation', 'trn_teachers.id', '=', 'trn_evaluation.teacher_id')
		  ->select('trn_teachers.nickname',   'trn_teachers.id',DB::raw('count(trn_evaluation.teacher_id) AS totaltaught'))
		  ->where('trn_evaluation.result', 1)
		  ->groupBy('trn_teachers.id')
		  ->get();
		  return $query;
		  
	 }
	  public function getNoShow(){
		  $query = DB::table('trn_teachers')
		  ->join('trn_evaluation', 'trn_teachers.id', '=', 'trn_evaluation.teacher_id')
		  ->select('trn_teachers.nickname',   'trn_teachers.id',DB::raw('count(trn_evaluation.teacher_id) AS totalnoshow'))
		  ->where('trn_evaluation.result', 2)
		  ->groupBy('trn_teachers.id')
		  ->get();
		  return $query;
		  
	 }
	 
}
