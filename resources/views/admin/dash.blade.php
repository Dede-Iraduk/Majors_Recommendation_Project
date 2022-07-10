@extends('admin_layouts.userLayout')
@section('content')

@extends('components.sidebar')

    <div class="w-[80%] p-10 py-20">
        <div class="flex gap-5 mb-10">
            <span class="w-[6px] rounded h-[40px] bg-slate-300"></span>
            <h1 class="text-orange-600 text-4xl font-bold">Dashboard</h1>
        </div>

        <!-- Use relative widths -->
        <div class="mt-10 flex w-full flex-col items-center bg-slate-100">
       





<div class="flex flex-wrap w-[100%] gap-10 justify-center p-4 py-10">
  
    <div class="h-[200px] w-[300px] rounded-xl bg-white shadow-md md:w-[300px] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md">
            <a href="{{url('admin/user')}}"
                class="text-center bg-orange-300 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">Users</a>
        </div> 
        <div class="flex mt-2 text-sm font-extralight text-zinc-700">
            <ul class="list-disc list-inside ml-4">
                <li>hello</li>
            </ul>
        </div>
    </div>
   
    <div class="h-[200px] w-[300px] rounded-xl bg-white shadow-md md:w-[300px] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md">
            <a href="{{url('admin/user-entry')}}"
                class="text-center bg-orange-300 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">User Entries</a>
        </div> 
        <div class="flex mt-2 text-sm font-extralight text-zinc-700">
            <ul class="list-disc list-inside ml-4">
                <li>hello</li>
            </ul>
        </div>
    </div>

    <div class="h-[200px] w-[300px] rounded-xl bg-white shadow-md md:w-[300px] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md">
            <a href="{{url('admin/course')}}"
                class="text-center bg-orange-300 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">Courses</a>
        </div> 
        <div class="flex mt-2 text-sm font-extralight text-zinc-700">
            <ul class="list-disc list-inside ml-4">
                <li>hello</li>
            </ul>
        </div>
    </div>

    <div class="h-[200px] w-[300px] rounded-xl bg-white shadow-md md:w-[300px] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md">
            <a href="{{url('admin/interest')}}"
                class="text-center bg-orange-300 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">Interests</a>
        </div> 
        <div class="flex mt-2 text-sm font-extralight text-zinc-700">
            <ul class="list-disc list-inside ml-4">
                <li>hello</li>
            </ul>
        </div>
    </div>

    <div class="h-[200px] w-[300px] rounded-xl bg-white shadow-md md:w-[300px] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md">
            <a href=""
                class="text-center bg-orange-300 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">Grade Points</a>
        </div> 
        <div class="flex mt-2 text-sm font-extralight text-zinc-700">
            <ul class="list-disc list-inside ml-4">
                <li>hello</li>
            </ul>
        </div>
    </div>
</div>

        </div>

    </div>
</div>
@endsection