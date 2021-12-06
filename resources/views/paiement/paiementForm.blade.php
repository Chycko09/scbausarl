@extends('layout.maquette')
@section('titre')
    Paiement
@endsection
@section('sous_titre')
    Ajout d'un paiment
@endsection
@section('content')
<!-- Form Basic -->
              <div class="card mb-4  col-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Fiche de paiement</h6>
                </div>
                <div class="card-body">
                  <form>
                    <fieldset>
                          <legend><b> Paiement <i class="fas fa-cash-register text-warning"></i></b></legend>

                          <div class="form-group ">
                            <label for="exampleInputEmail1">Appartement</label>
                            <select class="form-control form-control  mb-3">
                                <option selected disabled>Veuillez-selectionner un appart</option>
                                <option>Appartement 1</option>
                                <option>Appartement 2</option>
                                <option>Appartement 3</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Montant du paiement</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder="Enter le montant du paiement" style="text-align: right;" size="9">
                          </div>
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Date de paiement</label>
                              <input type="date" class="form-control" aria-describedby="emailHelp"
                                placeholder="Numéro téléphone portable">
                            </div>


                </fieldset>
                    <button type="submit" class="btn btn-success">Sauvegarder <i class="far fa-save"></i></button>

                </form>
                </div>
              </div>


@endsection
