<?php require_once APPROOT . '/views/inc/header.php'; ?>

<!--jesuss-->

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Editoriales</h4>
                                                        </div>
                                                        <div>
                                                            <a href="<?php echo URLROOT; ?>Editorial/formAddEditorial" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Añadir Editorial</a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="form-check form-check-flat mt-0">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" disabled class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                        </div>
                                                                    </th>
                                                                    <th>Id</th>
                                                                    <th>Nombre</th>
                                                                    <th>Telefono</th>
                                                                    <th>Ubicación</th>
                                                                    <th>Editar</th>
                                                                    <th>Eliminar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($data as $editorial) :; ?>
                                                                <tr>
                                                                        <td>
                                                                            <div class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div>
                                                                                    <h6><?php echo $editorial->idEditorial; ?></h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?php echo $editorial->nombreEditorial; ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?php echo $editorial->telefonoEditorial; ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?php echo $editorial->ubicacionEditorial; ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?php echo URLROOT; ?>Editorial/formUpdateEditorial/<?php echo $editorial->idEditorial;?>">
                                                                                <div class="badge badge-opacity-primary">Editar</div>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?php echo URLROOT; ?>Editorial/deleteEditorial/<?php echo $editorial->idEditorial;?>">
                                                                                <div class="badge badge-opacity-danger">Eliminar</div>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once APPROOT . '/views/inc/footer.php'; ?>