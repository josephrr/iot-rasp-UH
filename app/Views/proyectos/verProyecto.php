<?= $this->extend('base') ?>

<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="card card-custom gutter-b">
        <div class="card-body">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="mr-3">
                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                <?= $proyecto->nombre ?>
                                <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                        </div>
                        <div class="my-lg-0 my-1">
                            <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase">Editar</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
                            <?= $proyecto->descripcion ?>
                        </div>
                        <div class="d-flex flex-wrap align-items-center py-2">
                            <div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">
                                <span class="font-weight-bold">Espacio Utilizado</span>
                                <div class="progress progress-xs mt-2 mb-2">
                                    <?php
                                        $color = "bg-success";
                                        if($proyecto->n_canales > 3 && $proyecto->n_canales < 6){
                                            $color =  "bg-warning";
                                        }
                                        if($proyecto->n_canales > 5 && $proyecto->n_canales == 6){
                                            $color =  "bg-danger";
                                        }
                                    ?>
                                    <div class="progress-bar <?= $color ?>" role="progressbar" style="width: <?= (int) ($proyecto->n_canales*100/6) ?>%;" aria-valuenow="<?= (int) ($proyecto->n_canales*100/6) ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="font-weight-bolder text-dark"><?= (int) ($proyecto->n_canales*100/6) ?>% (<?= $proyecto->n_canales ?> / 6)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-solid my-7"></div>
            <div class="d-flex align-items-center flex-wrap">
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Canales</span>
                        <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold"></span><?= $proyecto->n_canales ?></span>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                    </span>
                    <div class="d-flex flex-column flex-lg-fill">
                        <span class="text-dark-75 font-weight-bolder font-size-sm"><?= $proyecto->n_datos ?> </span>
                        <a href="javacript:;" class="text-primary font-weight-bolder">Datos Ingresados</a>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                    <span class="mr-4">
                        <i class="fas fa-key fa-2x text-muted"></i>
                    </span>
                    <div class="d-flex flex-column text-dark-75">
                        <span class="font-weight-bolder font-size-sm">Token</span>
                        <span class="font-weight-bolder font-size-h5">
                        <span class="text-dark-50 font-weight-bold"></span><?= $proyecto->token ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($canales as $canal) : ?>
            <div class="col-lg-6">
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-header h-auto border-0">
                        <div class="card-title py-5">
                            <h3 class="card-label">
                                <span class="d-block text-dark font-weight-bolder"><?= $canal->nombre_canal ?></span>
                                <span class="d-block text-dark font-weight-bolder">ID: <?= $canal->id_canal ?></span>
                                <span class="d-block text-muted mt-2 font-size-sm"><?= $canal->unidad ?> <?= $canal->simbolo ?></span>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="kt_charts_<?= $canal->id_canal ?>"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script>
        "use strict";
        var KTFormRepeater = function() {
            var demo1 = function() {
                <?php foreach ($canales as $canal) : ?>
                var t_<?= $canal->id_canal ?> = document.getElementById("kt_charts_<?= $canal->id_canal ?>");
                if (t_<?= $canal->id_canal ?>) {
                    var e = {
                        series: [{
                            data: []
                        }],
                        chart: {
                            type: "area",
                            height: 350,
                            toolbar: {
                                show: true,
                                export: { csv: { headerCategory: 'Dato',}}
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        fill: {
                            type: "solid",
                            opacity: 1
                        },
                        stroke: {
                            curve: "straight",
                            show: true,
                            width: 1,
                            colors: ["#808080"]
                        },
                        xaxis: {
                            crosshairs: {
                                position: "front",
                                stroke: { color: "#808080", width: 1, dashArray: 3
                                }
                            },
                        },
                        noData: {
                            text: 'Cargando...'
                        },
                        colors: [KTApp.getSettings().colors.theme.light.secondary],
                    };
                    var chart_<?= $canal->id_canal ?> = new ApexCharts(
                        t_<?= $canal->id_canal ?>,
                        e
                    );
                    chart_<?= $canal->id_canal ?>.render();




                }

                <?php endforeach; ?>

                <?php foreach ($canales as $canal) : ?>

                function recargar_chart_<?= $canal->id_canal ?>(){
                    $.getJSON('<?= base_url() ?>/proyectos/consultaDatosCanal/<?= $canal->id_canal ?>', function(response) {
                        chart_<?= $canal->id_canal ?>.updateSeries([{
                            name: "<?= $canal->unidad ?>",
                            data: response
                        }])
                    });
                }


                recargar_chart_<?= $canal->id_canal ?>();
                <?php endforeach; ?>


                setInterval(recargarCharts, 10000);

                function recargarCharts() {
                    <?php foreach ($canales as $canal) : ?>
                    recargar_chart_<?= $canal->id_canal ?>();
                    <?php endforeach; ?>
                }
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