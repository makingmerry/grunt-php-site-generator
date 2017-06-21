<?php
  $page = 'index';
  include 'snippets/header.php';
  include 'snippets/preloader.php';
?>

<div class="frame">
  <div class="frame__top">
    <!-- mast -->
    <div class="mb-4 frame__mast-wrap">
      <?php include 'snippets/mast.php'; ?>
    </div>

    <!-- main -->
    <div class="frame__main-wrap" id="mainframe-wrap">
      <main class="mainframe" data-namespace="<?php echo $page; ?>">
        index<br>
        <a href="/default.php">go to default page</a>
      </main>
    </div>
  </div>

  <!-- base -->
  <div class="frame__bot">
    <div class="mt-4 frame__base-wrap">
      <?php include 'snippets/base.php'; ?>
    </div>
  </div>
</div>

<?php include 'snippets/footer.php'; ?>