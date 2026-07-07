<?php view("partials/header.view.php",["heading"=>$heading]) ?>
<?php view("partials/nav.view.php") ?>
<?php view("partials/banner.view.php",["heading"=>$heading]) ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <form method="POST" action="/note">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm/6 font-medium text-gray-900">Note</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= trim($note['body']) ?? "" ?></textarea>
                        </div>
                        <p class="mt-3 text-lg/6 text-red-600"><?= $errors['body'] ?? "" ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/notes" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Cancel</a>
            <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">update</button>
        </div>
        </form>

    </div>
  </main>

<?php view("partials/footer.view.php") ?>