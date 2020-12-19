<?= $this->extend('base') ?>

<?= $this->section('style') ?>
    <link href="<?= base_url() ?>/public/Template/assets/css/pages/wizard/wizard-1.css?v=7.1.6" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <div class="card card-custom">
        <div class="card-body p-0">
            <div class="wizard wizard-1" id="kt_projects_add" data-wizard-state="first" data-wizard-clickable="true">
                <!--begin::Wizard Nav-->
                <div class="wizard-nav border-bottom">
                    <div class="wizard-steps p-8 p-lg-10">
                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                            <div class="wizard-label">
                                <span class="svg-icon svg-icon-4x wizard-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                </span>
                                <h3 class="wizard-title">Proyecto</h3>
                            </div>
                            <span class="svg-icon svg-icon-xl wizard-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                            <div class="wizard-label">
                                <span class="svg-icon svg-icon-4x wizard-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3"></path>
                                            <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                </span>
                                <h3 class="wizard-title">Canales</h3>
                            </div>
                            <span class="svg-icon svg-icon-xl wizard-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
																		<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																	</g>
																</svg>
															</span>
                                <h3 class="wizard-title">Revisar y Aceptar</h3>
                            </div>
                            <span class="svg-icon svg-icon-xl wizard-arrow last">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                    </g>
                                </svg>
                            </span>
                        </div>


                    </div>
                </div>
                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-7">
                        <!--begin::Form Wizard-->
                        <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_projects_add_form" method="POST" action="<?=base_url()?>/proyectos/insertar">
                            <!--begin::Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">Proyecto:</h3>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row fv-plugins-icon-container">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" name="nombre" type="text" placeholder="Ingresar Nombre">
                                                <div class="fv-plugins-message-container"></div></div>
                                        </div>
                                        <div class="form-group row fv-plugins-icon-container">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Descripción</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid" name="descripcion" type="text" placeholder="Ingresar Descripción">
                                                <div class="fv-plugins-message-container"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="mb-10 font-weight-bold text-dark">Canales</h3>
                                            </div>

                                        </div>

                                        <div id="kt_repeater_1">
                                            <div class="form-group row">
                                                <div data-repeater-list="canales" class="col-lg-12">
                                                    <div data-repeater-item="item" class="form-group row align-items-center">
                                                        <div class="col-md-4">
                                                            <label>Nombre:</label>
                                                            <input type="text" class="form-control"  name="nombre_canal" placeholder="Ingresar Nombre" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Unidad</label>
                                                            <select class="form-control" name="id_unidad">
                                                                <option value="" disabled selected>Seleccionar Unidad</option>
                                                                <?php foreach ($unidades as $unidad): ?>
                                                                    <option value="<?= $unidad->id_unidad ?>"><?= $unidad->unidad ?> (<?= $unidad->simbolo ?>)</option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-4 pt-8">
                                                            <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                <i class="la la-trash-o"></i>Eliminar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                        <i class="la la-plus"></i>Agregar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5" data-wizard-type="step-content">
                                <h4 class="mb-10 font-weight-bold">Revisa los detalles y termina</h4>
                                <h6 class="font-weight-bold mb-3">Proyecto:</h6>
                                <table class="w-100">
                                    <tr>
                                        <td class="font-weight-bold text-muted">Nombre:</td>
                                        <td class="font-weight-bold text-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Descripción:</td>
                                        <td class="font-weight-bold text-right"></td>
                                    </tr>
                                </table>
                                <div class="separator separator-dashed my-5"></div>
                                <h6 class="font-weight-bold mb-3">Canales:</h6>
                                <table class="w-100">
                                    <tr>
                                        <td class="font-weight-bold text-muted">Canal 1:</td>
                                        <td class="font-weight-bold text-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Canal 2</td>
                                        <td class="font-weight-bold text-right"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Atrás</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Terminar</button>
                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Siguiente</button>
                                </div>
                            </div>
                            <div></div>
                            <div></div>
                            <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script>
        "use strict";
        var KTProjectsAdd = function() {
            var t, e, o, i = [];
            return {
                init: function() {
                    t = KTUtil.getById("kt_projects_add"),
                        e = KTUtil.getById("kt_projects_add_form"), (o = new KTWizard(t, {
                        startStep: 1,
                        clickableSteps: !1
                    })).on("change", (function(t) {
                        if (!(t.getStep() > t.getNewStep())) {
                            var e = i[t.getStep() - 1];
                            return e && e.validate().then((function(e) {
                                "Valid" == e ? (t.goTo(t.getNewStep()), KTUtil.scrollTop()) : Swal.fire({
                                    text: "Completa todos los campos requeridos.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, recibido!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light"
                                    }
                                }).then((function() {
                                    KTUtil.scrollTop()
                                }))
                            })), !1
                        }
                    })), o.on("changed", (function(t) {
                        KTUtil.scrollTop()
                    })), o.on("submit", (function(t) {
                        Swal.fire({
                            text: "Confirmar",
                            icon: "success",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Si, terminar!",
                            cancelButtonText: "No, cancelar",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-primary",
                                cancelButton: "btn font-weight-bold btn-default"
                            }
                        }).then((function(t) {
                            t.value ? e.submit() : "cancel" === t.dismiss && Swal.fire({
                                text: "Su formulario no ha sido enviado!.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, recibido!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-primary"
                                }
                            })
                        }))
                    })), i.push(FormValidation.formValidation(e, {
                        fields: {
                            nombre: {
                                validators: {
                                    notEmpty: {
                                        message: "El nombre del proyecto es requerido"
                                    }
                                }
                            },

                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                eleValidClass: ""
                            })
                        }
                    })), i.push(FormValidation.formValidation(e, {
                        fields: {
                            nombre_canal: {
                                validators: {
                                    notEmpty: {
                                        message: "El nombre del canal es requrido"
                                    },
                                }
                            },
                            id_unidad: {
                                validators: {
                                    notEmpty: {
                                        message: "La unidad es requerida"
                                    },
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                eleValidClass: ""
                            })
                        }
                    }));
                }
            }
        }();
        jQuery(document).ready((function() {
            KTProjectsAdd.init()
        }));

        $("#kt_projects_add_form").on("submit", function(e){
           e.preventDefault();
        });

        var KTFormRepeater = function() {

            var demo1 = function() {
                $('#kt_repeater_1').repeater({
                    initEmpty: false,

                    defaultValues: {
                        'text-input': 'foo'
                    },
                    show: function () {
                        $(this).slideDown();
                    },
                    hide: function (deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                });
            }
            return {
                init: function() {
                    demo1();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTFormRepeater.init();
        });
    </script>
<?= $this->endSection() ?>