import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class Proyectos with ChangeNotifier {
  var _proyectos = [];
  var _proyecto;
  final String userId;

  Proyectos(this.userId, this._proyectos);

  get proyectos {
    return _proyectos;
  }

  get proyecto {
    return _proyecto;
  }

  Future<List> fetchAndSetProyectos() async {
    var url =
        'https://jrtec.cl/iot-rasp/api/listadoProyectos';
    try {
      final response = await http.get(url);
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return [];
      }
      _proyectos = extractedData;
      return _proyectos;
      //notifyListeners();
    } catch (error) {
      throw (error);
    }
  }

  Future<List> fetchAndSetMisProyectos(userId) async {
    var url =
        'https://jrtec.cl/iot-rasp/api/listadoMisProyectos/$userId';
    try {
      final response = await http.get(url);
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return [];
      }
      _proyectos = extractedData;
      return _proyectos;
      //notifyListeners();
    } catch (error) {
      throw (error);
    }
  }

  Future<Map> findById(String id) async {
    var url = 'https://jrtec.cl/iot-rasp/api/verProyecto';
    try {
      final response = await http.post(
          url,
          body: {
            'id_proyecto': id,
          }
      );
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return {};
      }
      _proyecto = extractedData;
      return _proyecto;
    } catch (error) {
      throw (error);
    }
  }




}
