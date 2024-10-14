import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: AttendanceScreen(),
    );
  }
}

class AttendanceScreen extends StatelessWidget {
  // Step 1: Your Future Function to fetch data
  Future<List<dynamic>> fetchAttendance() async {
    final response = await http.get(Uri.parse('http://127.0.0.1:8000/api/attendance'));
    if (response.statusCode == 200) {
      return json.decode(response.body);
    } else {
      throw Exception('Failed to load attendance data');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Attendance List'),
      ),
      // Step 2: Use FutureBuilder to handle async data
      body: FutureBuilder(
        future: fetchAttendance(),  // Calling the Future function
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            // While the data is loading, show a loading spinner
            return Center(child: CircularProgressIndicator());
          } else if (snapshot.hasError) {
            // If there is an error, display the error message
            return Center(child: Text('Error: ${snapshot.error}'));
          } else if (snapshot.hasData) {
            // When data is available, display the list
            return ListView.builder(
              itemCount: snapshot.data.length,
              itemBuilder: (context, index) {
                return ListTile(
                  title: Text(snapshot.data[index]['name']),
                  subtitle: Text('Date: ${snapshot.data[index]['date']}'),
                );
              },
            );
          }
          // If no data, show a fallback (just in case)
          return Center(child: Text('No attendance data available.'));
        },
      ),
    );
  }
}
