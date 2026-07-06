<?php view("partials/header.view.php",["heading"=>$heading]) ?>
<?php view("partials/nav.view.php") ?>
<?php view("partials/banner.view.php",["heading"=>$heading]) ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>
            <a href="/notes" class="text-blue-500 underline">Go Back....</a>
        </p>
        <p class="mt-6">
          <?= isCheckScript($note['body']) ? htmlspecialchars($note['body']) : $note['body'] ?>
        </p>
    </div>
  </main>

<?php view("partials/footer.view.php") ?>