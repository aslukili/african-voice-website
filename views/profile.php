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
                    <p class="font-bold text-xl"><?php echo $user->full_name ?></p>
                    <p class="text-lg">@<?php echo $user->username ?></p>
                    <p><span class="font-bold">Country: </span><?php echo $user->country ?><br><span class="font-bold">Joined:  </span><?php echo $user->join_date ?> </p>
                </div>
                <div >
                    <a href="#" class="rounded rounded-lg px-3 py-1 border border-primary text-primary">
                        edit profile
                    </a>
                </div>
            </div>

            <?php if ($event): ?>
            <div class="mt-11 p-3.5 bg-yellow-50">
                events I am part of:
                <div class="mt-7 grid md:grid-cols-3">
                    <div class="md:col-span-1">
                        <img class="w-full h-56 object-center object-cover" src="images/<?php echo $event->image?>">
                    </div>
                    <div class="md:col-span-2">
                        <div class="p-3.5 flex flex-col justify-evenly h-full">
                            <p class="font-bold text-2xl ">
                                <?php echo $event->title?>
                            </p>
                            <p>
                                from:
                                <span class="text-blue-900"> <?php echo $event->starting_date?></span>
                                to:
                                <span class="text-yellow-800"> <?php echo $event->ending_date?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php else:?>
            <div class="text-lg">
                you're not enrolled in any event. check <a href="/events" class="text-blue-500 hover:underline">event page</a> and apply to an event.
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>


