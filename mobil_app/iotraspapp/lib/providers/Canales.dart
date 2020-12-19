import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class Canales with ChangeNotifier {
  var _canales = [];
  var _canal;
  final String userId;

  Canales(this.userId, this._canales);

  get canales {
    return _canales;
  }

  get canal {
    return _canal;
  }

  Future<List> fetchAndSetCanales() async {
    var url =
        'https://jrtec.cl/iot-rasp/api/listadoCanales';
    try {
      final response = await http.get(url);
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return [];
      }
      _canales = extractedData;
      return _canales;
      //notifyListeners();
    } catch (error) {
      throw (error);
    }
  }

  Future<List> fetchAndSetCanalesById(idProyecto) async {
    var url =
        'https://jrtec.cl/iot-rasp/api/listadoCanalesById';
    try {
      final response = await http.post(
          url,
          body: {
            'id_proyecto': idProyecto,
          }
      );
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return [];
      }
      _canales = extractedData;
      return _canales;
      //notifyListeners();
    } catch (error) {
      throw (error);
    }
  }

  Future<Map> findById(String id) async {
    var url = 'https://jrtec.cl/iot-rasp/api/verCanal';
    try {
      final response = await http.post(
          url,
          body: {
            'id_canal': id,
          }
      );
      final extractedData = json.decode(response.body);
      if (extractedData == null) {
        return {};
      }
      _canal = extractedData;
      return _canal;
    } catch (error) {
      throw (error);
    }
  }


}
