 <section class="flex-grow">
            <div id="main" class="flex flex-col main-content bg-gray-100 pb-24 md:pb-5">
                <div class="flex bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-bold pl-2">Analytics</h1>
                </div>
                <div class="flex-grow min-h-full">
                    <div class="flex justify-between">
                        <div class="px-3">
                            <form class="my-3 flex">
                                <label for="event-filter" ></label>
                                <select id="event-filter" name="event-filter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>all events</option>
                                    <option>Upcoming events</option>
                                    <option>Ongoing events</option>
                                    <option>Archived</option>
                                </select>
                                <input type="submit" value="filter">
                            </form>
                        </div>
                        <div>
                            <div class="my-3 flex justify-center">
                                <div class=" xl:w-96">
                                    <form class="input-group relative flex items-stretch w-full mb-4">
                                        <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                                        <input type="submit" value="search" class="btn inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">

                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Add new event</button>
                        </div>
                    </div>

                    <div>
                        <div class="max-w-full overflow-x-auto px-3">
                            <table class="table-auto w-full  text-sm text-left text-gray-500 ">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Country
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Responsable
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Starting date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Morocco
                                    </td>
                                    <td class="px-6 py-4">
                                        Mehdi ajana
                                    </td>
                                    <td class="px-6 py-4">
                                        Aug 12, 2022
                                    </td>
                                    <td class="px-6 py-4">
                                        upcoming
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Morocco
                                    </td>
                                    <td class="px-6 py-4">
                                        Mehdi ajana
                                    </td>
                                    <td class="px-6 py-4">
                                        Aug 12, 2022
                                    </td>
                                    <td class="px-6 py-4">
                                        upcoming
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Morocco
                                    </td>
                                    <td class="px-6 py-4">
                                        Mehdi ajana
                                    </td>
                                    <td class="px-6 py-4">
                                        Aug 12, 2022
                                    </td>
                                    <td class="px-6 py-4">
                                        upcoming
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Morocco
                                    </td>
                                    <td class="px-6 py-4">
                                        Mehdi ajana
                                    </td>
                                    <td class="px-6 py-4">
                                        Aug 12, 2022
                                    </td>
                                    <td class="px-6 py-4">
                                        upcoming
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Morocco
                                    </td>
                                    <td class="px-6 py-4">
                                        Mehdi ajana
                                    </td>
                                    <td class="px-6 py-4">
                                        Aug 12, 2022
                                    </td>
                                    <td class="px-6 py-4">
                                        upcoming
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
