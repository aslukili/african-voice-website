<?php
/** @var $this \app\core\View */

$this->title = 'Profile';
?>


<body class="flex flex-col h-screen">
<main class="flex-grow bg-slate-300 flex justify-center items-center">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-md">
        <div class="md:flex">
            <div class="w-full p-2 py-10">
                <div class="flex justify-center">
                    <div class="relative">
                        <img src="https://www.shareicon.net/data/512x512/2017/03/14/881194_users_512x512.png" class="rounded-full" width="80">
                        <span class="absolute border-white border-4 h-5 w-5 top-12 left-16 bg-green-700 rounded-full"></span>
                    </div>
                </div>
                <div class="flex flex-col text-center mt-3 mb-4">
                    <span class="text-2xl font-medium">username</span>
                </div>
                <p class="px-16 text-center font-bold">Signup date: <span class="font-light text-md text-gray-800">signupadasdf</span>
                    <br />Last login: <span class="font-light text-md text-gray-800">lllllggg</span></p>
                <div class="px-14 mt-5">
                    <button class="h-12 bg-blue-700 w-full text-white text-md rounded hover:shadow hover:bg-blue-800 mb-2" onclick="window.location.href='./contacts/'">My Contacts</button>
                    <button class="h-12 bg-gray-200 w-full text-black text-md rounded hover:shadow hover:bg-gray-300 " onclick="window.location.href='../includes/logout.inc.php'">Log out</button>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
