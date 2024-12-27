@extends('layouts.layout')
@section('title', 'Tasks')
@section('content')

    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

        <!-- start sidebar -->
        <div id="sideBar"
            class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


            <!-- sidebar content -->
            <div class="flex flex-col">

                <!-- sidebar toggle -->
                <div class="text-right hidden md:block mb-4">
                    <button id="sideBarHideBtn">
                        <i class="fad fa-times-circle"></i>
                    </button>
                </div>
                <!-- end sidebar toggle -->

                <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

                <!-- link -->
                <a href="{{ route('dashboard') }}"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-chart-pie text-xs mr-2"></i>
                    dashboard
                </a>
                <!-- end link -->


                <!-- link -->
                <a href="{{ route('tasks.index') }}"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-shield-check text-xs mr-2"></i>
                    Tasks
                </a>
                <!-- end link -->

                <!-- link -->
                <a href="{{ route('projects.index') }}"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-calendar-edit text-xs mr-2"></i>
                    Projects
                </a>
                <!-- end link -->

                <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

                <!-- link -->
                <a href="./email.html"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                    email
                </a>
                <!-- end link -->

                <!-- link -->
                <a href="#"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-comments text-xs mr-2"></i>
                    chat
                </a>
                <!-- end link -->


                <!-- link -->
                <a href="#"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-folder-open text-xs mr-2"></i>
                    file manager
                </a>
                <!-- end link -->


                <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">UI Elements</p>


                <!-- link -->
                <a href="#"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-computer-classic text-xs mr-2"></i>
                    Components
                </a>
                <!-- end link -->



            </div>
            <!-- end sidebar content -->

        </div>
        <!-- end sidbar -->

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">

            <!-- alert -->
            <div class="alert alert-dark mb-6">
                Hi! Mohammed . . . . . . you can
                <a class="ml-2" target="_blank" href="https://twitter.com/MohamedSaid__">@Log out</a>
            </div>
            <!-- end alert -->

            <!--start Task form -->

            <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Share a Task</h2>

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">

                    <div class="flex justify-between">
                        <!-- Task Title -->
                        <div>
                            <label for="task-title" class="block text-sm font-medium text-gray-700">Task Title</label>
                            <input type="text" id="task-title" name="title" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        <!-- Assign to User -->
                        <div>
                            <label for="assign-user" class="block text-sm font-medium text-gray-700">Assign To</label>
                            <select id="assign-user" name="user_id"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">Select a User</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                                <option value="3">Michael Lee</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <!-- Task Priority -->
                        <div>
                            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                            <select id="priority" name="priority"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>

                        <!-- Submission Date -->
                        <div>
                            <label for="due-date" class="block text-sm font-medium text-gray-700">Submission Date</label>
                            <input type="date" id="due-date" name="due_date"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>


                    <!-- Task Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="4"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                    </div>

                    <!-- Image Upload and Preview -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Attach Image</label>
                        <div
                            class="mt-2 flex items-center justify-center p-6 border-2 border-dashed rounded-md cursor-pointer hover:border-indigo-500">
                            <input id="file-upload" name="file" type="file" class="sr-only" accept="image/*">
                            <label for="file-upload" class="text-indigo-600 cursor-pointer flex flex-col items-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 16v-4a8 8 0 0116 0v4m-12 12h8M20 40h8m-4-28v12"></path>
                                </svg>
                                <p class="text-sm text-gray-500 mt-2">Click to upload</p>
                                <p class="text-xs text-gray-400">PNG, JPG, GIF up to 5MB</p>
                            </label>
                        </div>
                        <!-- Image Preview -->
                        <div class="mt-4">
                            <img id="preview-image" class="hidden w-48 rounded-md shadow-md">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Share Task
                        </button>
                    </div>
                </form>
            </div>
            <script>
                const fileInput = document.getElementById('file-upload');
                const previewImage = document.getElementById('preview-image');

                fileInput.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewImage.src = e.target.result;
                            previewImage.classList.remove('hidden');
                        };
                        reader.readAsDataURL(file);
                    } else {
                        previewImage.classList.add('hidden');
                    }
                });
            </script>
            <!-- End Task form -->

        </div>
        <!-- end Analytics -->


    </div>
    <!-- end content -->

    </div>
    <!-- end wrapper -->


@endsection
