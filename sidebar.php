<div class="page-sidebar">
                <ul class="list-unstyled accordion-menu">
                  <li class="sidebar-title">
                    Menu
                  </li>
                  <li class="active-page mb-1">
                    <a href="index.php"><i data-feather="home"></i>Dashboard</a>
                  </li>
                  
              <?php if($_SESSION['role'] == '1') { ?>
                  <li class="active-page mb-1">
                    <a href="perspektif.php"><i data-feather="archive"></i>Perspektif</a>
                  </li>
                  <li class="active-page mb-1">
                    <a href="peta_strategi.php"><i data-feather="layers"></i>Peta Strategi</a>
                  </li>
                  <li class="active-page mb-1">
                    <a href="action_plan.php"><i data-feather="package"></i>Action Plan</a>
                  </li>
                  <li class="active-page mb-1">
                    <a href="hitung2.php"><i data-feather="book"></i>Hitung</a>
                  </li>
                  <li class="active-page mb-1">
                    <a href="hasil.php"><i data-feather="smile"></i>Hasil</a>
                  </li>
      <?php } ?>
              <?php if($_SESSION['role'] == '2') { ?>
                <li class="active-page mb-1">
                    <a href="hitung2.php"><i data-feather="book"></i>Hitung</a>
                  </li>
                  <li class="active-page mb-1">
                    <a href="hasil.php"><i data-feather="smile"></i>Hasil</a>
                  </li>
      <?php } ?>
                  
                </ul>
            </div>