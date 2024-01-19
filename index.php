<?php 
$userName = "";
$loginEmail = "";
$loginPassword = "";
$confirm_password = "";
$error = "no err";
$msg = "no msg";
?>

<!-- Header -->
<?php include_once('includes/header.php') ?>

<!-- Navigation -->
<?php  include_once('includes/index-navbar.php') ?>


<!-- Container -->
<section>
    <!-- 
        You can use the following blend mode
            overlay, darken
     -->
    <div
        class="container py-16 bg-[rgba(0,0,0,0.6)] h-screen bg-no-repeat max-w-full bg-blend-darken bg-center bg-cover
                bg-[url('https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&w=600')]">
        <!-- <div class="m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20"> -->
        <div class="md:px-20 text-center flex justify-center items-center h-full
                       px-6 space-y-8 m-auto text-gray-500 lg:px-20">
            <div>
                <h1 class="text-4xl text-gray-300 font-bold md:text-6xl md:px-10 mb-4">
                    Organize And Track All Your Expenses
                    <br><span class="text-[#0c1c96]">100% free</span>
                </h1>
                <p class="text-2xl text-gray-200 mb-8">Be part of millions of people around the world using
                    <span class="text-xl font-bold">My Expenses Tracker</span> as their online income manager.
                </p>
                <a href="register.php">
                    <button type="button" title="Contact Us" class="w-full py-3 px-6 text-center rounded-xl transition 
                                bg-[#0c1c96] shadow-xl hover:bg-[#0c1cff] active:bg-gray-700 
                                focus:bg-gray-600 sm:w-max">
                        <span class="block text-white font-semibold">
                            Register Now
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <!-- </div> -->
    </div>
</section>


<!-- Footer -->
<?php include_once('includes/footer.php') ?>