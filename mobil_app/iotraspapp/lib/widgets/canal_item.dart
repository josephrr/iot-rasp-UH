import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'dart:async';
import 'package:syncfusion_flutter_charts/charts.dart';

class CanalItem extends StatefulWidget {
  final canal;
  CanalItem(this.canal);

  @override
  _CanalItemState createState() => _CanalItemState();
}

class _CanalItemState extends State<CanalItem> {
  static const double _cardElevation = 2;
  static const double _cardBorderRadius = 7;
  static const double _largePadding = 8;

  var dataSource  = <Data>[];

  @override
  void didChangeDependencies() {
    super.didChangeDependencies();
  }

  @override
  void initState() {
    super.initState();
  }


  @override
  void dispose() {
    super.dispose();
  }

  Future getData() async {
    dataSource = <Data>[];
    for (final objeto in widget.canal['datos']) {
      final coordenadas = new Data(objeto['x'], objeto['y'].toDouble());
      dataSource.add(coordenadas);
    }
  }

  @override
  Widget build(BuildContext context) {
    getData();
    return Card(
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(_cardBorderRadius),
      ),
      clipBehavior: Clip.antiAlias,
      elevation: _cardElevation,
      child: Column(
        mainAxisSize: MainAxisSize.min,
        children: <Widget>[
            Container(
            padding: EdgeInsets.only(top: _largePadding, bottom: _largePadding),
            child: Center(
              child: SfCartesianChart(
                    primaryXAxis: CategoryAxis(),
                    title: ChartTitle(text: widget.canal['nombre_canal']),
                    legend: Legend(isVisible: false),
                    tooltipBehavior: TooltipBehavior(enable: true),
                    primaryYAxis: NumericAxis(
                        title: AxisTitle(
                            text: widget.canal['simbolo']
                        )
                    ),
                    series: <LineSeries<Data, int>>[
                      LineSeries<Data, int>(
                          dataSource:  dataSource,
                          xValueMapper: (Data datos, _) => datos.x,
                          yValueMapper: (Data datos, _) => datos.y,
                          dataLabelSettings: DataLabelSettings(isVisible: false)
                      )
                    ]
                ),
              ),
            ),
        ],
      ),
    );
  }
}

class Data {
  Data(this.x, this.y);
  final int x;
  final double y;
}

