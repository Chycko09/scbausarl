@extends('layout.maquette')
@section('titre')
    Projet
@endsection
@section('sous_titre')
    Carnet des projets
@endsection
@section('content')
<table class="table align-items-center table-flush table-hover" id="dataTableHover">
    <div class="row">
    <div class="col-9"></div>
    <div class="col-3">
        <a href="{{route('ajoutClient')}}">
            <button type="button" class="btn btn-success float-right"><i class="fas fa-plus">Ajouter un projet</i></button>
        </a>
    </div>
    </div> <br>
    <thead class="thead-light">
      <tr>
        <th>Appellation du projet</th>
        <th>Type de batiments</th>
        <th>Localisation</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <tr>
            <th>Appellation du projet</th>
            <th>Type de batiments</th>
            <th>Localisation</th>
          </tr>
      </tr>
    </tfoot>
    <tbody>
      <tr class="clickable-row" data-href="{{route('profilClient')}}" style="cursor: pointer;">
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>

      </tr>
      <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>

      </tr>
      <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>

      </tr>
      <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>

      </tr>
      <tr>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>

      </tr>
      <tr>
        <td>Brielle Williamson</td>
        <td>Integration Specialist</td>
        <td>New York</td>

      </tr>
      <tr>
        <td>Herrod Chandler</td>
        <td>Sales Assistant</td>
        <td>San Francisco</td>

      </tr>
      <tr>
        <td>Rhona Davidson</td>
        <td>Integration Specialist</td>
        <td>Tokyo</td>

      </tr>
      <tr>
        <td>Colleen Hurst</td>
        <td>Javascript Developer</td>
        <td>San Francisco</td>

      </tr>
      <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>

      </tr>
      <tr>
        <td>Jena Gaines</td>
        <td>Office Manager</td>
        <td>London</td>

      </tr>
      <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>

      </tr>
      <tr>
        <td>Charde Marshall</td>
        <td>Regional Director</td>
        <td>San Francisco</td>

      </tr>

    </tbody>
  </table>
@endsection
