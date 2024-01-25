<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>TODO/{{ $id }}</title>
</head>

<body class="bg-gray-100">

    <div class="flex">

        <!-- Sidebar -->
        <div class="first bg-gray-300 w-60 py-10 rounded-lg">

            <div class="mx-6">

                <div class="flex items-center mb-6">
                    <h1 class="text-2xl font-bold border-b-2 border-slate-600">MENU</h1>
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                    </span>
                </div>

                <div class="relative mb-6 ">
                    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                    </button>
                    <input type="text"
                        class="px-2 py-1 border bg-transparent border-slate-300 w-full focus:outline-none"
                        placeholder="Search">
                </div>


                <!-- Event list -->
                <h1 class="text-xl font-semibold mb-2">Task</h1>

                <ul class="px-0 font-medium space-y-1 hover: cursor-pointer">

                    <li class="px-2 py-1  hover:bg-gray-400 rounded-lg">
                        <div class="flex items-center">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                    <path
                                        d="M160-120q-33 0-56.5-23.5T80-200v-200q0-33 23.5-56.5T160-480h200q0 50 35 85t85 35q50 0 85-35t35-85h200q33 0 56.5 23.5T880-400v200q0 33-23.5 56.5T800-120H160Zm0-80h640v-200H664q-25 55-74.5 87.5T480-280q-60 0-109.5-32.5T296-400H160v200Zm544-328-56-56 142-142 56 56-142 142Zm-448 0L114-670l56-56 142 142-56 56Zm184-112v-200h80v200h-80ZM160-200h640-640Z" />
                                </svg>
                            </span>
                            <h1 class="text-s font-medium">Upcoming</h1>
                        </div>
                    </li>

                    <li class="px-2 py-1  hover:bg-gray-400 rounded-lg">
                        <div class="flex items-center">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                    <path
                                        d="M360-300q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                                </svg>
                            </span>
                            <h1 class="text-s font-medium">Today</h1>
                        </div>
                    </li>
                </ul>

                <hr class="my-6">

                <!-- Made-up list -->
                <h1 class="text-xl font-semibold mt-4">List</h1>
                <ul class="px-0 font-medium space-y-1 hover: cursor-pointer">
                    <li class="px-2 py-1 hover: cursor-pointer">
                        <div class="flex items-center  hover:bg-gray-400 rounded-lg">
                            <span class="mr-2">
                                <div class="w-4 h-4 rounded-md bg-red-800">
                                </div>
                            </span>
                            <h1 class="text-s font-medium">Personal</h1>
                        </div>

                    </li>
                </ul>

                <hr class="py-40">

                <div class="flex absolute px-5 py-5 mt-auto  hover:bg-gray-400 rounded-lg cursor-pointer">
                    <span class="mr-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                        </svg>
                    </span>
                    <h1 class="mr-auto text-s font-medium border-slate-600">Logout</h1>
                </div>

                <hr class="py-10">
            </div>
        </div>

        <div class="second w-2/3">

            <h1 class="font-black px-10 text-5xl">TODAY</h1>
            <hr class="py-10 ">

            <div class="px-10">
                <input type="text" class="border-solid" name="" id="" placeholder="+ Add task">
            </div>

            <hr class="py-5">
            <div class="tasks">

                <ul>

                    <li>
                        <div class="eachtask flex px-10 py-2 items-center">
                            <input type="checkbox" name="task1" id="task1" placeholder="task1" text="hola">
                            <label for="task1" class="font-medium px-1">task1</label>
                            <hr class="ml-2 flex-grow">
                        </div>
                    </li>


                </ul>

            </div>


        </div>

        <!-- <div class="third bg-green-500 w-full h-full">
            <h1 class="font-black text-3xl">TODAY</h1>


        </div> -->

    </div>

</body>

</html>