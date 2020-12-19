import 'package:flutter/material.dart';
import 'dart:io' show Platform;
import 'package:flutter/widgets.dart';
import 'package:provider/provider.dart';
import '../providers/Auth.dart';
import '../models/http_exception.dart';

enum AuthMode { Signup, Login }

class LoginScreen extends StatefulWidget {
  LoginScreen({Key key, this.title}) : super(key: key);
  final String title;

  @override
  _LoginScreenState createState() => _LoginScreenState();

}



class _LoginScreenState extends State<LoginScreen> {

  @override
  void initState() {
    super.initState();
  }

  final GlobalKey<FormState> _formKey = GlobalKey();
  AuthMode _authMode = AuthMode.Login;
  Map<String, String> _authData = {
    'usuario': '',
    'password': '',
  };
  var _isLoading = false;
  final _passwordController = TextEditingController();


  void _showErrorDialog(String message) {
    showDialog(
      context: context,
      builder: (ctx) => AlertDialog(
        title: Text('Ocurrió un error!'),
        content: Text(message),
        actions: <Widget>[
          FlatButton(
            child: Text('Ok'),
            onPressed: () {
              Navigator.of(ctx).pop();
            },
          )
        ],
      ),
    );
  }

  Future<void> _submit() async {
    if (!_formKey.currentState.validate()) {
      return;
    }
    _formKey.currentState.save();
    setState(() {
      _isLoading = true;
    });
    try {
      if (_authMode == AuthMode.Login) {
        // Log user in
        await Provider.of<Auth>(context, listen: false).login(
          _authData['correo'],
          _authData['pass'],
        );

      } else {
        await Provider.of<Auth>(context, listen: false).signup(
          _authData['correo'],
          _authData['pass'],
        );
      }
    } on HttpException catch (error) {
      var errorMessage = 'Autenticación fallida';
      if (error.toString().contains('CORREO_EXISTE')) {
        errorMessage = 'Esta dirección de correo electrónico ya está en uso.';
      } else if (error.toString().contains('USUARIO_DATOS_INCORRECTOS')) {
        errorMessage = 'El usuario o la clave es incorrecta.';
      }
      _showErrorDialog(errorMessage);
    } catch (error) {
      const errorMessage =  'Hubo un problema inesperado';
      _showErrorDialog(errorMessage);
    }

    setState(() {
      _isLoading = false;
    });
  }

  void _switchAuthMode() {
    if (_authMode == AuthMode.Login) {
        setState(() {
        _authMode = AuthMode.Signup;
      });
    } else {
      setState(() {
        _authMode = AuthMode.Login;
      });
    }
  }


  Widget _userField() {
    return Container(
      margin: EdgeInsets.symmetric(vertical: 10),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: <Widget>[
          SizedBox(
            height: 10,
          ),
          TextFormField(
            decoration: InputDecoration(labelText: 'Correo'),
            keyboardType: TextInputType.emailAddress,
            validator: (value) {
              if (value.isEmpty) {
                return '¡Escribir Correo!';
              }
              if(_authMode == AuthMode.Signup && !RegExp(r"^[a-zA-Z0-9.a-zA-Z0-9.!#$%&'*+-/=?^_`{|}~]+@[a-zA-Z0-9]+\.[a-zA-Z]+").hasMatch(value)){
                return '¡No es un correo!';
              }
              return null;
            },
            onSaved: (value) {
              _authData['correo'] = value;
            },
          ),
        ],
      ),
    );
  }

  Widget _passField() {
    return Container(
      margin: EdgeInsets.symmetric(vertical: 10),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: <Widget>[
          SizedBox(
            height: 10,
          ),
          TextFormField(
            decoration: InputDecoration(labelText: 'Contraseña'),
            obscureText: true,
            controller: _passwordController,
            validator: (value) {
              if (value.isEmpty) {
                return 'Escribir Contraseña!';
              }
              return null;
            },
            onSaved: (value) {
              _authData['pass'] = value;
            },
          ),
        ],
      ),
    );
  }

  Widget _passField2() {
    return Container(
      margin: EdgeInsets.symmetric(vertical: 10),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: <Widget>[
          SizedBox(
            height: 10,
          ),
          TextFormField(
            enabled: _authMode == AuthMode.Signup,
            decoration: InputDecoration(labelText: 'Confirmar Contraseña'),
            obscureText: true,
            validator: _authMode == AuthMode.Signup
                ? (value) {
              if (value != _passwordController.text) {
                return 'Las Contraseñas no coinciden!';
              }
              return null;
            }
                : null,
          ),
        ],
      ),
    );
  }

  Widget _submitButton() {
    if (_isLoading) {
      return CircularProgressIndicator();
    }else {
      return RaisedButton(
        child:
        (_authMode == AuthMode.Login) ? Text("INGRESAR") : Text("REGISTRARSE"),
        onPressed: _submit,
        shape: RoundedRectangleBorder(
          borderRadius: BorderRadius.circular(30),
        ),
        padding:
        EdgeInsets.symmetric(horizontal: 30.0, vertical: 8.0),
        color: Theme.of(context).primaryColor,
        textColor: Theme.of(context).primaryTextTheme.button.color,
      );
    }
  }

  Widget _divider() {
    return Container(
      margin: EdgeInsets.symmetric(vertical: 10),
      child: Row(
        children: <Widget>[
          SizedBox(
            width: 20,
          ),
          Expanded(
            child: Padding(
              padding: EdgeInsets.symmetric(horizontal: 10),
              child: Divider(
                thickness: 1,
              ),
            ),
          ),
          Expanded(
            child: Padding(
              padding: EdgeInsets.symmetric(horizontal: 10),
              child: Divider(
                thickness: 1,
              ),
            ),
          ),
          SizedBox(
            width: 20,
          ),
        ],
      ),
    );
  }

  Widget _title() {
    if (_authMode == AuthMode.Login){
      return RichText(
        textAlign: TextAlign.center,
        text: TextSpan(
            text: 'Inicio ',
            style: TextStyle(color: Theme.of(context).accentColor, fontSize: 30),
            children: [
              TextSpan(
                text: 'Sesión',
                style: TextStyle(color: Colors.black, fontSize: 30),
              ),
            ]),
      );
    }else{
      return RichText(
        textAlign: TextAlign.center,
        text: TextSpan(
            text: 'Registro ',
            style: TextStyle(color: Theme.of(context).accentColor, fontSize: 30),
            children: [
              TextSpan(
                text: 'Sesión',
                style: TextStyle(color: Colors.black, fontSize: 30),
              ),
            ]),
      );
    }

  }

  Widget _emailPasswordWidget() {
    return Column(
      children: <Widget>[
        _userField(),
        _passField(),
        if (_authMode == AuthMode.Signup)
          _passField2(),
      ],
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      resizeToAvoidBottomPadding: false,
      appBar: AppBar(
        title: Text('Iot Rasp'),
      ),
      body: Stack(
        children: <Widget>[
          Container(
            padding: EdgeInsets.symmetric(horizontal: 20),
            child: Form(
              key: _formKey,
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.center,
                mainAxisAlignment: MainAxisAlignment.center,
                children: <Widget>[
                  _title(),
                  _emailPasswordWidget(),
                  _submitButton(),
                  _divider(),
                ],
              ),
            ),
          ),
        ],
      ),
    );
  }
}
