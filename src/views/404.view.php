<?php view("partials/header.view.php",["heading"=>$heading]) ?>
<?php view("partials/nav.view.php") ?>
<?php view("partials/banner.view.php",["heading"=>$heading]) ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="mb-4">
        <a href="/" class="text-blue-500 underline">Go Back Home</a>
      </p>
      <h1 class="text-red-500 text-2xl font-bold">Sorry Page Not Found</h1>
    </div>
  </main>

<?php view("partials/footer.view.php") ?>