@extends('admin_layouts.userLayout')
@section('content')

@extends('components.sidebar')

<div class="flex flex-col gap-5 p-10 py-20">
    <div class="flex gap-5 ml-5">
        <span class="w-[6px] rounded h-[40px] bg-slate-300"></span>
        <h1 class="text-orange-600 text-4xl font-bold h-[40px]">Users</h1>
    </div>
    <div class="text-center p-7 mt-2 text-sky-900 text-lg">All Users</div>

    <div class="w-full flex justify-center mb-10">
        <input class="shadow appearance-none border rounded w-[50%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline0" type="text" id="search-posts" name="student" placeholder="Search by Name or Email">

        <input class="ml-3 py-2 px-5 rounded-md bg-red-800 text-white shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left" type="submit" name="sstudent" value="Search User"> <br>

    </div>
    <div class="flex flex-row bg-gray-100 w-[1000px] ml-5 h-[95%] p-4 justify-center">
        <div class="flex justify-center h-[70%] p-4 w-[80%]">
            <table class="mt-8 shadow-2xl table-auto rounded-md w-[90%]" id="students">
                <thead class="text-white bg-gray-700">
                    <tr>
                        <th class="px-6 py-3">User Name</th>
                        <th class="px-6 py-3">Email Address</th>
                        <th class="px-6 py-3">User Type</th>
                        <th class="px-6 py-3">Action</th>

                    </tr>
                </thead>
                <tbody id="dynamic" class="bg-white">
                    @forelse($users as $user)

                    <tr class="border-b odd:bg-white even:bg-gray-50">
                        <td class="px-6 py-4">{{$user->name}}</td>
                        <td class="px-6 py-4"> {{$user->email}}</td>
                        <td class="px-6 py-4">{{$user->user_type}}</td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
@endsection