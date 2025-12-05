
  <div class="navbar-wrapper">
    <div class="m-header flex items-center py-4 px-6 h-header-height">
      <a href="../dashboard/index.php" class="b-brand flex items-center gap-3">
        <!-- ========   Change your logo from here   ============ -->
        <img src="<?= base_url('assets/images/logo_supercar.png') ?>" class="img-fluid logo logo-lg" alt="logo" />
        <img src="<?= base_url('assets/images/logo_supercar.png') ?>" class="img-fluid logo logo-sm" alt="logo" />
      </a>
    </div>
    <br><br>
    <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
        <li class="pc-item">
        <li class="pc-item">
          <a href="../dashboard/index.php" class="pc-link">
            <span class="pc-micon">
              <i data-feather="home"></i>
            </span>
            <span class="pc-mtext">Vue d'ensemble</span>
          </a>
          <a href="../dashboard/index.php" class="pc-link">
            <span class="pc-micon">
              <i data-feather="message-circle"></i>
            </span>
            <span class="pc-mtext">Commentaires</span>
          </a>
          <a href="../dashboard/index.php" class="pc-link">
            <span class="pc-micon">
              <i style="color: #a9b7d0d1" class="fa-regular fa-hourglass-half"></i>
            </span>
            <span class="pc-mtext">Demandes d'essai</span>
          </a>
          <a href="<?= route_to('adminService') ?>" class="pc-link">
            <span class="pc-micon">
              <i style="color: #a9b7d0d1" class="fa-solid fa-hand-holding-medical"></i>
            </span>
            <span class="pc-mtext">Services</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Gestion des vehicules</label>
          <i data-feather="feather"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../elements/icon-feather.php" class="pc-link">
            <span class="pc-micon"> <i data-feather="feather"></i></span>
            <span class="pc-mtext">Liste des vehicules</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../elements/bc_color.php" class="pc-link">
            <span class="pc-micon"> <i data-feather="edit"></i></span>
            <span class="pc-mtext">Modifier/Supprimer</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="<?= route_to('formVoiture') ?>" class="pc-link">
            <span class="pc-micon"> <i data-feather="type"></i></span>
            <span class="pc-mtext">Ajouter</span>
          </a>
        </li>
        
        <li class="pc-item pc-caption">
          <label>Gestion des utilisateurs</label>
          <i data-feather="feather"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../elements/icon-feather.php" class="pc-link">
            <span class="pc-micon"> <i data-feather="feather"></i></span>
            <span class="pc-mtext">Liste des utilisateurs</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../elements/bc_color.php" class="pc-link">
            <span class="pc-micon"> <i data-feather="edit"></i></span>
            <span class="pc-mtext">Modifier/Supprimer</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../elements/bc_typography.php" class="pc-link">
            <span class="pc-micon"> <i data-feather="type"></i></span>
            <span class="pc-mtext">Ajouter</span>
          </a>
        </li>
        

        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i data-feather="monitor"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../pages/login-v1.php" class="pc-link" target="_blank">
            <span class="pc-micon"> <i data-feather="lock"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../pages/register-v1.php" class="pc-link" target="_blank">
            <span class="pc-micon"> <i data-feather="user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Other</label>
          <i data-feather="sidebar"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i> </span><span
              class="pc-mtext">Menu levels</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../other/sample-page.php" class="pc-link">
            <span class="pc-micon">
              <i data-feather="sidebar"></i>
            </span>
            <span class="pc-mtext">Sample page</span>
          </a>
        </li>
      </ul>
    </div>
  </div>