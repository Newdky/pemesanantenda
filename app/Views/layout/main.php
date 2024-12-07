<?= $this->include('layout/header'); ?>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?= $this->include('layout/sidebar'); ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?= $this->include('layout/navbar'); ?>
      <!--  Header End -->
      <?= $this->renderSection('content'); ?>
    </div>
  </div>
  <?= $this->include('layout/footer'); ?>
  