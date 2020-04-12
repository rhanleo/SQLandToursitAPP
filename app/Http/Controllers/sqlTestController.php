<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Teacher;

class sqlTestController extends Controller
{
    

    public function firstTest()
    {   
		$Teacher = new Teacher;
		$Results = $Teacher->get1stQuery();
		$teacherIDs =[];
		foreach($Results as $res){
			$teacherIDs[] = $res->id;
		}
		$roles = DB::table('trn_teachers_role')->select('*')
		->join('teacher_role_type', 'trn_teachers_role.role', '=', 'teacher_role_type.type')
		->whereIn('trn_teachers_role.teacher_id', $teacherIDs)
		->get();
        return view('sql-test-1',['results1st' => $Results, 'roles'=> $roles] );

    }
	
	public function secondTest()
    {   
		$Teacher = new Teacher;
		$Results = $Teacher->get2ndQuery();
		$teacherIDs =[];
		foreach($Results as $res){
			$teacherIDs[] = $res->id;
		}
		$resereved = $Teacher->getReserved();
		$taughts = $Teacher->getTaught();
		$noshows = $Teacher->getNoShow();
        return view('sql-test-2',['results1st' => $Results, 'resereved'=> $resereved, 'taughts' =>  $taughts, 'noshows' => $noshows] );

    }
	
	
}
