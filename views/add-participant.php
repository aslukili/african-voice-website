<div class="flex-grow ">
    <div class="flex bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h1 class="font-bold pl-2">add participant to event</h1>
    </div>
    <div id="main" class="container mx-auto flex flex-col main-content bg-gray-100 pb-24 md:pb-5">
        <div class="flex-grow min-h-full pt-5">
            <form class="" action="" method="post">
                <input type="hidden" name="event_fk" value="<?php echo $_GET['event_id']?>">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="user_fk" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  required />
                    <label for="responsible" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">member username</label>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</div>

