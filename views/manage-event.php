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
                                        <form method="post" action="delete-User" class="inline">
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
</section>
