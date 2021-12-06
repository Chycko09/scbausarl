@extends('layout.maquette')
@section('titre')
    Souscription
@endsection
@section('sous_titre')
    Ajout d'une souscription
@endsection
@section('content')
<!-- Form Basic -->
              <div class="card mb-4  col-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Fiche d'enregistrement souscription</h6>
                </div>
                <div class="card-body">
                  <form>
                    <fieldset>
                          <legend><b> Souscription</b></legend>
                          <div class="form-group ">
                            <label for="exampleInputEmail1">Projet</label>
                            <select class="form-control form-control  mb-3">
                                <option>Veuillez-selectionner le projet</option>
                                <option>Projet 1</option>
                                <option>Projet 2</option>
                                <option>Projet 3</option>
                            </select>
                          </div>
                          <div class="form-group ">
                            <label for="exampleInputEmail1">Appartement</label>
                            <select class="form-control form-control  mb-3">
                                <option selected disabled>Veuillez-selectionner un appart</option>
                                <option>Appartement 1</option>
                                <option>Appartement 2</option>
                                <option>Appartement 3</option>
                            </select>
                          </div>

                            <div class="form-group ">
                              <label for="exampleInputEmail1">Date de la souscription</label>
                              <input type="date" class="form-control" aria-describedby="emailHelp"
                                placeholder="Numéro téléphone portable">
                            </div>


                </fieldset>
                    <button type="submit" class="btn btn-success">Sauvegarder <i class="far fa-save"></i></button>

                </form>
                </div>
              </div>


@endsection
