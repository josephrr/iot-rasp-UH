import 'package:flutter/material.dart';
import 'package:flutter/widgets.dart';
import '../providers/Canales.dart';
import '../widgets/drawer.dart';
import '../widgets/canal_item.dart';
import 'package:provider/provider.dart';
import 'dart:async';

class CanalesScreen extends StatefulWidget {
  static const routeName = '/listado-canales';
  @override
  _CanalesScreenState createState() => _CanalesScreenState();

}

class _CanalesScreenState extends State<CanalesScreen> {

  var _idProyecto;
  StreamController _streamController = StreamController.broadcast();
  Timer _timer;

  @override
  void initState() {

    super.initState();

    Future.delayed(Duration.zero, () {
      _idProyecto = ModalRoute.of(context).settings.arguments as String;
      getCanales(_idProyecto);

    });
    _timer = Timer.periodic(Duration(seconds: 10), (timer) => getCanales(_idProyecto));
  }

  void dispose() {
    if (_timer.isActive) _timer.cancel();
    _streamController.close();
    super.dispose();
  }

  Future getCanales(idProyecto) async {
    Provider.of<Canales>(context, listen: false).fetchAndSetCanalesById(idProyecto).then((canales) {
      _streamController.add(canales);
    });
  }


  @override
  Widget build(BuildContext context) {
    return StreamBuilder(
      stream: _streamController.stream,
      builder: (ctx, dataSnapshot) {
        if (dataSnapshot.connectionState == ConnectionState.waiting) {
          return Center(child: CircularProgressIndicator());
        } else {
          if (dataSnapshot.error != null) {
            return Center(
              child: Text('Ocurrió un error!'),
            );
          } else {
            return Consumer<Canales>(
                builder: (ctx, data, child) {
                  return RefreshIndicator(
                    color: Colors.blue,
                    onRefresh: () {
                      return getCanales(_idProyecto);
                    },
                    child: Scaffold(
                      resizeToAvoidBottomPadding: false,
                      appBar: AppBar(
                        leading: IconButton(
                          icon: Icon(Icons.arrow_back),
                          onPressed: () => Navigator.of(context, rootNavigator: true).pop(),
                        ),
                        title: Text('Canales'),
                      ),
                      drawer: AppDrawer(),
                      body: (data.canales.length == 0) ?
                      Center(
                        child: Text('No tiene canales creados'),
                      ) :
                      ListView.builder(
                        itemCount: data.canales.length,
                        itemBuilder: (ctx, i) => CanalItem(data.canales[i]),
                      ),
                    ),
                  );
                }
            );
          }
        }
      },
    );
  }
}
