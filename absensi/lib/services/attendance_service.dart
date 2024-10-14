import 'package:http/http.dart' as http;
import 'dart:convert';

Future<List<dynamic>> fetchAttendance() async {
  final response = await http.get(Uri.parse('http://127.0.0.1:8000/api/attendance'));
  if (response.statusCode == 200) {
    return json.decode(response.body);
  } else {
    throw Exception('Failed to load attendance data');
  }
}
