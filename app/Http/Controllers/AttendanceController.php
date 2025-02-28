<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Database;

class AttendanceController extends Controller
{
    protected $auth;
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');
        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    public function fetchAttendanceData(Request $request)
    {
        $user = $this->auth->getUser($request->user()->uid);
        $attendanceData = $this->database->getReference('attendance/'.$user->uid)->getValue();

        return response()->json(['attendanceData' => $attendanceData]);
    }

    public function displayAttendanceData()
    {
        return view('dashboard');
    }
}
