<!-- Registration Script -->
<?php include_once('config/register.php') ?>

<!-- Header -->
<?php include_once('includes/header.php') ?>

<!-- Navigation -->
<?php  include_once('includes/index-navbar.php') ?>


<section>
    <div class="flex items-center justify-center bg-gray-100">
        <div class="px-8 py-6 mx-4 my-4 text-left bg-white shadow-lg lg:w-1/3">
            <h3 class="text-2xl font-bold text-center">Register to track your expenses</h3>
            <form action="register.php" method="post">

                <!-- MESSAGE FROM FORM VALIDATION -->
                <div class="text-center text-3xs">
                    <span class="text-green-400"><?php echo $msg;?></span><br>
                    <span class="text-red-400"><?php echo $error;?></span>
                </div>

                <div class="mt-0">
                    <div class="mt-4">
                        <label class="block" for="name">Name<label>
                            <input type="text" placeholder="your name" id="name" name="name"
                                value="<?php echo $name;?>"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                <!-- Error Message -->
                                <span class="text-xs text-center text-red-400"><?php echo $form_error['name']?? '';?></span>
                    </div>
                    <!-- ENTER YOUR EMAIL ADDRESS -->
                    <div class="mt-4">
                        <label class="block" for="email">Email<label>
                            <input type="text" placeholder="email@gmail.com" id="email" name="email"
                            value="<?php echo $email;?>"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            <!-- Error Message -->
                            <span class="text-xs text-center text-red-400"><?php echo $form_error['email']?? '';?></span>
                        </div>
                        
                        <div class="flex">
                            <!-- ENTER YOUR PASSWORD -->
                            <div class="mt-4 mr-2">
                                <label class="block" for="password">Password<label>
                                    <input type="text" placeholder="password" id="password" name="password"
                                    value="<?php echo $password;?>"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                            <!-- ENTER YOUR CONFIRM PASSWORD -->
                            <div class="mt-4 ml-2">
                                <label class="block" for="confirm_password">Confirm Password<label>
                                        <input type="text" placeholder="Confirm password" id="confirm_password" name="confirm_password"
                                            value="<?php echo $confirm_password;?>"
                                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            </div>
                    </div>

                    <!-- Error Message -->
                    <span class="text-xs text-center text-red-400"><?php echo $form_error['password']?? '';?></span>

                    <!-- SUBMIT FORM -->
                    <button class="text-base w-full px-6 py-2 mt-4  hover:scale-105 focus:outline-none flex justify-center rounded font-bold cursor-pointer 
                            hover:bg-[#0c1c96] 
                            bg-[#1f1f9f]
                            text-blue-100 
                            border duration-200 ease-in-out 
                            border-[#0c1c96] transition" type="submit" name="register">Register
                    </button>
                </div>

                <div class="mt-6 text-grey-dark">
                    Already have an account?
                    <a class="text-blue-600 hover:underline" href="login.php">
                        Log in
                    </a>
                </div>

            </form>


        </div>
    </div>
</section>


<!-- Footer -->
<?php include_once('includes/footer.php') ?>