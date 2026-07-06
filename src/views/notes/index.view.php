<?php view("partials/header.view.php",["heading"=>$heading]) ?>
<?php view("partials/nav.view.php") ?>
<?php view("partials/banner.view.php",["heading"=>$heading]) ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
          <?php foreach($notes as $note) : ?>
            <li>
              <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= isCheckScript($note['body']) ? htmlspecialchars($note['body']) : $note['body'] ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>

        <p class="mt-6">
          <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
  </main>

<?php view("partials/footer.view.php") ?>