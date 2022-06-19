<section class="flex-grow">
    <div id="main" class="flex flex-col main-content bg-gray-100 pb-24 md:pb-5">
        <div class="flex bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2"><?php echo $event['title']?></h1>
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
                            <h2 class="font-bold uppercase text-gray-600">Total seats</h2>
                            <p class="font-bold text-3xl"><?php echo $event['seats'] ?></p>
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
                            <h2 class="font-bold uppercase text-gray-600">registered members</h2>

                            <p class="font-bold text-3xl"><?php echo $participantsCount;?></p>
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
                            <h2 class="font-bold uppercase text-gray-600">Available seats</h2>
                            <p class="font-bold text-3xl"><?php echo $event['seats'] - $participantsCount?></p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="container mx-auto">
                <div>
                    <div class="flex justify-between">
                        <h2 class="font-bold text-xl mb-3">All added members:</h2>
                        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" data-modal-toggle="defaultModal">Add member</button>
                    </div>
                    <div class="max-w-full overflow-x-auto px-3">
                        <table class="table-auto w-full  text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Full name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email address
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Country
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Join date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($members as $member):?>
                                <tr class="odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <?= $member->username?>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        <?= $member->full_name?>
                                    </th>
                                    <td class="px-6 py-4">
                                        <?= $member->email?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $member->country?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $member->join_date?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 mr-5 hover:underline">View Profile</a>
                                        <form method="post" action="remove-member" class="inline">
                                            <input type="hidden" name="id" value="<?= $member->username?>">
                                            <button class="font-medium text-blue-600 mr-5 hover:underline">remove</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add member to event
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="hidden" name="event_fk" value="<?php echo $_GET['id']?>">
                            <input type="text" name="user_fk" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="user_fk" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">username of Member</label>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
