<?php include __DIR__ . '/_header.php'; ?>

<div class="max-w-2xl mx-auto px-4 py-10">
  
  <form action="../app/process_login.php" method="POST" class="bg-white p-6 rounded-xl shadow-lg border border-indigo-300 space-y-4">
    <h2 class="text-2xl font-semibold mb-2">Login</h2>
    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
      <input id="email" name="email" type="email" required class="mt-1 block w-full px-3 py-2 border rounded" />
    </div>

    <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
      <input id="password" name="password" type="password" required class="mt-1 block w-full px-3 py-2 border rounded" />
    </div>

    <div class="flex items-center gap-3">
      <button type="submit" class="bg-indigo-400 hover:bg-indigo-500 text-white font-semibold px-4 py-2 rounded-lg shadow">Login</button>
      <a href="register.php" class="text-sm text-indigo-400 hover:text-indigo-500 font-medium">Belum punya akun? Daftar</a>
    </div>
  </form>
</div>

<?php include __DIR__ . '/_footer.php'; ?>