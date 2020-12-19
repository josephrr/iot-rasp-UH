import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class Datos with ChangeNotifier {
  var _datos = [];
  var _dato;

  Datos(this._datos);

  get datos {
    return _datos;
  }

  get dato {
    return _dato;
  }

  Future<List> fetchAndSetDatos() async {
    var url =
        'https://jrtec.cl/iot-rasp/api/listadoDatos';
    try {
      final response = await http.get(url);
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return [];
      }
      _datos = extractedData;
      return _datos;
      //notifyListeners();
    } catch (error) {
      throw (error);
    }
  }

  Future<Map> findById(String id) async {
    var url = 'https://jrtec.cl/iot-rasp/api/verDato';
    try {
      final response = await http.post(
          url,
          body: {
            'id_dato': id,
          }
      );
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return {};
      }
      _dato = extractedData;
      return _dato;
    } catch (error) {
      throw (error);
    }
  }




}
