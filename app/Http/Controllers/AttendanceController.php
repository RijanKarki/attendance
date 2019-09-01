<?php


namespace App\Http\Controllers;

use App\Attendance;
use Auth;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function create()
    {
        return view('attendances.create');
    }

    public function store(Request $request)
    {
        $subject = $request->input('subject');
        $topic = $request->input('topic');
        $user_id = 1;
        $status = 'P';

        Attendance::create([
            'subject' => $subject,
            'topic' => $topic,
            'user_id' => $user_id,
            'status' => $status
        ]);

        return route('attendance.index');
    }
    public function index(){
        $attendances = Attendance::where('user_id',Auth::id())->get();
        return view('attendances.index',compact('attendances'));
    }
}
