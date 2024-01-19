

    <!-- Header -->
    <?php include_once('includes/header.php') ?>

    <!-- Navigation -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Sidebar -->
    <?php include_once('includes/sidebar.php') ?>

    <!-- Container -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <!-- Statistics -->
            <div class="grid grid-cols-12 gap-6 my-5 dashbord">
                <!-- Categories -->
                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                    href="category.php">
                    <div class="p-5">
                        <div class="flex justify-between text-3xl p-2">
                            <div class="mt-3 font-bold h-7 w-7 text-blue-400 leading-8">
                                <!-- ICON -->
                                <i class='fa fa-th-large'></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                <?php echo date('s') + 12; ?>
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl  
                            font-['Helvetica'] font-normal pt-6 text-gray-600">No. Categories
                        </div>
                    </div>
                </a>
                <!-- Expenses -->
                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                    href="#">
                    <div class="p-5">
                        <div class="flex justify-between text-3xl p-2">
                            <div class="mt-3 font-bold h-7 w-7 text-pink-400 leading-8">
                                <!-- ICON -->
                                <i class='fa fa-bar-chart'></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                <?php echo date('s') + 23; ?>
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl  
                            font-['Helvetica'] font-normal pt-6 text-gray-600">No. Expenses
                        </div>
                    </div>
                </a>
                <!-- Budget -->
                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                    href="#">
                    <div class="p-5">
                        <div class="flex justify-between text-3xl p-2">
                            <div class="mt-3 font-bold h-7 w-7 text-yellow-400 leading-8">
                                <!-- ICON -->
                                <i class="fa fa-bars"></i></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                <span class="text-xl">NGN.</span>
                                <?php echo date('s') + 35; ?>
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl  
                            font-['Helvetica'] font-normal pt-6 text-gray-600">My Budget
                        </div>
                    </div>
                </a>

                <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                    href="expenses.php">
                    <div class="p-5">
                        <div class="flex justify-between text-3xl p-2">
                            <div class="mt-3 font-bold h-7 w-7 text-green-400 leading-8">
                                <!-- ICON -->
                                <i class="fa fa-area-chart"></i>
                            </div>
                            <div class="mt-3 font-bold leading-8">
                                <!-- Number -->
                                <span class="text-xl">NGN.</span>
                                <?php echo date('s'); ?>
                            </div>
                        </div>
                        <!-- Name of box -->
                        <div class="w-full text-center break-words my-2 text-3xl lg:text-4xl  
                            font-['Helvetica'] font-normal pt-6 text-gray-600">My Expenses
                        </div>
                    </div>
                </a>
            </div>



            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>



        </div>
    </div>




    <!-- Footer -->
    <?php include_once('includes/footer.php') ?>
