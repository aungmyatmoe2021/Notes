<?php require "partials/header.view.php" ?>
<?php require "partials/nav.view.php" ?>
<?php require "partials/banner.view.php" ?>
  
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

<?php require "partials/footer.view.php" ?>