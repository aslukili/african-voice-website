<div class="container mx-auto">
    <div class="md:h-screen">
        <div class="py-3.5"></div>
        <div class="bg-red-500 ">
            <div class="lg:grid lg:grid-cols-2">
                <div class="py-24 px-10 lg:px-0 max-w-3xl lg:max-w-md mx-auto">
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-100">
                        <span class="block">Ready to participate?</span>
                        <span class="block">apply to join an upcoming event from your choice.</span>
                    </h2>
                    <p class="text-gray-300 mt-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <div class="inline-block shadow mt-5">
                        <a href="#" class="inline-block py-3 px-4 bg-white hover:bg-indigo-100 text-primary font-medium border border-transparent rounded-md">Explore all events</a>
                    </div>
                </div>
                <div class="lg:relative lg:mt-16">
                    <img class="lg:absolute lg:inset-0 h-60 w-full lg:h-full object-cover object-center lg:rounded-tl-md" src="https://www.business2community.com/wp-content/uploads/2020/03/conference-black-n-white.jpg" alt="Woman workcation on the beach">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-9 md:mt-0">
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
                                <span class="text-gray-700"><?php echo $event['starting_date']?> | </span><span class="font-semibold text-pink-700">event's type</span>
                                <a href="#">
                                    <p class="mb-2 mt-1 text-xl font-bold tracking-tight text-primary"><?php echo $event['title']?></p>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $event['sub_title']?></p>
                            </div>
                        </div>
                        <div class="text-center relative bottom-1">
                            <button class="mt-3 text-center text-primary text-xl px-7 py-1 border-primary border-2 hover:bg-primary hover:text-white" onclick="window.location.href='https://forms.gle/aWbKZYzpDDtBkZoc7'">Apply to join</button>
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
<!--    <div class="mb-9">-->
<!--        <h2 class="mt-9 text-3xl font-bold">From archive</h2>-->
<!--        <div class="px-5 mt-3 grid sm:grid-cols-2  xl:grid-cols-3 gap-3  justify-center">-->
<!--            --><?php
//            $counter = 0;
//            $max = 3;
//            foreach ($events as $event):?>
<!--                <div class="flex justify-center">-->
<!--                    <div class="max-w-sm bg-white rounded-sm  shadow-md flex flex-col justify-between pb-1.5">-->
<!--                        <img class="rounded-t-sm h-40 w-full" src="images/--><?php //echo $event['image']?><!--" alt="event" />-->
<!--                        <div class="p-3">-->
<!--                            <span class="text-gray-700">--><?php //echo $event['starting_date']?><!-- | </span><span class="font-semibold text-pink-700">Training</span>-->
<!--                            <a href="#">-->
<!--                                <p class="mb-2 mt-1 text-xl font-bold tracking-tight text-primary">--><?php //echo $event['title']?><!--</p>-->
<!--                            </a>-->
<!--                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">--><?php //echo $event['sub_title']?><!--</p>-->
<!--                            <div class="text-center">-->
<!--                                <button class="mt-3 text-center text-primary text-xl px-7 py-1 border-primary border-2 hover:bg-primary hover:text-white">Apply to join</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                --><?php
//                $counter++;
//                if ($counter === $max) {
//                    break;
//                }
//            endforeach;?>
<!--        </div>-->
<!--    </div>-->
    <div class="py-3.5"></div>
</div>