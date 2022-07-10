@extends('admin_layouts.userLayout')
@section('content')

@extends('components.sidebar')

    <div class="w-[80%] p-10 py-20">
        <div class="flex gap-5 mb-10">
            <span class="w-[6px] rounded h-[40px] bg-slate-300"></span>
            <h1 class="text-orange-600 text-4xl font-bold">Courses</h1>
        </div>

        <!-- Use relative widths -->
        <div class="mt-10 flex w-full flex-col items-center bg-slate-100">
            <!-- using w-full cause I can add a padding to the continer to separate the gray box
                            from the white bg -->
            <div class="flex w-[100%] justify-center">
                <form action="{{url('/addschool')}}" method="post" enctype="multipart/form-data" class="flex flex-row rounded-md p-6">

                    @csrf
                    <div class="flex">
                        <label class="flex mr-7 mt-2 font-normal">Add Course<label>
                    </div>
                    <div class="flex">
                        <input class="w-[320px] rounded-l-md border-2 border-slate-900 p-2" type="text" name="name">
                        <input class="rounded-r-md bg-blue-800 p-2 text-white" type="submit" value="Add">
                    </div>
                </form>
            </div>

            <div class="flex flex-col p-6 ml-8">
                <h1 class="text-xl font-semibold text-zinc-700">Current Categories</h1>
                <h4 class="text-sm font-extralight text-zinc-700 ml-2">(Expand to view further details)</h4>
            </div>

            <div class="flex w-[80%] flex-col items-center rounded-md bg-white pb-16 shadow-md mb-12">

                <div tabindex="-1" aria-hidden="true" class="add-class-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-[70%]  h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class=" close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-class-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-dark">Add a new class
                                </h3>
                                <form class="" action="{{url('/addclass')}}" id="classroom-form" method="POST">
                                    @csrf
                                    <input type="text" name="name" placeholder="New Class" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black" required>

                                    <input type="hidden" name="school_id" />

                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                                        Class</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div tabindex="-1" aria-hidden="true" class="edit-school-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-[70%]  h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="edit-school-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-class-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit School
                                </h3>
                                <form class="" action="" id="classroom-form" method="POST">
                                    @csrf
                                    <input type="text" name="name" value="school name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black" required>

                                    <input type="hidden" name="school_id" value='school id' />

                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                                        School</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full rounded-t-md bg-yellow-400 p-2 text-white">
                    <div class="flex flex-row gap-4 p-2 ml-4">
                        <button id="" class="text-2xl flex hidden"><i class="fa-solid fa-play"></i></button>
                        <button id='btn2' class="text-xl flex"><i class="fa-solid fa-play rotate-90"></i></button>
                        <h2 class="text-2xl font-normal flex">course1</h2>
                    </div>
                    <div class="flex absolute right-80 w-[20%] justify-center gap-7 text-xs font-normal">
                        <div class="flex flex-col items-center gap-1">
                            <button data-school='' class="edit-school flex text-2xl"><i class="fa-solid fa-pen"></i></button>
                            <p class="flex">Edit</p>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <button class="delete-school flex text-2xl" data-school=""><i class="fa-solid fa-circle-minus"></i></button>
                            <p class="flex">Delete</p>
                        </div>
                        <div class="flex  flex-col items-center gap-1">
                            <p class="flex text-3xl font-thin">|</p>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <button data-school='' class="school flex text-2xl"><i class="fa-solid fa-circle-plus"></i></button>
                            <p class="flex">Add Class</p>
                        </div>
                    </div>
                </div>


                <div tabindex="-1" aria-hidden="true" class="add-subject-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-[70%]  h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="subject-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-class-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Add a new
                                    subject
                                </h3>
                                <form class="" action="{{url('/addsubject')}}" id="classroom-form" method="POST">
                                    @csrf
                                    <input type="text" name="name" placeholder="New Subject" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required>

                                    <input type="hidden" name="class_id" value=''>


                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                                        Subject</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div tabindex="-1" aria-hidden="true" class="edit-class-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-[70%]  h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="edit-class-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-class-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit Class
                                </h3>
                                <form class="" action="" id="classroom-form" method="POST">
                                    @csrf
                                    <input type="text" name="name" value="class name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required>

                                    <input type="hidden" name="class_id" value='class id'>


                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                                        Class</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row mt-10 w-[90%] bg-blue-200 py-3 px-5">
                    <div class="flex w-[40%] items-center flex-row gap-2 ml-4 text-sm">
                        <h2 class=" font-normal flex">Interest</h2>
                    </div>
                    <div class="flex w-[40%] py-1 justify-center  float-right gap-7 text-xs font-normal">
                        <div class="flex flex-col items-center gap-1">
                            <button class="edit-class flex text-xl"><i class="fa-solid fa-pen"></i></button>
                            <p class="flex">Edit</p>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <button class="delete-class flex text-xl" data-class1=""><i class="fa-solid fa-circle-minus"></i></button>
                            <p class="flex">Delete</p>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <p class="flex text-3xl font-thin">|</p>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <button class="class flex text-xl"><i class="fa-solid fa-circle-plus"></i></button>
                            <p class="flex">Add Subject</p>
                        </div>
                    </div>
                </div>

                
                <div tabindex="-1" aria-hidden="true" class="edit-subject-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-[70%]  h-full md:h-auto">

                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="edit-subject-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-class-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit
                                    Subject
                                </h3>
                                <form class="" action="" id="classroom-form" method="POST">
                                    @csrf
                                    <input type="text" name="name" value="sub name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black" required>
                                    <input type="hidden" name="subject_id" value=''>
                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                                        Subject</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 w-[70%] bg-slate-200 py-2 px-5">
                    <ul class="">
                        <li class="ml-6" data-subject=""><i data-toggle="" class="hover:cursor-pointer subject-toggle fa-solid fa-sort-down -rotate-90 mr-4 classroom" data-subject=""></i>subject requirement1
                            <div class="w-[40%] flex float-right gap-4 text-xs font-normal">
                                <div class="flex flex-col items-center gap-1">
                                    <button class="edit-subject flex text-xl"><i class="fa-solid fa-pen"></i></button>
                                    <p class="flex">Edit</p>
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <button class="delete-subject flex text-xl" data-subject=""><i class="fa-solid fa-circle-minus"></i></button>
                                    <p class="flex">Delete</p>
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <p class="flex text-3xl font-thin">|</p>
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <button class="subject flex text-xl"><i class="fa-solid fa-circle-plus"></i></button>
                                    <p class="flex">Add File</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>








            </div>


        </div>

    </div>
</div>
@endsection