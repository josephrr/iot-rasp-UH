import 'dart:io' show Platform;
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:flutter/services.dart' ;
import './providers/Auth.dart';
import './providers/Proyectos.dart';
import './providers/Canales.dart';
import './providers/Datos.dart';
import './screens/Profile.dart';
import './screens/ProyectosScreen.dart';
import './screens/CanalesScreen.dart';


void main() => runApp(MyApp());

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}



class _MyAppState extends State<MyApp> {
  final GlobalKey<NavigatorState> navigatorKey = new GlobalKey<NavigatorState>();

  @override
  void initState() {
    super.initState();
  }


  @override
  Widget build(BuildContext context) {
    SystemChrome.setPreferredOrientations([
      DeviceOrientation.portraitUp,
    ]);
    return MultiProvider(
      providers: [
        ChangeNotifierProvider.value(
          value: Auth(),
        ),
        ChangeNotifierProxyProvider<Auth, Proyectos>(
          update: (ctx, auth, previousProyectos) => Proyectos(
            auth.userId,
            previousProyectos == null ? [] : previousProyectos.proyectos,
          ),
        ),
        ChangeNotifierProxyProvider<Auth, Canales>(
          update: (ctx, auth, previousCanales) => Canales(
            auth.userId,
            previousCanales == null ? [] : previousCanales.canales,
          ),
        ),
        ChangeNotifierProxyProvider<Auth, Datos>(
          update: (ctx, auth, previousDatos) => Datos(
            previousDatos == null ? [] : previousDatos.datos,
          ),
        ),
      ],
      child:
      Center(
        child: MaterialApp(
          title: 'Iot Rasp',
          debugShowCheckedModeBanner: false,
          theme: ThemeData(
            primarySwatch: Colors.blueGrey,
          ),
          navigatorKey: navigatorKey,
          home: ProyectosScreen(),
          routes: {
            ProfileScreen.routeName: (ctx) => ProfileScreen(),
            ProyectosScreen.routeName: (ctx) => ProyectosScreen(),
            CanalesScreen.routeName: (ctx) => CanalesScreen(),
          },
        ),
      ),
    );
  }
}