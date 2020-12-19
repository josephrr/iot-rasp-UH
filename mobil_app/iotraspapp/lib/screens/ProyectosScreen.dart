import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../providers/Auth.dart';
import '../providers/Proyectos.dart';
import '../screens/splash_screen.dart';
import '../screens/LoginScreen.dart';
import '../widgets/drawer.dart';
import '../widgets/proyecto_item.dart';
import 'dart:async';


class ProyectosScreen extends StatefulWidget {
  static const routeName = '/listado-proyectos';
  @override
  _ProyectosScreenState createState() => _ProyectosScreenState();
}

class _ProyectosScreenState extends State<ProyectosScreen> {

  StreamController _streamController = StreamController.broadcast();

  @override
  void initState() {
    super.initState();
  }

  @override
  void dispose() {
    super.dispose();
  }

  @override
  void didChangeDependencies() {
    super.didChangeDependencies();
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<Auth>(
      builder: (ctx, auth, _) => auth.isAuth
          ? ProyectosWidgetScreen(auth.userId)
          : FutureBuilder(
        future: auth.tryAutoLogin(),
        builder: (ctx, authResultSnapshot) =>
        authResultSnapshot.connectionState ==
            ConnectionState.waiting
            ? SplashScreen()
            : LoginScreen(),
      ),
    );
  }

  Future getProyectos(userId) async {
    Provider.of<Proyectos>(context, listen: false).fetchAndSetMisProyectos(userId).then((proyectos) {
      _streamController.add(proyectos);
    });
  }

  @override
  Widget ProyectosWidgetScreen(userId) {
    getProyectos(userId);
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
            return Consumer<Proyectos>(
                builder: (ctx, data, child) {
                  return RefreshIndicator(
                      color: Colors.blue,
                      onRefresh: () {
                        return getProyectos(userId);
                      },
                      child: Scaffold(
                        appBar: AppBar(
                          title: Text('Listado Proyectos'),
                          actions: <Widget>[],
                        ),
                        drawer: AppDrawer(),
                        body:
                        (data.proyectos.length == 0) ?
                        Center(
                          child: Text('No tiene proyectos creados'),
                        ) :
                        ListView.builder(
                          itemCount: data.proyectos.length,
                          itemBuilder: (ctx, i) => ProyectoItem(data.proyectos[i]),
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