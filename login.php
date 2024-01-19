<!-- login Script -->
<?php include_once('config/login.php') ?>

<!-- Header -->
<?php include_once('includes/header.php') ?>

<!-- Navigation -->
<?php  include_once('includes/index-navbar.php') ?>


<section>
    <div class="flex items-center justify-center bg-gray-100">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg lg:w-1/3">
            <h3 class="text-2xl font-bold text-center">Login Expenses Tracker</h3>

            <form action="login.php" method="post">
                <!-- MESSAGE FROM FORM VALIDATION -->
                <div class="text-center text-3xs">
                    <span class="text-green-400"><?php echo $msg;?></span><br>
                    <span class="text-red-400"><?php echo $error;?></span>
                </div>

                <div class="mt-0">
                    <!-- ENTER YOUR EMAIL ADDRESS -->
                    <div class="mt-0">
                        <label class="block" for="name">Email<label>
                                <input type="email" placeholder="email@gmail.com" name="email" id="name"
                                    value="<?php echo $email;?>"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            <!-- Error Message -->
                            <span class="text-xs text-center text-red-400"><?php echo $form_error['email']?? '';?></span>
                    </div>
                    <!-- ENTER YOUR PASSWORD -->
                    <div class="mt-4">
                        <label class="block" for="password">Password<label>
                                <input type="text" placeholder="password" name="password" id="password"
                                    value="<?php echo $password;?>"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            <!-- Error Message -->
                            <span class="text-xs text-center text-red-400"><?php echo $form_error['password']?? '';?></span>
                    </div>
                    <button class="text-base w-full px-6 py-2 mt-4  hover:scale-105 focus:outline-none flex justify-center rounded font-bold cursor-pointer 
                        hover:bg-[#0c1c96] 
                        bg-[#1f1f9f]
                        text-blue-100 
                        border duration-200 ease-in-out 
                        border-[#0c1c96] transition" type="submit" name="login">login
                    </button>
                </div>
                <div class="mt-6 text-grey-dark">
                    Don't have an account?
                    <a class="text-blue-600 hover:underline" href="register.php">
                        Register
                    </a>
                </div>
        </div>
        </form>


    </div>
    </div>
</section>


<!-- Footer -->
<?php include_once('includes/footer.php') ?>