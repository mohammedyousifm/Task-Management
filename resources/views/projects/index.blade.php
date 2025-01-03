@extends('layouts.layout')
@section('title', 'Projects')
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

            <!-- General Report -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


                <h1>Projects</h1>

            </div>
            <!-- End General Report -->

        </div>
        <!-- end Analytics -->


    </div>
    <!-- end content -->

    </div>
    <!-- end wrapper -->
@endsection
