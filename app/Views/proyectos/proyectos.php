<?= $this->extend('base') ?>

<?= $this->section('style') ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <div class="row">
        <div class="col-12">
            <div class="text-right pb-4">
                <a href="<?= base_url('proyectos/agregarProyecto') ?>" class="btn btn-primary font-weight-bold">Agregar Proyecto</a>
            </div>

        </div>
    </div>
    <div class="row">
        <?php foreach ($proyectos as $proyecto) : ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="card card-custom gutter-b card-stretch">
                <div class="card-body pt-4">
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Acciones">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <ul class="navi navi-hover">
                                    <li class="navi-header font-weight-bold py-4">
                                        <span class="font-size-lg">Acciones:</span>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="navi-text">Editar</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="<?= base_url("proyectos/consultaProyecto/$proyecto->id_proyecto") ?>" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="fas fa-eye"></i>
                                            </span>
                                            <span class="navi-text">Ver</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-7">
                        <div class="d-flex flex-column">
                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?= $proyecto->nombre ?></a>
                        </div>
                    </div>
                    <p class="mb-7"><?= $proyecto->descripcion ?></p>
                    <div class="mb-7">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-dark-75 font-weight-bolder mr-2">Canales:</span>
                            <span class="text-muted font-weight-bold"><?= $proyecto->n_canales ?></span>
                        </div>
                    </div>
                    <a href="<?= base_url("proyectos/consultaProyecto/$proyecto->id_proyecto") ?>" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Ver Proyecto</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>