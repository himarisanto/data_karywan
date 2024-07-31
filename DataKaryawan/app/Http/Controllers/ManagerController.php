<?php
// app/Http/Controllers/ManagerController.php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Note; // Misalkan ada model Note
use App\Models\Attendance; // Misalkan ada model Attendance
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    // Menampilkan data karyawan
    public function index()
    {
        $employees = Employee::all();
        return view('manager.employees.index', compact('employees'));
    }

    // Menampilkan catatan karyawan
    public function showNotes(Employee $employee)
    {
        // Asumsi Anda memiliki model Notes yang berelasi dengan Employee
        $notes = $employee->notes;
        return view('manager.notes.show', compact('employee', 'notes'));
    }

    // Menampilkan follow up HRD
    public function followUps()
    {
        // Logika untuk mendapatkan follow up HRD
        $followUps = []; // Ganti dengan data yang sesuai
        return view('manager.followups.index', compact('followUps'));
    }

    // Menampilkan absensi karyawan
    public function showAttendance(Employee $employee)
    {
        // Asumsi Anda memiliki model Attendance yang berelasi dengan Employee
        $attendance = $employee->attendance;
        return view('manager.attendance.show', compact('employee', 'attendance'));
    }

    // Menampilkan golongan karyawan
    public function grades()
    {
        // Logika untuk mendapatkan golongan karyawan
        $grades = []; // Ganti dengan data yang sesuai
        return view('manager.grades.index', compact('grades'));
    }
}
