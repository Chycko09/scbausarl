@extends('layout.maquette')
@section('titre')
    Client
@endsection
@section('sous_titre')
    Ajout d'un nouveau client
@endsection
@section('content')
<!-- Form Basic -->
              <div class="card mb-4  col-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Fiche d'enregistrement client</h6>
                </div>
                <div class="card-body">
                  <form>
                    <fieldset>
                          <legend><b> Souscripteur</b></legend>

                    <div class="row civiliteid">
                        <div class="custom-control custom-radio col-4">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input m">
                            <label class="custom-control-label m" for="customRadio1">Monsieur</label>
                        </div>
                        <div class="custom-control custom-radio col-4">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input mme">
                            <label class="custom-control-label mme" for="customRadio2">Madame</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input mlle">
                            <label class="custom-control-label mlle" for="customRadio3">Mademoiselle</label>
                        </div>
                        <div class="civilite" style="display: none">
                           <input type="text" name="" id="" >
                        </div>

                    </div><br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter le nom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pr??noms</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter le(s) pr??noms">
                      </div>
                      <div class="form-group njeune">

                      </div>
                      <div class="row">
                      <div class="form-group col-6" id="simple-date1">
                        <label for="simpleDataInput">Date de naissance</label>
                          <div class="input-group date">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="date" class="form-control" id="simpleDataInput">
                          </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">Lieu de naissance</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                          placeholder="Entrer le lieu de naissance">
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pays de r??sidence</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Entrer le pays de r??sidence">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Profession</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Entrer la profession">
                      </div>
                      <div class="custom-control custom-radio row">
                        <span><b> Situation matrimoniale</b></span>
                        <div class="col-3">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Mari??(e)</label>
                        </div>
                        <div class="col-3">
                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio5">C??libataire</label>
                        </div><br>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">T??l??phone domicile</label>
                        <input type="tel" class="form-control" placeholder="Enter le t??l??phone du domicile">
                      </div>
                      <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">Portable</label>
                        <input type="tel" class="form-control" aria-describedby="emailHelp"
                          placeholder="Num??ro t??l??phone portable">
                      </div>
                        <div class="form-group col-6">
                          <label for="exampleInputEmail1">E-mail</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Entrer le lieu de naissance">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="exampleInputEmail1">Adresse</label>
                          <input type="tel" class="form-control" aria-describedby="emailHelp"
                            placeholder="Num??ro l'adresse">
                        </div>
                          <div class="form-group col-6">
                            <label for="exampleInputEmail1">Quartier</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp"
                              placeholder="Entrer le quartier">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                              <label for="exampleInputEmail1">Localit??</label>
                              <input type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="Entrer la localit??">
                            </div>
                              <div class="form-group col-6">
                                <label for="exampleInputEmail1">Bo??te postale</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                  placeholder="Num??ro de bo??te postale">
                              </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                              <label for="exampleInputEmail1">Pi??ces d'identit??</label>
                              <input type="tel" class="form-control" aria-describedby="emailHelp"
                                placeholder="Pi??ce d'identit??">
                            </div>
                              <div class="form-group col-6">
                                <label for="exampleInputEmail1">Num??ro</label>
                                <input type="email" class="form-control" aria-describedby="emailHelp"
                                  placeholder="Num??ro de la pi??ce d'identit??">
                              </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                              <label for="exampleInputEmail1">D??livr?? ??</label>
                              <input type="text" class="form-control" >
                            </div>
                              <div class="form-group col-6">
                                <label for="exampleInputEmail1">Par</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                  placeholder="">
                              </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                              <label for="exampleInputEmail1">le</label>
                              <div class="input-group date">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>
                                <input type="date" class="form-control" id="simpleDataInput">
                              </div>
                            </div>
                              <div class="form-group col-6">
                                <label for="exampleInputEmail1">Expire le</label>
                                <div class="input-group date">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="simpleDataInput">
                                  </div>
                              </div>
                        </div>

                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>

                    <hr class="sidebar-divider">
                    <legend><b>Personne ?? contacter en cas d'indisponibilit??</b></legend>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter le nom">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Pr??noms</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter le(s) pr??noms">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Lieu de residence</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter le lieu r??sidence">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact(s) t??l??phonique(s)</label>
                            <input type="tel" class="form-control"
                              placeholder="Entrer le num??ro de t??l??phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Filliation</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder="Entrer la filliation">
                        </div>

                </fieldset>
                    <button type="submit" class="btn btn-success" id="bouton">Sauvegarder <i class="far fa-save"></i></button>

                </form>
                </div>
              </div>
              <script type="text/javascript">
                 $(document).ready(function(){
                    $(document).on('change','.civiliteid',function(){

                        var mme=$('.mme').val();
                        var mlle=$('mlle').val();
                        var civ='';

                        if($('.m').is(':checked')){
                            $('.njeune').html("");
                            civ='M';
                        }else if($('.mme').is(':checked')){
                            civ='Mme';
                            $('.njeune').html("");
                             $('.njeune').append('<label for="exampleInputEmail1">Nom de jeune fille</label>'+
                            '<input type="text" class="form-control" id="exampleInputEmail1"'+
                            'aria-describedby="emailHelp" placeholder="Enter le nom de jeune fille">')
                        }else if($('.mlle').is(':checked')){
                            $('.njeune').html("");
                            civ='Mlle';
                        }
                        console.log(civ);
                        $('.civilite').html("");
                        $('.civilite').append('<input type="text" name="" value="'+civ+'">');
                    })
                 })

              </script>

@endsection
