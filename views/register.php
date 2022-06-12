<div class="container mx-auto grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 text-gray-900 px-3">
    <div>
        <h1 class="text-4xl lg:text-5xl font-bold leading-tight">Join us!</h1>
        <p class="text-gray-700 mt-8">
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially uncha
        </p>
    </div>
    <form method="post" action="">
        <div class="mb-6">
            <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full name</label>
            <input type="text" name="full_name" id="full_name" value="<?php echo $register->full_name;?>" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First and Last name" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
            <input type="email" id="email" name="email" value="<?php echo $register->email;?>" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@domain.com" required>
            <div class="text-red-500"><?php  echo $register->errors['email'][0];?></div>
        </div>
        <div class="grid lg:grid-cols-2 lg:gap-3">
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                <input type="text" id="username" name="username" value="<?php echo $register->username;?>" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="choose a username" required>
                <div class="text-red-500"><?php  echo $register->errors['username'][0];?></div>
            </div>
            <div class="mb-6">
                <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Country</label>
                <input type="text" id="country" name="country" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Country" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
            <input type="password" id="password" name="password" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your password" required>
            <div class="text-red-500"><?php  echo $register->errors['password'][0];?></div>
        </div>
        <div class="mb-6">
            <label for="password_confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm your password</label>
            <input type="password" id="password_confirm" name="password_confirm" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your password" required>
            <div class="text-red-500"><?php  echo $register->errors['password_confirm'][0];?></div>
        </div>
        <div class="mt-8">
            <input type="hidden" name="join_date" value="<?php echo date('Y-m-d H:i:s') ?>">
            <button type="submit" class="uppercase text-sm font-bold tracking-wide bg-primary text-white p-3 rounded-sm w-full focus:shadow-outline">
                Register
            </button>
        </div>
    </form>
</div>