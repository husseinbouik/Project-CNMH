@extends('base')
@section('title','Task managment')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Gestion des Taches</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div>
            <div class="card ">
                <div class="card-header">

                    <div class="col-sm-12 d-flex justify-content-between p-3">
                        <div class="d-flex justify-content-between">
                            <a href="Taches-add&edit.html" class="btn btn-primary"><i
                                    class="fa fa-plus"></i> </a>
                        </div>

                        <!-- SEARCH FORM -->
                        <form class="form-inline ml-3">
                            <div class="input-group input-group-sm">

                                <input type="search" class="form-control form-control-lg"
                                    placeholder="Recherche">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Développer la première fonctionnalité du projet</td>
                                    <td>description</td>

                                    <!-- <td>Utilisateur 1, Utilisateur 2</td> -->
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="Taches-add&edit.html"><i
                                                class="fas fa-pencil-alt"> </i> Edit </a>
                                        <a class="btn btn-danger btn-sm" href="#"> <i
                                                class="fas fa-trash"> </i> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Développer la deuxième fonctionnalité du projet</td>
                                    <td>description</td>

                                    <!-- <td>Utilisateur 3, Utilisateur 4</td> -->
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="Taches-add&edit.html"><i
                                                class="fas fa-pencil-alt"> </i> Edit </a>
                                        <a class="btn btn-danger btn-sm" href="#"> <i
                                                class="fas fa-trash"> </i> Delete </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Développer la troisième fonctionnalité du projet</td>
                                    <td>description</td>
                                    <!-- <td>Utilisateur 5, Utilisateur 6</td> -->
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="Taches-add&edit.html"><i
                                                class="fas fa-pencil-alt"> </i> Edit </a>
                                        <a class="btn btn-danger btn-sm" href="#"> <i
                                                class="fas fa-trash"> </i> Delete </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="card-header row">
                        <div class="float-right col-md-6">
                            <ul class="pagination pagination my-0">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                        <div class="float-left col-md-6 d-flex justify-content-end"
                            style="align-items: center; ">
                            <!-- <button type="button" class="btn btn-default swalDefaultQuestion">
            <i class="fas fa-download"></i> export_pdf
        </button> -->
                            <button type="button" class="btn btn-default mr-2 swalDefaultQuestion">
                                <i class="fas fa-download"></i> export
                            </button>
                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-file-import"></i> import
                            </button>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </section>

    </div><!-- /.container-fluid -->

</div>
@endsection