<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="img/logo/logo.png">
      </div>
      <div class="sidebar-brand-text mx-3">Gestionnaire  SCBAU SARL</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-database text-success"></i>
        <span>Données</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Données
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="fas fa-chart-line text-success"></i>
        <span>Tableau de bords</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tableau de bords</h6>
          <a class="collapse-item" href="alerts.html">Etat de caisse</a>
          <a class="collapse-item" href="buttons.html">Appartements Pris</a>
          <a class="collapse-item" href="dropdowns.html">Appartements Libres</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fas fa-folder-plus text-success"></i>
        <span>Ajout de données</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Ajout de données</h6>
          <a class="collapse-item" href="{{route('listeSouscription')}}">Souscription</a>
          <a class="collapse-item" href="form_advanceds.html">Client</a>
          <a class="collapse-item" href="form_basics.html">Appartement</a>
          <a class="collapse-item" href="form_advanceds.html">Statut d'appartement</a>
          <a class="collapse-item" href="form_advanceds.html">Utilisateur</a>
          <a class="collapse-item" href="form_advanceds.html">Statut d'utilisateur</a>
          <a class="collapse-item" href="form_advanceds.html">Employé</a>
          <a class="collapse-item" href="form_advanceds.html">Projet</a>
        </div>
      </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Nos Collaborateurs
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('listeClient')}}">
            <i class="far fa-handshake text-success"></i>
          <span>Clients</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('listeEmploye')}}">
        <i class="fas fa-briefcase text-success"></i>
        <span>Employés</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Nos réalisations
    </div>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
        aria-controls="collapsePage">
        <i class="fab fa-product-hunt text-success"></i>
        <span>Projets</span>
      </a>
      <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Projets de SCBAU SARL</h6>
          <a class="collapse-item" href="login.html"><i class="fas fa-plus text-success"></i> Ajouter un projet</a>
          <a class="collapse-item" href="register.html"><i class="far fa-eye text-success"></i> Voir tous les projets</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area text-success"></i>
        <span>Statistiques</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version"></div>
  </ul>
  <!-- Sidebar -->
