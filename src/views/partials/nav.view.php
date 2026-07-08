<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <svg data-component="Octicon" aria-hidden="true" focusable="false" class="octicon octicon-mark-github" viewBox="0 0 24 24" width="32" height="32" fill="white" display="inline-block" overflow="visible" style="vertical-align:text-bottom"><path d="M10.226 17.284c-2.965-.36-5.054-2.493-5.054-5.256 0-1.123.404-2.336 1.078-3.144-.292-.741-.247-2.314.09-2.965.898-.112 2.111.36 2.83 1.01.853-.269 1.752-.404 2.853-.404 1.1 0 1.999.135 2.807.382.696-.629 1.932-1.1 2.83-.988.315.606.36 2.179.067 2.942.72.854 1.101 2 1.101 3.167 0 2.763-2.089 4.852-5.098 5.234.763.494 1.28 1.572 1.28 2.807v2.336c0 .674.561 1.056 1.235.786 4.066-1.55 7.255-5.615 7.255-10.646C23.5 6.188 18.334 1 11.978 1 5.62 1 .5 6.188.5 12.545c0 4.986 3.167 9.12 7.435 10.669.606.225 1.19-.18 1.19-.786V20.63a2.9 2.9 0 0 1-1.078.224c-1.483 0-2.359-.808-2.987-2.313-.247-.607-.517-.966-1.034-1.033-.27-.023-.359-.135-.359-.27 0-.27.45-.471.898-.471.652 0 1.213.404 1.797 1.235.45.651.921.943 1.483.943.561 0 .92-.202 1.437-.719.382-.381.674-.718.944-.943"></path></svg>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
              <a href="/" aria-current="<?= isURL("/") ? "page" : "" ?>" class="<?= isURL("/") ? "text-white bg-gray-900" : "text-gray-300 hover:bg-white/5 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-medium">Dashboard</a>
              <?php if($_SESSION['user'] ?? false) : ?>
                <a href="/notes" aria-current="<?= isURL("/notes") ? "page" : "" ?>" class="<?= isURL("/notes") ? "text-white bg-gray-900" : "text-gray-300 hover:bg-white/5 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-medium ">Notes</a>
              <?php endif; ?>
              <a href="/about" aria-current="<?= isURL("/about") ? "page" : "" ?>" class="<?= isURL("/about") ? "text-white bg-gray-900" : "text-gray-300 hover:bg-white/5 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-medium ">About</a>
              <a href="/contact" aria-current="<?= isURL("/contact") ? "page" : "" ?>" class="<?= isURL("/contact") ? "text-white bg-gray-900" : "text-gray-300 hover:bg-white/5 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <!-- Profile dropdown -->
            <el-dropdown class="relative ml-3">
              <div>
                <?php if($_SESSION['user'] ?? false) : ?>
                  <form method="POST" action="/session">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Log Out</button>
                  </form>
                <?php else : ?>
                  <a href="/register" class="<?= isURL("/register") ? "text-white bg-gray-900" : "text-gray-300 hover:bg-white/5 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Register</a>
                  <a href="/login" class="<?= isURL("/login") ? "text-white bg-gray-900" : "text-gray-300 hover:bg-white/5 hover:text-white" ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Log In</a>
                <?php endif; ?>
              </div>
            </el-dropdown>
          </div>
        </div>
        <details class="md:hidden">
          <summary class="list-none cursor-pointer p-2 text-gray-400">
             <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
          </summary>

          <div class="absolute left-0 w-full bg-gray-800 z-1">
            <a href="/" class="block p-4 text-white">Dashboard</a>
            <?php if($_SESSION['user'] ?? false) : ?>
              <a href="/notes" class="block p-4 text-white">Notes</a>
            <?php endif; ?>
            <a href="/about" class="block p-4 text-white">About</a>
            <a href="/contact" class="block p-4 text-white">Contact</a>
            <?php if($_SESSION['user'] ?? false) : ?>
              <div>
                <form method="POST" action="/session">
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="block p-4 text-white">Log Out</button>
                </form>
              </div>
            <?php else : ?>
              <a href="/register" class="block p-4 text-white">Register</a>
              <a href="/login" class="block p-4 text-white">Log In</a>
            <?php endif; ?>
          </div>
        </details>
      </div>
    </div>

    
  </nav>