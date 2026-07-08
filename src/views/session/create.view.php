<?php view("partials/header.view.php",["heading"=>$heading]) ?>
<?php view("partials/nav.view.php") ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" class="mx-auto h-10 w-auto" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Login Account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="/session" method="POST" class="space-y-6">
      <div>
        <div class="mt-2">
          <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Email address" value="<?= $_POST['email'] ?? '' ?>"/>
        </div>
        <p class="mt-3 text-lg/6 text-red-600"><?= $errors['email'] ?? "" ?></p>
      </div>

      <div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="**************" value="<?= $_POST['password'] ?? '' ?>"/>
        </div>
        <p class="mt-3 text-lg/6 text-red-600"><?= $errors['password'] ?? "" ?></p>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">login</button>
      </div>
    </form>
  </div>
</div>


<?php view("partials/footer.view.php") ?>