import 'package:provider/provider.dart';
import 'package:flutter/material.dart';
import '../providers/Auth.dart';
import '../widgets/drawer.dart';
import '../screens/splash_screen.dart';
import '../screens/LoginScreen.dart';
import 'package:intl/intl.dart';


class ProfileScreen extends StatefulWidget {
  static const routeName = '/profile';

  @override
  _ProfileScreenState createState() => _ProfileScreenState();
}

class _ProfileScreenState extends State<ProfileScreen> {

  @override
  void dispose() {
    super.dispose();
  }


  @override
  Widget build(BuildContext context){
    return Consumer<Auth>(
      builder: (ctx, auth, _) => auth.isAuth
          ? ProfileWidgetScreen()
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

  Widget ProfileWidgetScreen() {
    return Scaffold(
      appBar: AppBar(
        title: Text('Perfíl'),
      ),
      drawer: AppDrawer(),
      backgroundColor: Colors.grey.shade200,
      body: FutureBuilder(
        future: Provider.of<Auth>(context, listen: false).perfilData(),
        builder: (ctx, dataSnapshot) {
          if (dataSnapshot.connectionState == ConnectionState.waiting) {
            return Center(child: CircularProgressIndicator());
          } else {
            if (dataSnapshot.error != null) {
              return Center(
                child: Text('Ocurrió un error!'),
              );
            } else {
              return Consumer<Auth>(
                  builder: (ctx, perfilData, child) {
                    return SingleChildScrollView(
                      child: Stack(
                        children: <Widget>[
                          Container(
                            margin: EdgeInsets.fromLTRB(16.0, 30.0, 16.0, 16.0),
                            child: Column(
                              children: <Widget>[
                                Stack(
                                  children: <Widget>[
                                    Container(
                                      padding: EdgeInsets.all(16.0),
                                      margin: EdgeInsets.only(top: 16.0),
                                      decoration: BoxDecoration(
                                          color: Colors.white,
                                          borderRadius: BorderRadius.circular(5.0)
                                      ),
                                      child: Column(
                                        crossAxisAlignment: CrossAxisAlignment.start,
                                        children: <Widget>[
                                          Container(
                                            margin: EdgeInsets.only(left: 96.0),
                                            child: Column(
                                              crossAxisAlignment: CrossAxisAlignment.start,
                                              children: <Widget>[
                                                Text(perfilData.data['nombre'],
                                                  style: Theme.of(context).textTheme.title,),
                                                ListTile(
                                                  contentPadding: EdgeInsets.all(
                                                      0),
                                                  title: Text("Usuario"),
                                                  subtitle: Text(""),
                                                ),
                                              ],
                                            ),
                                          ),
                                          SizedBox(height: 10.0),
                                          Row(
                                            children: <Widget>[
                                              Expanded(child: Column(
                                                children: <Widget>[
                                                  Text(""),
                                                  Text("")
                                                ],
                                              ),),
                                              Expanded(child: Column(
                                                children: <Widget>[
                                                  GestureDetector(
                                                    onTap: () {
                                                      Navigator.of(context).pushReplacementNamed('/');
                                                      Provider.of<Auth>(context, listen: false).logout();
                                                    },
                                                    child: Icon(
                                                      Icons.power_settings_new,
                                                      color: Theme.of(context).accentColor,
                                                      size: 30,
                                                    ),
                                                  ),
                                                ],
                                              ),),
                                              Expanded(child: Column(
                                                children: <Widget>[
                                                  Text(""),
                                                  Text("")
                                                ],
                                              ),),
                                            ],
                                          ),
                                        ],
                                      ),
                                    ),
                                    Container(
                                      height: 80,
                                      width: 80,
                                      decoration: BoxDecoration(
                                          borderRadius: BorderRadius.circular(
                                              10.0),
                                          image: DecorationImage(
                                              image: NetworkImage("https://jrtec.cl/iot-rasp/public/img/user.png"),
                                              fit: BoxFit.cover
                                          )
                                      ),
                                      margin: EdgeInsets.only(left: 16.0),
                                    ),
                                  ],
                                ),

                                SizedBox(height: 20.0),
                                Container(
                                  decoration: BoxDecoration(
                                    color: Colors.white,
                                    borderRadius: BorderRadius.circular(5.0),
                                  ),
                                  child: Column(
                                    children: <Widget>[
                                      Padding(
                                        padding: const EdgeInsets.only(left: 30,
                                            top: 30,
                                            right: 30,
                                            bottom: 20),
                                        child: Container(
                                          child: Row(
                                            mainAxisAlignment: MainAxisAlignment
                                                .spaceBetween,
                                            crossAxisAlignment: CrossAxisAlignment
                                                .center,
                                            children: <Widget>[
                                              Row(
                                                children: <Widget>[
                                                  Text("Información Usuario",
                                                    style: TextStyle(
                                                        fontSize: 16),)
                                                ],
                                              ),
                                            ],
                                          ),
                                        ),
                                      ),

                                      Divider(),
                                      ListTile(
                                        title: Text("Correo"),
                                        subtitle: Text(perfilData.data['correo']),
                                        leading: Icon(Icons.email),
                                      ),
                                    ],
                                  ),
                                ),
                                SizedBox(height: 20,),
                              ],
                            ),
                          ),
                        ],
                      ),
                    );
                  }
              );
            }
          }
        },
      ),
    );
  }
}