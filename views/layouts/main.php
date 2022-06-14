<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/output.css">
    <script src="js/index.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $this->title ?></title>
</head>
<body class="font-primary">
    <header
            class="lg:container lg:mx-auto sticky top-0 z-30 w-full md:py-2 bg-white shadow-lg shadow-red-300/10 font-hacking font-medium">
        <nav class="flex flex-wrap items-center justify-between w-full px-4 text-lg">
            <div>
                <a href="#">
                    <img class="h-12" src="asset/african-voice-logo.png" alt="" />
                </a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul class="pt-4 font-bold text-base text-gray-900 md:flex md:justify-between md:items-center md:pt-0">
                    <li>
                        <a class="md:p-4 py-2 block hover:text-primary" href="/">Home</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-primary" href="/events">Events</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-primary" href="/community">Community</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-primary" href="/contact">Contact</a>
                    </li>
                </ul>
                <?php use app\core\Application;

                if (Application::isGuest()): ?>
                        <a class="md:px-4 md:py-1 md:border md:rounded-md md:border-primary md:hover:bg-white  md:bg-primary md:block hover:text-primary md:text-white transition ease-in delay-75"
                           href="/register">Join us</a>
                <?php else: ?>
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white bg-red-900 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><?php echo Application::$app->user->getDisplayName() ?><svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="/member-dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log out</a>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
    </header>
<main class="bg-gray-50">
    <?php if (Application::$app->session->getFlash('success')): ?>
        <div class="alert alert-success">
            <p><?php echo Application::$app->session->getFlash('success') ?></p>
        </div>
    <?php endif; ?>
    {{content}}
</main>
<footer class="bg-gray-900 text-gray-50">
    <div class="container mx-auto pt-8">
        <!--        newsletter and links-->
        <div class="md:grid md:grid-cols-2  md:justify-between">
            <div class=" text-center order-2">
                <!--        newsletter-->
                <p class="font-bold text-3xl">Subscribe to our newsletter</p>
                <p class="mt-7 ">Get monthly Updates, news and best blogs that deserve your time derictly to your inbox</p>
                <form class="mt-7">
                    <label for="email"></label>
                    <input type="email" name="email" placeholder="Email address">
                    <input type="submit" value="Subscribe" class="bg-gray-100 font-medium text-gray-900">
                </form>
            </div>
            <div class="sm:flex mt-9 justify-around md:px-3 order-1">
                <!--        links-->
                <div>
                    <p class="font-bold">Website</p>
                    <ul class="mt-3 pl-1.5">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/">Events</a>
                        </li>
                        <li>
                            <a href="/">Community</a>
                        </li>
                        <li>
                            <a href="/">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-5 sm:mt-0">
                    <p class="font-bold">Helpful links</p>
                    <ul class="mt-3 pl-1.5">
                        <li>
                            <a href="/">Terms of use</a>
                        </li>
                        <li>
                            <a href="/">Privacy policy</a>
                        </li>
                        <li>
                            <a href="/">Help</a>
                        </li>
                        <li>
                            <a href="/">FAQ</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="mt-10 md:flex justify-center items-center text-center">
            <!--            copyright and social icons-->
            <span>Copyright 2022 African Voice</span>
            <div class="flex justify-center">
                <a href="https://twitter.com/aslukili" target="_blank" class="p-1 flex items-center justify-center rounded-full border-2 border-red-300 w-9 h-9 m-1">
                    <i class=" fa-brands fa-instagram text-red-300"></i>
                </a>
                <a href="https://github.com/aslukili" target="_blank" class="p-1 flex items-center justify-center rounded-full border-2 border-red-300 w-9 h-9 m-1">
                    <i class="fa-brands fa-facebook text-red-300"></i>
                </a>
                <a href="https://linkedin.com/in/aslukili" target="_blank" class="p-1 flex items-center justify-center rounded-full border-2 border-red-300 w-9 h-9 m-1">
                    <i class="fa-brands fa-linkedin text-red-300"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>