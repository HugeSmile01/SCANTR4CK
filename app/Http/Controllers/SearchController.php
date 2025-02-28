<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Database;

class SearchController extends Controller
{
    protected $auth;
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');
        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $studentId = $request->input('student_id');
            $attendanceLogs = $this->database->getReference('attendance_logs')
                ->orderByChild('student_id')
                ->equalTo($studentId)
                ->getValue();

            return response()->json(['attendance_logs' => $attendanceLogs]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Search failed'], 500);
        }
    }
}
