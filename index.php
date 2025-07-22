<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Farm2Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 text-gray-800 font-sans">

  <!-- Navbar -->
  <nav class="bg-green-700 text-white p-4 shadow-lg">
    <div class="container mx-auto flex justify-between">
      <h1 class="text-xl font-bold">Farm2Home</h1>
      <div>
        <a href="index.php" class="px-3 hover:underline">Home</a>
        <a href="about.php" class="px-3 hover:underline">About</a>
        <a href="contact.php" class="px-3 hover:underline">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Form Section -->
  <section class="py-10">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-xl">
      <h2 class="text-2xl font-bold text-center text-green-700 mb-6">Order Fresh Vegetables</h2>
      <form action="order.php" method="POST" class="space-y-4">
        <input type="text" name="name" placeholder="Your Name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
        <input type="text" name="address" placeholder="Your Address" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
        <input type="text" name="vegetable" placeholder="Vegetable Name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
        <input type="number" name="quantity" placeholder="Quantity (in kg)" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" />
        <button type="submit" class="w-full bg-green-700 text-white py-2 rounded-lg hover:bg-green-800 transition duration-200">Order Now</button>
      </form>
    </div>
  </section>

</body>
</html>