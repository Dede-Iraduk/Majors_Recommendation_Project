<div class="flex flex-row bg-white w-full h-full">

  <!--sidebar-->

  <div class="flex flex-col w-[17%] p-2 bg-red-900 text-white">
    <div class="flex text-2xl font-bold p-2 text-white justify-center">
      U.C.R System
    </div>
    <div class="flex flex-row gap-3 hover:shadow-transparent w-[200px] p-5 cursor-pointer hover:text-orange-500">
      <i class="fa-solid fa-house"></i>
      <a href={{url('admin')}}> Dashboard</a>
    </div>
    <div class="flex">

    </div>
    <div class="flex flex-col p-5 gap-3 font-semibold">

      <div class="flex flex-row gap-3 hover:shadow-transparent w-[200px] p-2 cursor-pointer items-center active:bg-slate-500 active:w-[200px] active:rounded-md active:shadow-sm hover:text-orange-500">
        <i class="fa-solid fa-user"></i>
        <a href={{url('admin/user')}}> User</a>
      </div>
      <div class="flex flex-row gap-3 hover:shadow-transparent w-[200px] p-2 cursor-pointer items-center active:bg-slate-500 active:w-[200px] active:rounded-md  hover:text-orange-500">
   <i class="fa-solid fa-note-sticky"></i>
        <a href={{url('admin/user-entry')}}> User Entries</a>
      </div>
      <div class="flex flex-row gap-3 hover:shadow-transparent w-[200px] p-2 cursor-pointer items-center active:bg-slate-500 active:w-[200px] active:rounded-md  hover:text-orange-500">
        <i class="fa-solid fa-graduation-cap"></i>
        <a href={{url('admin/course')}}>Courses</a>
      </div>
      <div class="flex flex-row gap-3 hover:shadow-transparent w-[200px] p-2 cursor-pointer items-center active:bg-slate-500 active:w-[200px] active:rounded-md  hover:text-orange-500">
        <i class="fa-solid fa-heart-circle-check"></i>
        <a href={{url('admin/interest')}}> Interests</a>
      </div>
    </div>
  </div>