@extends('layout.maquette')
@section('titre')
    Employé
@endsection
@section('sous_titre')
    Ajout d'un nouveau employé
@endsection
@section('content')
<!-- Form Basic -->
              <div class="card mb-4  col-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Fiche d'enregistrement employé</h6>
                </div>
                <div class="card-body">
                  <form>
                    <fieldset>
                          <legend><b>Employé</b></legend>

                    <div class="row">
                        <div class="custom-control custom-radio col-4">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label font-weight-bold" for="customRadio1">Monsieur</label>
                        </div>
                        <div class="custom-control custom-radio col-4">
                            <input type="radio" id="customRadio" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label font-weight-bold" for="customRadio">Monsieur</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label font-weight-bold" for="customRadio3">Monsieur</label>
                        </div>
                    </div><br>
                    <div class="form-group font-weight-bold">
                      <label for="exampleInputEmail1">Nom</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter le nom">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="exampleInputEmail1">Prénoms</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter le(s) prénoms">
                      </div>
                      <div class="form-group font-weight-bold">
                        <label for="exampleInputEmail1">Nom de jeune fille</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter le nom de jeune fille">
                      </div>
                      <div class="row">
                      <div class="form-group col-6 font-weight-bold" id="simple-date1">
                        <label for="simpleDataInput">Date de naissance</label>
                          <div class="input-group date">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="date" class="form-control" id="simpleDataInput">
                          </div>
                      </div>
                      <div class="form-group col-6 font-weight-bold">
                        <label for="exampleInputEmail1">Lieu de naissance</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                          placeholder="Entrer le lieu de naissance">
                      </div>
                    </div>

                      <div class="form-group font-weight-bold">
                        <label for="exampleInputEmail1">Fonction</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Entrer la profession">
                      </div>
                      <div class="custom-control custom-radio row font-weight-bold">
                        <span><b> Situation matrimoniale</b></span>
                        <div class="col-3">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Marié(e)</label>
                        </div>
                        <div class="col-3">
                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio5">Célibataire</label>
                        </div><br>
                      </div>
                      <div class="form-group font-weight-bold">
                        <label for="exampleInputEmail1">Téléphone</label>
                        <input type="tel" class="form-control" placeholder="Enter le téléphone du domicile">
                      </div>
                      <div class="row">

                        <div class="form-group col-6 font-weight-bold">
                          <label for="exampleInputEmail1">E-mail</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Entrer le lieu de naissance">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-6 font-weight-bold">
                          <label for="exampleInputEmail1">Adresse</label>
                          <input type="tel" class="form-control" aria-describedby="emailHelp"
                            placeholder="Numéro l'adresse">
                        </div>
                          <div class="form-group col-6 font-weight-bold">
                            <label for="exampleInputEmail1">Quartier</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp"
                              placeholder="Entrer le quartier">
                          </div>
                        </div>


                    <div class="form-group font-weight-bold">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>

                    <hr class="sidebar-divider">
                    <legend><b>Personne à contacter en cas d'indisponibilité</b></legend>
                    <div class="form-group font-weight-bold">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter le nom">
                    </div>
                    <div class="form-group font-weight-bold">
                          <label for="exampleInputEmail1">Prénoms</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter le(s) prénoms">
                    </div>
                    <div class="form-group font-weight-bold">
                          <label for="exampleInputEmail1">Lieu de residence</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter le lieu résidence">
                    </div>
                    <div class="form-group font-weight-bold">
                            <label for="exampleInputEmail1">Contact(s) téléphonique(s)</label>
                            <input type="tel" class="form-control"
                              placeholder="Entrer le numéro de téléphone">
                    </div>
                    <div class="form-group font-weight-bold">
                            <label for="exampleInputEmail1">Filliation</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder="Entrer la filliation">
                    </div>

                </fieldset>
                    <button type="submit" class="btn btn-success">Sauvegarder <i class="far fa-save"></i></button>

                </form>
                </div>
              </div>


@endsection
