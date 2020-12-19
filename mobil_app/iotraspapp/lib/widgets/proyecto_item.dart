import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import '../screens/CanalesScreen.dart';

class ProyectoItem extends StatefulWidget {
  final proyecto;
  ProyectoItem(this.proyecto);

  @override
  _ProyectoItemState createState() => _ProyectoItemState();
}

class _ProyectoItemState extends State<ProyectoItem> {
  static const double _cardElevation = 2;
  static const double _cardBorderRadius = 7;

  @override
  Widget build(BuildContext context) {
    return Card(
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(_cardBorderRadius),
      ),
      clipBehavior: Clip.antiAlias,
      elevation: _cardElevation,
      child: Column(
        mainAxisSize: MainAxisSize.min,
        children: <Widget>[
          _Content(widget.proyecto),
        ],
      ),
    );
  }
}

class _Content extends StatelessWidget {
  static const double _smallPadding = 4;
  static const double _largePadding = 8;
  final _proyecto;

  const _Content(this._proyecto);


  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.only(top: _largePadding, bottom: _largePadding),
      child: Row(
        children: <Widget>[
          Expanded(
              flex: 4,
              child: Column(
                children: <Widget>[
                  ListTile(
                    title: Text(_proyecto['nombre']),
                    subtitle: Container(
                        padding: EdgeInsets.only(top: _smallPadding),
                        child: Text(
                            _proyecto['descripcion'],
                            textAlign: TextAlign.left
                        ),
                    ),
                  ),
                  ListTile(
                    title: Container(
                      child: Row(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        crossAxisAlignment: CrossAxisAlignment.end,
                        children: <Widget>[
                          Row(
                            children: <Widget>[
                              Icon(
                                Icons.vpn_key,
                                size: 18,
                                color: Colors.grey,
                              ),
                              SizedBox(width: 2),
                              Text(
                                  _proyecto['token'],
                                  style: TextStyle(fontSize: 12),
                              )
                            ],
                          ),
                        ],
                      ),
                    ),
                  ),
                ],
              )
          ),
          Expanded(
            flex: 1,
            child: IconButton(
              icon: Icon(Icons.remove_red_eye),
              color: Colors.grey,
              onPressed: () {
                Navigator.of(context).pushNamed(
                  CanalesScreen.routeName,
                  arguments: _proyecto['id_proyecto'],
                );
              },
            ),
          ),
          //_LikeButton(wisdom: _wisdom, smallPadding: _smallPadding)
        ],
      ),
    );
  }
}

