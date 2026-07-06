<?php view("partials/header.view.php",["heading"=>$heading]) ?>
<?php view("partials/nav.view.php") ?>
<?php view("partials/banner.view.php",["heading"=>$heading]) ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      Here is the Dashboard Content
    </div>
  </main>

<?php view("partials/footer.view.php") ?>