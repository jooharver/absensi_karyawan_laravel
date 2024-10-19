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
      home: ConnectionCheckScreen(),
    );
  }
}

class ConnectionCheckScreen extends StatefulWidget {
  @override
  _ConnectionCheckScreenState createState() => _ConnectionCheckScreenState();
}

class _ConnectionCheckScreenState extends State<ConnectionCheckScreen> {
  String connectionMessage = 'Checking connection...';

  @override
  void initState() {
    super.initState();
    checkConnection();
  }

  Future<void> checkConnection() async {
    try {
      final response = await http.get(Uri.parse('http://localhost:8000/api/check-connection'));

      if (response.statusCode == 200) {
        var data = json.decode(response.body);
        setState(() {
          connectionMessage = data['message'];
        });
      } else {
        setState(() {
          connectionMessage = 'Failed to connect!';
        });
      }
    } catch (e) {
      setState(() {
        connectionMessage = 'Error: $e';
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Check Laravel Connection'),
      ),
      body: Center(
        child: Text(connectionMessage),
      ),
    );
  }
}
