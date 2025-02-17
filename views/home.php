<div class="md:h-screen container mx-auto">
    <div class=" md:h-5/6 grid md:grid-cols-2 md:items-center px-3.5">
        <div class="">
            <h1 class=" mb-3.5 text-4xl xl:text-5xl 2xl:text-6xl text-primary font-bold leading-normal">Lorem ipsum dolor sit<br /> consetur adipcing elit</h1>
            <p class="text-xl md:text-2xl xl:text-3xl leading-normal md:leading-10 ">smod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
            <button class="mt-8 px-3 py-1.5 btn-primary font-bold" onclick="window.location.href='/register'">Join the community</button>
        </div>
        <div class="flex justify-center items-center mt-12">
            <img class="rounded-t-3xl" src="https://cdn.pixabay.com/photo/2012/04/24/23/44/dice-41187__340.png">
        </div>
    </div>
    <hr class="mt-7 border-primary"/>
</div>

<div class="py-8 px-3">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold">Join The Community</h2>
        <!--    cards-->
        <div class="mt-9 grid md:grid-cols-3 gap-3">
            <div class="flex justify-center">
                <div class="max-w-sm bg-white rounded-lg  shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg w-full" src="asset/activate.png" alt="" />
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-primary">Activate</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Let others hear your voice, Join our events to improve your communication skills and be a great public speaker</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-7 md:mt-0">
                <div class="max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg w-full" src="asset/communicate.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-primary">Communicate</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Share your opinions, Explore the possibilities within respectful connection through and across our differences.</p>

                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-7 md:mt-0">
                <div class="max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg  w-full" src="asset/train.png" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-primary">Train</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Our trainers empowers you with the skills to build self awareness and promote constructive communication</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-7 md:mt-16">
            <button class="text-center text-primary text-xl px-28 py-1 border-primary border-2 hover:bg-primary hover:text-white">Join now</button>
        </div>
    </div>
</div>
<div class="bg-emerald-100 md:py-8">
    <div class="py-3 my-7 md:mt-16  container mx-auto">
    <h2 class="text-4xl font-bold">Mission, Vision, Value</h2>
    <!--    mission, vission, value-->
    <div class="mt-24 grid md:grid-cols-3 gap-3">
        <div class="flex justify-center">
            <div class="max-w-sm">
                <div class="flex justify-center items-center w-10 h-10 mb-7"><i class="fa-solid fa-bullseye text-4xl"></i></div>
                <p class="text-xl font-bold text-primary mb-7">1. Mission</p>
                <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam suscipit hendrerit neque, et semper metus consequat nec. Curabitur in tempor urna. Nam ut gravida leo. Vestibulum velit orci, hendrerit id mattis et, placerat vel velit. </p>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="max-w-sm">
                <p class="text-xl font-bold text-primary mb-7">2. Vision</p>
                <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam suscipit hendrerit neque, et semper metus consequat nec. Curabitur in tempor urna. Nam ut gravida leo. Vestibulum velit orci, hendrerit id mattis et, placerat vel velit. </p>
                <div class="flex justify-center items-center w-10 h-10 mt-1.5 mb-7"><i class="fa-solid fa-eye text-4xl"></i></div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="max-w-sm">
                <div class="flex justify-center items-center w-10 h-10 mb-7"><i class="fa-solid fa-gem text-4xl"></i></div>
                <p class="text-xl font-bold text-primary mb-7">3. Value</p>
                <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam suscipit hendrerit neque, et semper metus consequat nec. Curabitur in tempor urna. Nam ut gravida leo. Vestibulum velit orci, hendrerit id mattis et, placerat vel velit. </p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="py-8 md:mt-7 container mx-auto">
    <h2 class="text-4xl font-bold">Upcoming Events</h2>
    <!-- events -->
    <div class="px-5 mt-9 grid sm:grid-cols-2  xl:grid-cols-4 gap-3  justify-center">
        <?php
        $counter = 0;
        $max = 4;
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

<div class="bg-gray-300 py-9">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold">Impact</h2>
        <!-- numbers -->
        <div class="flex flex-col px-5 mt-9 md:grid md:grid-cols-3 gap-3 justify-between">
            <div class="text-center">
                <p class="font-bold text-primary text-3xl">+460</p>
                <p class="font-semibold text-2xl">Derectly engaged</p>
            </div>
            <div class="text-center mt-9 md:mt-0">
                <p class="font-bold text-primary text-3xl">+6500</p>
                <p class="font-semibold text-2xl"> Reached</p>
            </div>
            <div class="text-center mt-9 md:mt-0">
                <p class="font-bold text-primary text-3xl">+30</p>
                <p class="font-semibold text-2xl">Nationalities</p>
            </div>
        </div>
<!--    quetes-->
        <div class="mt-10 flex items-center justify-center px-5 py-5">
            <div class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 700px">
                <div class="w-full mb-10">
                    <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
                    <p class="text-xl text-gray-600 text-center px-5">Work for a cause, not for applause. Live life to express, not to impress. Don’t strive to make your presence noticed, just make your absence felt.</p>
                    <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
                </div>
                <div class="w-full">
                    <p class="text-md text-indigo-500 font-bold text-center">Hassan Mansour</p>
                    <p class="text-xs text-gray-500 text-center">Founder of African voice</p>
                </div>
            </div>
        </div>
    </div>
</div>


