 <section class="flex-grow">
    <div id="main" class="flex flex-col main-content bg-gray-100 pb-24 md:pb-5">
        <div class="flex bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">Recently joined members</h1>
        </div>
        <div class="flex-grow min-h-full">
            <div>
                <div class="max-w-full overflow-x-auto px-3">
                    <table class="table-auto w-full  text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
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
                                        <?= $member['full_name']?>
                                    </th>
                                    <td class="px-6 py-4">
                                        <?= $member['email']?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $member['country']?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $member['join_date']?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 mr-5 hover:underline">View Profile</a>
                                        <form method="post" action="delete-member" class="inline">
                                            <input type="hidden" name="id" value="<?= $member['id']?>">
                                            <button class="font-medium text-blue-600 mr-5 hover:underline">suspend</button>
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
</section>