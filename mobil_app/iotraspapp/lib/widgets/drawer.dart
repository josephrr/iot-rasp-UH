import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../providers/Auth.dart';
import '../screens/ProyectosScreen.dart';
import '../screens/Profile.dart';

class AppDrawer extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Consumer<Auth>(
      builder: (ctx, auth, _) =>
          Drawer(
            child: ListView(
              padding: EdgeInsets.zero,
              children: <Widget>[
                _createHeader(),
                _createDrawerItem(icon: Icons.add_box, text: 'Proyectos', onTap: () {Navigator.of(context).pushReplacementNamed(ProyectosScreen.routeName);}),
                _createDrawerItem(icon: Icons.settings, text: 'Perfíl', onTap: () {Navigator.of(context).pushReplacementNamed(ProfileScreen.routeName);}),
                Divider(),
                //_createDrawerItem(icon: Icons.bug_report, text: 'Reportar Problema'),
                ListTile(
                  title: Text('Versión: 0.0.1'),
                  onTap: () {},
                ),
              ],
            ),
          ),
      );
  }
}


  Widget _createHeader() {
    return DrawerHeader(
        margin: EdgeInsets.zero,
        padding: EdgeInsets.zero,
        decoration: BoxDecoration(
            image: DecorationImage(
                image: AssetImage('assets/images/logo.png'))),
        );
  }

  Widget _createDrawerItem({IconData icon, String text, GestureTapCallback onTap}) {
    return ListTile(
      title: Row(
        children: <Widget>[
          Icon(
              icon,
              color: Colors.black87,
          ),
          Padding(
            padding: EdgeInsets.only(left: 8.0),
            child: Text(
                text,
                style: TextStyle(color: Colors.black87),
            ),
          )
        ],
      ),
      onTap: onTap,
    );
  }

