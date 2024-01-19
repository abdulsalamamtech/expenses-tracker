

<!-- THIS IS THE HEADER OF THIS APPLICATION -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="shortcut icon" href="uploads/save_this_photo.jpg" type="image/x-icon">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />
   
</head>
<body>
    
<!-- HEADER SECTION -->
<header class="sticky top-0 z-30">
<nav id="header" class="w-full py-1 bg-white shadow-lg border-b border-[#0c1c96] mt-0">
      <div class="w-full flex items-center mt-0 px-6 py-2">
         
         <div class="flex w-full">
            <nav>
               <ul class="flex items-center justify-between text-base text-blue-600 pt-4">
                   <li>
                    <a class="flex items-center no-underline hover:text-[#0c1c96] font-medium text-lg text-[#0C1C96] py-2 px-4 lg:-ml-2" href="<?php echo 'logout.php';?>">
                    <div class="rounded-full transition h-10 w-10 py-3 border-2 bg-white-100 border-[#0C1C96]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus ">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div><span class="text-2xl pl-2 italic font-bold">My Expenses</span>
                    </a>
                    </li>
               </ul>
            </nav>
         </div>
         
         <div class="flex items-center justify-between text-base text-blue-600 pt-4 md:pt-0">

            <!-- NAV LINK FOR REGISTRATION AND LOGIN -->
         <div class="flex-auto flex flex-row-reverse">
            <?php echo $btn_link; ?>
          </div>
         </div>
      </div>
</nav>
</header>