<?php 
$userName = "";
$loginEmail = "";
$loginPassword = "";
$confirm_password = "";
$error = $msg = "";

?>

<!-- Header -->
<?php include_once('includes/header.php') ?>

<!-- Navigation -->
<?php include_once('includes/navbar.php') ?>

<!-- Sidebar -->
<?php include_once('includes/sidebar.php') ?>

<!-- Container -->
<div class="p-4 sm:ml-64  mt-4">

    <div class="flex items-center justify-center mt-14 bg-gray-100 shadow-md sm:rounded-lg w-full">
        <div class="relative overflow-auto m-4">

            <!-- Button -->
            <div class="float-right mb-4">
                <a href="all-expenses.php" class="text-base w-full px-6 py-2 mt-4 focus:outline-none 
                    flex justify-center rounded font-bold cursor-pointer 
                    hover:bg-[#0c1c96] 
                    bg-[#1f1f9f]
                    text-blue-100 
                    border duration-200 ease-in-out 
                    border-[#0c1c96] transition">
                    View Expenses
                </a>
            </div>

            <!-- Table Container -->
            <div class="p-4 rounded-lg dark:border-gray-700 mt-14 w-full">

                <div class="flex items-center justify-center bg-gray-100 w-full">
                    <div class="px-8 py-6 mx-4 m-4 text-left bg-white shadow-lg w-full">
                        <h3 class="text-2xl font-bold text-center">Add New Expenses </h3>

                        <form action="login.php" method="post">
                            <!-- MESSAGE FROM FORM VALIDATION -->
                            <span class="text-xs text-green-400"><?php echo $msg;?></span><br>
                            <span class="text-xs text-center text-red-400"><?php echo $error;?></span>

                            <div class="mt-0">
                                <!-- ENTER YOUR CATEGORY NAME -->
                                <div class="mt-0">
                                    <label class="block" for="Name">Choose Category<label>
                                            <select name="" id="" placeholder="chose category"
                                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                                <option value="0">select...</option>
                                                <option value="1">Cloth</option>
                                                <option value="2">Food</option>
                                            </select>
                                </div>
                                <!-- ENTER YOUR EXPENSES NAME -->
                                <div class="mt-0">
                                    <label class="block" for="Name">Name<label>
                                            <input type="email" placeholder="eg. rice, egg" name="loginEmail"
                                                value="<?php echo $loginEmail;?>"
                                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                                <!-- ENTER YOUR BUDGET AMOUNT -->
                                <div class="mt-4">
                                    <label class="block" for="Name">Price<label>
                                            <input type="number" placeholder="eg. 5000" name="loginEmail"
                                                value="<?php echo $loginEmail;?>"
                                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                                <button class="text-base w-full px-6 py-2 mt-4  hover:scale-105 focus:outline-none flex justify-center rounded font-bold cursor-pointer 
                                    hover:bg-[#0c1c96] 
                                    bg-[#1f1f9f]
                                    text-blue-100 
                                    border duration-200 ease-in-out 
                                    border-[#0c1c96] transition" type="submit" name="login">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>


                </div>

            </div>

        </div>
    </div>

</div>




<!-- Footer -->
<?php include_once('includes/footer.php') ?>