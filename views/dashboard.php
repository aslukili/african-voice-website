<section class="flex-grow">
            <div id="main" class="flex flex-col main-content bg-gray-100 pb-24 md:pb-5">
                <div class="flex bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-bold pl-2">Analytics</h1>
                </div>
                <div class="flex-grow min-h-full flex flex-wrap ">
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-sm shadow-md p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-green-600"><i class="fa-solid fa-users fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Total Members</h2>
                                    <p class="font-bold text-3xl"><?php echo $members?></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-sm shadow-md p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-blue-600"><i class="fa-solid fa-calendar-check fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Events</h2>
                                    <p class="font-bold text-3xl"><?php echo $events?></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-600 rounded-sm shadow-md p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-red-600"><i class="fa-solid fa-flag fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">National Rep.</h2>
                                    <p class="font-bold text-3xl"><?php echo $resp?></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                </div>
            </div>
        </section>
