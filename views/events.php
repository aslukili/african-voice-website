<div class="container mx-auto">
    <div class="h-screen">
        <h1 class="mt-9 text-4xl font-bold">Find the next event you want to join</h1>
        <div class="grid grid-cols-5 mb-7 mt-5 h-4/6">
            <img class="col-span-2 min-h-full" src="asset/speaker.png">
            <div class="col-span-3 bg-red-800 p-5 text-white">
                <h2 class=" text-3xl font-medium ">Africa debate championship</h2>
                <p class="mt-3">Event of the year</p>
                <p class="mt-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam suscipit hendrerit neque, et semper metus consequat nec. Curabitur in tempor urna. Nam ut gravida leo.</p>
                <p class="mt-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam suscipit hendrerit neque, et semper metus consequat nec. Curabitur in tempor urna. Nam ut gravida leo.</p>
            </div>
        </div>
    </div>
    <div>
        <h2 class=" text-3xl font-bold">upcoming Events</h2>
        <div class="px-5 mt-9 grid sm:grid-cols-2  xl:grid-cols-3 gap-3  justify-center">
            <?php
            $counter = 0;
            $max = 3;
            foreach ($events as $event):?>
                <div class="flex justify-center">
                    <div class="max-w-sm bg-white rounded-sm  shadow-md flex flex-col justify-between pb-1.5">
                        <div>
                            <img class="rounded-t-sm h-40 w-full" src="images/<?php echo $event['image']?>" alt="event" />
                            <div class="p-3">
                                <span class="text-gray-700"><?php echo $event['starting_date']?> | </span><span class="font-semibold text-pink-700">Training</span>
                                <a href="#">
                                    <p class="mb-2 mt-1 text-xl font-bold tracking-tight text-primary"><?php echo $event['title']?></p>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $event['sub_title']?></p>
                            </div>
                        </div>
                        <div class="text-center relative bottom-1">
                            <button class="mt-3 text-center text-primary text-xl px-7 py-1 border-primary border-2 hover:bg-primary hover:text-white">Apply to join</button>
                        </div>
                    </div>
                </div>
                <?php
                $counter++;
                if ($counter === $max) {
                    break;
                }
            endforeach;?>
        </div>
    </div>
    <div class="mb-9">
        <h2 class="mt-9 text-3xl font-bold">From archive</h2>
        <div class="px-5 mt-3 grid sm:grid-cols-2  xl:grid-cols-3 gap-3  justify-center">
            <?php
            $counter = 0;
            $max = 3;
            foreach ($events as $event):?>
                <div class="flex justify-center">
                    <div class="max-w-sm bg-white rounded-sm  shadow-md flex flex-col justify-between pb-1.5">
                        <img class="rounded-t-sm h-40 w-full" src="images/<?php echo $event['image']?>" alt="event" />
                        <div class="p-3">
                            <span class="text-gray-700"><?php echo $event['starting_date']?> | </span><span class="font-semibold text-pink-700">Training</span>
                            <a href="#">
                                <p class="mb-2 mt-1 text-xl font-bold tracking-tight text-primary"><?php echo $event['title']?></p>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $event['sub_title']?></p>
                            <div class="text-center">
                                <button class="mt-3 text-center text-primary text-xl px-7 py-1 border-primary border-2 hover:bg-primary hover:text-white">Apply to join</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $counter++;
                if ($counter === $max) {
                    break;
                }
            endforeach;?>
        </div>
    </div>
</div>