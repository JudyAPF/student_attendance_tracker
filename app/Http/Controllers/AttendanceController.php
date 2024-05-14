<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Instructor;
use App\Models\Student;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class AttendanceController extends Controller
{
    //
    public function takeAttendance()
    {
        $user = auth()->user();
        $instructor = Instructor::where('user_id', $user->id)->first();

        $dateTaken = now()->toDateString();

        $attendance = Attendance::where('classId', $instructor->classId)
            ->where('blockId', $instructor->blockId)
            ->where('created_at', $dateTaken)
            ->count();

        $students = Student::where('classId', $instructor->classId)
            ->where('blockId', $instructor->blockId)
            ->get();

        return view('take_attendance', compact('students'));
    }

    public function saveAttendance(Request $request)
    {
        $user = auth()->user();
        $instructor = Instructor::where('user_id', $user->id)->first();

        $students = Student::where('classId', $instructor->classId)
            ->where('blockId', $instructor->blockId)
            ->get();

        foreach ($students as $student) {
            $attendance = new Attendance();
            $attendance->studentId = $student->id;
            $attendance->classId = $instructor->classId;
            $attendance->blockId = $instructor->blockId;
            $attendance->status = $request->input('status_' . $student->id); // Access status based on student ID
            $attendance->save();
        }

        return redirect()->route('take_attendance')->with('success', 'Attendance taken successfully');
    }

    public function viewAttendance(Request $request)
    {
        $user = auth()->user();
        $instructor = Instructor::where('user_id', $user->id)->first();


        $selectedDate = $request->input('dateTaken');

        $attendancesQuery = Attendance::where('classId', $instructor->classId)
            ->where('blockId', $instructor->blockId);

        if ($selectedDate) {
            $attendancesQuery->whereDate('created_at', $selectedDate);
        }

        $attendances = $attendancesQuery->get();

        return view('view_attendance', compact('attendances'));
    }

    public function viewAttendanceForm()
    {
        $user = auth()->user();
        $instructor = Instructor::where('user_id', $user->id)->first();

        $students = Student::where('classId', $instructor->classId)
            ->where('blockId', $instructor->blockId)
            ->get();
        return view('view_student_attendance', compact('students',));
    }

    public function viewStudentAttendance(Request $request)
    {
        $request->validate([
            'studentId' => 'required|integer',
            'fromDate' => 'required|date',
            'toDate' => 'required|date',
        ]);

        $fromDate = date('Y-m-d 00:00:00', strtotime($request->fromDate));
        $toDate = date('Y-m-d 23:59:59', strtotime($request->toDate));

        $student_attendances = Attendance::where('studentId', $request->studentId)->whereBetween('created_at', [$fromDate, $toDate])
            ->get();

        $user = auth()->user();
        $instructor = Instructor::where('user_id', $user->id)->first();

        $students = Student::where('classId', $instructor->classId)
            ->where('blockId', $instructor->blockId)
            ->get();

        return view('view_student_attendance', compact('student_attendances', 'students'));
    }

    public function downloadAttendance()
    {
        $attendances = Attendance::whereDate('created_at', now()->toDateString())->get();

        $data = [
            'title' => 'Attendance Report',
            'date' => now()->toDateString(),
            'attendances' => $attendances,
        ];

        $pdf = new Dompdf();
        $html = View::make('attendance_pdf', $data)->render();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();

        return $pdf->stream('attendance.pdf');
    }
}
