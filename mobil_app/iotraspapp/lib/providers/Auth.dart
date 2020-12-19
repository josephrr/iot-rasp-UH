import 'dart:convert';
import 'dart:async';
import 'package:flutter/widgets.dart';
import 'package:http/http.dart' as http;
import 'package:shared_preferences/shared_preferences.dart';
import '../models/http_exception.dart';

class Auth with ChangeNotifier {
  String _userId;
  String _correo;
  String _nombre;
  Map _data;
  Timer _authTimer;

  bool get isAuth {
    return userId != null;
  }

  String get userId {
      return _userId;
  }

  Map get data {
    return _data;
  }

  String get nombre {
    return _nombre;
  }

  Future<void> _authenticate(String correo, String pass, String urlSegment) async {
      final url =
          'https://jrtec.cl/iot-rasp/api/$urlSegment';
      try {
        final response = await http.post(
          url,
          body:
          {
            'correo': correo,
            'pass': pass,
          },
        );
        final responseData = json.decode(response.body);
        if (responseData['error'] != null) {
          throw HttpException(responseData['error']['message']);
        }
        _userId = responseData['id_usuario'].toString();
        _correo = responseData['correo'];
        _nombre = responseData['nombre'];
        notifyListeners();
        final prefs = await SharedPreferences.getInstance();
        final userData = json.encode(
          {
            'correo': _correo,
            'nombre': _nombre,
            'userId': _userId,
          },
        );
        prefs.setString('userData', userData);
      } catch (error) {
        throw error;
      }
  }

  Future<void> perfilData() async {
    final url =
        'https://jrtec.cl/iot-rasp/api/perfilData';
    try {
      final response = await http.post(
        url,
        body: {'id_usuario': _userId,},
      );
      final responseData = json.decode(response.body);
      _data = responseData;
    } catch (error) {
      throw error;
    }
  }

  Future<void> signup(String email, String password) async {
    return _authenticate(email, password, 'registrarUsuario');
  }

  Future<void> login(String email, String password) async {
    return _authenticate(email, password, 'loginUsuario');
  }

  Future<bool> tryAutoLogin() async {
    final prefs = await SharedPreferences.getInstance();
    if (!prefs.containsKey('userData')) {
      return false;
    }
    final extractedUserData = json.decode(prefs.getString('userData')) as Map<String, Object>;
    _correo = extractedUserData['correo'];
    _userId = extractedUserData['userId'];
    notifyListeners();
    return true;
  }

  Future<void> logout() async {
    _userId = null;
    if (_authTimer != null) {
      _authTimer.cancel();
      _authTimer = null;
    }
    notifyListeners();
    final prefs = await SharedPreferences.getInstance();
    // prefs.remove('userData');
    prefs.clear();
  }

}
