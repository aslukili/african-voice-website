<div class="h-screen container mx-auto grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 text-gray-900 px-3">
    <div>
        <h1 class="text-4xl lg:text-5xl font-bold leading-tight">Login to your account</h1>
        <p class="text-gray-700 mt-8">
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially uncha
        </p>
    </div>
    <form method="post" action="">
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
            <input type="email" id="email" name="email" value="<?php echo $register->email;?>" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@domain.com" required>
            <div class="text-red-500"><?php  echo $register->errors['email'][0];?></div>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
            <input type="password" id="password" name="password" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your password" required>
            <div class="text-red-500"><?php  echo $register->errors['password'][0];?></div>
        </div>
        <div class="mt-8">
            <input type="hidden" name="last_login" value="<?php echo date('Y-m-d H:i:s') ?>">
            <button type="submit" class="uppercase text-sm font-bold tracking-wide bg-primary text-white p-3 rounded-sm w-full focus:shadow-outline">
                Register
            </button>
        </div>
    </form>
</div>