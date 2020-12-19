<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8"/>
        <title>APP | Login</title>
        <meta name="description" content="Login page example"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->
        <link href="<?=base_url()?>/public/Template/assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url()?>/public/Template/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url()?>/public/Template/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url()?>/public/Template/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="<?=base_url()?>/public/img/favicon.png"/>
    </head>
    <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading"  >
	<div class="d-flex flex-column flex-root">
        <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
                <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                    <a href="#" class="text-center pt-2">
                        <img src="<?=base_url()?>/public/img/logo.png" class="max-h-150px" alt=""/><br>
                          <img src="<?=base_url()?>/public/img/logoUH.png" class="max-h-150px" alt=""/>
                    </a>
                    <div class="d-flex flex-column-fluid flex-column flex-center">
                        <!--begin::Signin-->
                        <div class="login-form login-signin py-11">
                            <form class="form" novalidate="novalidate"  id="kt_login_signin_form">
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Ingresar</h2>
                                    <span class="text-muted font-weight-bold font-size-h4">O <a href="" class="text-primary font-weight-bolder" id="kt_login_signup">Crear cuenta</a></span>
                                </div>
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Correo</label>
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="email" name="correo" autocomplete="off"/>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Contraseña</label>
                                        <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">
                                            Olvidó su contraseña ?
                                        </a>
                                    </div>
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="pass" autocomplete="off"/>
                                </div>
                                <div class="text-center pt-2">
                                    <button id="kt_login_signin_submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Ingresar</button>
                                </div>
                            </form>
                        </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                        <div class="login-form login-signup pt-11">
                            <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Registrase</h2>
                                    <p class="text-muted font-weight-bold font-size-h4">Ingrese la información solicitada</p>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" name="id_pais" id="id_pais">
                                        <option value="">Seleccione País</option>
                                        <?php foreach ($paises as $key => $value): ?>
                                            <option value="<?=$value->id_pais?>" <?php if ($value->id_pais==60): ?> selected  <?php endif ?>  ><?=$value->pais ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="Nombre" name="nombre" autocomplete="off" id="nombre" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Correo" name="correo" autocomplete="off"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Contraseña" name="pass" autocomplete="new-password"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirmar Contraseña" name="cpass" autocomplete="off"/>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox mb-0">
                                        <input type="checkbox" name="agree"/>Acepto los &nbsp;<a href="https://jrtec.cl/iot-rasp/politicaPrivacidad.pdf" target="_blank"> terminos y condiciones</a>.&nbsp;&nbsp;
                                        <span></span>
                                    </label>
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                    <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Registrarme</button>
                                    <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <!--end::Signup-->
                        <!--begin::Forgot-->
                        <div class="login-form login-forgot pt-11">
                            <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Olvido su contraseña ?</h2>
                                    <p class="text-muted font-weight-bold font-size-h4">Ingrese su correo registrado</p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Correo" name="correo" autocomplete="off"/>
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                    <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Enviar</button>
                                    <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <!--end::Forgot-->
                    </div>
                </div>
            </div>

            <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
                <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                    <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Datos desde su raspberry-pi</h3>
                    <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                        Genere proyectos ilimitados<br/>
                        Acceda a los datos desde la web y en las plataformas móviles. <br>
                        <a href="#"><img width="100px" src="<?=base_url()?>/public/Template/assets/media/project-logos/appstore.png" alt=""></a>
                        <a href="#"><img width="100px" src="<?=base_url()?>/public/Template/assets/media/project-logos/playstore.png" alt=""></a>
                    </p>

                </div>
                <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?=base_url()?>/public/Template/assets/media/svg/illustrations/login-visual-2.svg);"></div>
            </div>
        </div>
	</div>
        <script>
            var HOST_URL = "";
            var KTAppSettings = {
			    "breakpoints": {
			        "sm": 576,
			        "md": 768,
			        "lg": 992,
			        "xl": 1200,
			        "xxl": 1400
			    },
			    "colors": {
			        "theme": {
			            "base": {
			                "white": "#ffffff",
			                "primary": "#3699FF",
			                "secondary": "#E5EAEE",
			                "success": "#1BC5BD",
			                "info": "#8950FC",
			                "warning": "#FFA800",
			                "danger": "#F64E60",
			                "light": "#E4E6EF",
			                "dark": "#181C32"
			            },
			            "light": {
			                "white": "#ffffff",
			                "primary": "#E1F0FF",
			                "secondary": "#EBEDF3",
			                "success": "#C9F7F5",
			                "info": "#EEE5FF",
			                "warning": "#FFF4DE",
			                "danger": "#FFE2E5",
			                "light": "#F3F6F9",
			                "dark": "#D6D6E0"
			            },
			            "inverse": {
			                "white": "#ffffff",
			                "primary": "#ffffff",
			                "secondary": "#3F4254",
			                "success": "#ffffff",
			                "info": "#ffffff",
			                "warning": "#ffffff",
			                "danger": "#ffffff",
			                "light": "#464E5F",
			                "dark": "#ffffff"
			            }
			        },
			        "gray": {
			            "gray-100": "#F3F6F9",
			            "gray-200": "#EBEDF3",
			            "gray-300": "#E4E6EF",
			            "gray-400": "#D1D3E0",
			            "gray-500": "#B5B5C3",
			            "gray-600": "#7E8299",
			            "gray-700": "#5E6278",
			            "gray-800": "#3F4254",
			            "gray-900": "#181C32"
			        }
			    },
			    "font-family": "Poppins"
			};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
	   <script src="<?=base_url()?>/public/Template/assets/plugins/global/plugins.bundle.js"></script>
	   <script src="<?=base_url()?>/public/Template/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	   <script src="<?=base_url()?>/public/Template/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
        </body>
    <!--end::Body-->
</html>
<script type="text/javascript">
    "use strict";

// Class Definition
var KTLogin = function() {
    var _login;

    var _showForm = function(form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    }

    var _handleSignInForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
            KTUtil.getById('kt_login_signin_form'),
            {
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'Usuario es requerido'
                            }
                        }
                    },
                    pass: {
                        validators: {
                            notEmpty: {
                                message: 'Contraseña es requerido'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                    bootstrap: new FormValidation.plugins.Bootstrap()
                }
            }
        );

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    var data = $('#kt_login_signin_form').serialize();
                    $.ajax({
                        url:"<?=base_url()?>/login/login",
                        type:'POST',
                        data:data,
                        success:function(data) {
                            if (data==1) {
                                $(location).attr('href', '<?=base_url("proyectos/index")?>');
                            }else{
                                $('#kt_login_signin_form :submit').attr('disabled', false);
                                Swal.fire("Usuario o contraseña erronea","","error");
                            }
                        }
                    }); 
                } else {
                    swal.fire({
                        text: "Complete todos los datos",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });

        // Handle forgot button
        $('#kt_login_forgot').on('click', function (e) {
            e.preventDefault();
            _showForm('forgot');
        });

        // Handle signup
        $('#kt_login_signup').on('click', function (e) {
            e.preventDefault();
            _showForm('signup');
        });
    }

    var _handleSignUpForm = function(e) {
        var validation;
        var form = KTUtil.getById('kt_login_signup_form');

        validation = FormValidation.formValidation(
            form,
            {
                fields: {
                    id_pais: {
                        validators: {
                            notEmpty: {
                                message: 'Pais es requerido'
                            }
                        }
                    },
                    nombre: {
                        validators: {
                            notEmpty: {
                                message: 'Nombre es requerido'
                            }
                        }
                    },
                    correo: {
                        validators: {
                            notEmpty: {
                                message: 'Correo es requerido'
                            },
                            emailAddress: {
                                message: 'Esto no es un correo valido'
                            }
                        }
                    },
                    pass: {
                        validators: {
                            notEmpty: {
                                message: 'Contraseña es requerida'
                            }
                        }
                    },
                    cpass: {
                        validators: {
                            notEmpty: {
                                message: 'Confirme la contraseña'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="pass"]').value;
                                },
                                message: 'La contraseña no es igual'
                            }
                        }
                    },
                    agree: {
                        validators: {
                            notEmpty: {
                                message: 'Tiene que aceptar los terminos y condiciones'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap()
                }
            }
        );

        $('#kt_login_signup_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    var data = $('#kt_login_signup_form').serialize();
                    $.ajax({
                        url:"<?=base_url()?>/login/registrar",
                        type:'POST',
                        data:data,
                        success:function(data){
                            if (data>0) {
                                $(location).attr('href', '<?=base_url("proyectos/index")?>');
                            }else{
                                $('#kt_login_signin_form :submit').attr('disabled', false);
                                Swal.fire("Ha ocurrido un errror","","error");
                            }
                        }
                    }); 
                } else {
                    swal.fire({
                        text: "Complete todos los datos",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });

        // Handle cancel button
        $('#kt_login_signup_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
            KTUtil.getById('kt_login_forgot_form'),
            {
                fields: {
                    correo: {
                        validators: {
                            notEmpty: {
                                message: 'Correo es requerido'
                            },
                            emailAddress: {
                                message: 'Esto no es un correo valido'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap()
                }
            }
        );

        // Handle submit button
        $('#kt_login_forgot_submit').on('click', function (e) {

            e.preventDefault();

            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    var data = $('#kt_login_forgot_form').serialize();
                    $.ajax({
                        url:"<?=base_url()?>/login/resetPassCorreo",
                        type:'POST',
                        data: data,
                        success:function(data){
                            if(data == "1"){
                                Swal.fire(
                                    'Listo!',
                                    'El correo para restablecer la contraseña ha sido enviado',
                                    'success'
                                );
                                $(".swal2-confirm").on("click", function(){
                                    window.location.href = "<?= base_url(''); ?>";
                                });
                            }else if (data == 0){
                                $('#kt_login_forgot_form :submit').attr('disabled', false);
                                Swal.fire(
                                    'Error!',
                                    'El correo no se encuentra registrado en nuestra base de datos',
                                    'warning'
                                );
                            }
                        }
                    });
                } else {
                    swal.fire({
                        text: "Complete todos los datos",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });

        // Handle cancel button
        $('#kt_login_forgot_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');

            _handleSignInForm();
            _handleSignUpForm();
            _handleForgotForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});

</script>

