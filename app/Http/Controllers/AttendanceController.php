<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // Method to fetch attendance records
    public function index()
    {
        // Sample data (you can replace this with data from a database)
        $attendanceRecords = [
            ['id' => 1, 'name' => 'John Doe', 'date' => '2024-10-14', 'status' => 'Present'],
            ['id' => 2, 'name' => 'Jane Smith', 'date' => '2024-10-14', 'status' => 'Absent'],
        ];

        // Return data as JSON response
        return response()->json($attendanceRecords);
    }

    // Optional: Method to store a new attendance record
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|string',
        ]);

        // Here, you would typically save the attendance record to the database
        // For example:
        // $attendance = Attendance::create($validatedData);

        // Return success response
        return response()->json(['message' => 'Attendance record created successfully'], 201);
    }

    // Optional: Method to show a specific attendance record
    public function show($id)
    {
        // Here, you would typically fetch the attendance record from the database
        // For example:
        // $attendance = Attendance::findOrFail($id);

        // Return the attendance record as JSON response
        return response()->json(['id' => $id, 'name' => 'John Doe', 'date' => '2024-10-14', 'status' => 'Present']);
    }

    // Optional: Method to update an attendance record
    public function update(Request $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'date' => 'date',
            'status' => 'string',
        ]);

        // Here, you would typically update the attendance record in the database
        // For example:
        // $attendance = Attendance::findOrFail($id);
        // $attendance->update($validatedData);

        // Return success response
        return response()->json(['message' => 'Attendance record updated successfully']);
    }

    // Optional: Method to delete an attendance record
    public function destroy($id)
    {
        // Here, you would typically delete the attendance record from the database
        // For example:
        // $attendance = Attendance::findOrFail($id);
        // $attendance->delete();

        // Return success response
        return response()->json(['message' => 'Attendance record deleted successfully']);
    }
}