<?php
/** @var $this \app\core\View */

use app\core\Application;

$this->title = 'Profile';
?>
<div class="container mx-auto">
    <div class="bg-white p-3.5">
        <div class="px-3 md:px-28 py-10">
            <div class="">
                <div class="relative">
                    <img src="asset/user.png" class="rounded-full" width="80">
                    <span class="absolute border-white border-4 h-5 w-5 top-12 left-16 bg-green-700 rounded-full"></span>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="mt-5">
                    <p class="font-bold text-xl">Abdeslam Loukili</p>
                    <p class="text-lg">@<?php echo Application::$app->user->getDisplayName() ?></p>
                    <p><span>location </span>joined May 23, 2022</p>
                </div>
                <div >
                    <a href="#" class="rounded rounded-lg px-3 py-1 border border-primary text-primary">
                        edit profile
                    </a>
                </div>
            </div>

            <div class="mt-11 p-3.5 bg-yellow-50">
                events I am part of:
                <div class="mt-7 grid md:grid-cols-3">
                    <div class="md:col-span-1">
                        <img src="asset/first.png">
                    </div>
                    <div class="md:col-span-2">
                        <div class="p-3.5 flex flex-col justify-evenly h-full">
                            <p class="font-bold text-2xl ">
                                event's title starting and ending date
                            </p>
                            <p>
                                from:
                                <span class="text-blue-900"> July 12, 2022</span>
                                to:
                                <span class="text-yellow-800"> July 27, 2022</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


