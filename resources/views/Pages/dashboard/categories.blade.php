@extends('Layouts.app')

@section('content')
<aside class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r border-red-900 bg-gradient-to-r from-gray-950 to-red-950 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
    <div>
        <div class="mt-8 text-center">
            <a href="/profile">
                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="" class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28">
                <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block">{{ Auth::user()->name }}</h5>
                <span class="hidden text-gray-400 lg:block">{{ Auth::user()->role }}</span>
            </a>
        </div>

        <ul class="space-y-2 tracking-wide mt-8">
            <li>
                <a href="/dashboard" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                        <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                        <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                        <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                    </svg>
                    <span class="-mr-1 font-medium">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/users" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                    </svg>
                    <span class="group-hover:text-gray-700">Users</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/categories" class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-red-800 to-cyan-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                    </svg>
                    <span class="group-hover:text-gray-700">Categories</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/products" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                    </svg>
                    <span class="group-hover:text-gray-700">Products</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/requests" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                    </svg>
                    <span class="group-hover:text-gray-700">Requests</span>
                </a>
            </li>
            <li>
                <a href="/" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                        <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                    </svg>
                    <span class="group-hover:text-gray-700">Home</span>
                </a>
            </li>

        </ul>
    </div>

    <form action="/logout" method="post" class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
        @csrf
        <button type="submit" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span class="group-hover:text-gray-700">Logout</span>
        </button>
    </form>
</aside>
<div class="ml-auto lg:w-[75%] xl:w-[80%] 2xl:w-[85%] overflow-hidden bg-gradient-to-l from-gray-900 to-red-950 ">
    <div class="sticky z-10 top-0 lg:py-2.5 bg-gradient-to-l border-b border-red-900 from-gray-900 to-red-950">
        <div class="px-6 flex items-center justify-between space-x-4 2xl:container">
            <h5 hidden class="text-2xl text-gray-300 font-medium lg:block">Categories</h5>
            <button class="w-12 h-16 -mr-2 border-r lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            @if(session('success'))
            <p class="msg text-green-500 transition-all border border-green-500 px-4 py-1 rounded-sm">{{ session('success') }}</p>
            @elseif(session('error'))
            <p class="msg text-red-500 transition-all border border-red-500 px-4 py-1 rounded-sm">{{ session('error') }}</p>
            @endif
            @error('name')
            <p class="msg text-red-500 transition-all border border-red-500 px-4 py-1 rounded-sm">{{ $message }}</p>
            @enderror
            @error('description')
            <p class="msg text-red-500 transition-all border border-red-500 px-4 py-1 rounded-sm">{{ $message }}</p>
            @enderror
            <script>
                let msgs = document.querySelectorAll('.msg')
                window.onload = function() {
                    setInterval(() => {
                        msgs.forEach((elm) => {
                            elm.innerHTML = '';
                            elm.style.border = 'none';
                        });
                    }, 3000);
                };
            </script>
            <div class="flex space-x-4">
                <button class="mx-4 middle none center flex items-center justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-dark="true" data-popover-target="notifications-menu">
                    <i class="fas fa-bell text-lg leading-none"></i>
                </button>
                @if(App\Models\Notification::where('user_id', Auth::id())->count() > 0)
                <ul role="menu" data-popover="notifications-menu" data-popover-placement="bottom" style="z-index: 1000" class="absolute flex min-w-[180px] flex-col gap-2 overflow-auto rounded-md bg-gradient-to-r from-gray-900 to-red-950  p-3 font-sans text-sm font-normal text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none">
                    @foreach(\Illuminate\Support\Facades\Auth::user()->notifications()->orderBy('created_at', 'desc')->get() as $notification)
                    <button role=" menuitem" class="flex w-full cursor-pointer select-none items-center gap-4 rounded-md px-3 py-2 pr-8 pl-2 text-start leading-tight outline-none transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                        <div class="flex flex-col gap-1">
                            <p class="block font-sans text-sm font-normal leading-normal text-gray-200 antialiased">
                                <span class="font-bold text-blue-gray-900">{{ $notification->title}},</span>
                                {{ $notification->description }}
                            </p>
                            <p class="flex items-center gap-1 font-sans text-xs font-light text-gray-400 antialiased">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-3 w-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ $notification->created_at->diff(now())->h > 0 ? $notification->created_at->diff(now())->format('%h h') : $notification->created_at->diff(now())->format('%i min') }}
                            </p>
                        </div>
                    </button>
                    @endforeach
                    <form action="/notifications" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-900 border border-red-500/25 px-2 py-1 rounded-lg hover:bg-red-800 hover:text-gray-300 transition-all">
                            Clear All
                        </button>
                    </form>
                </ul>
                @else
                <ul role="menu" data-popover="notifications-menu" data-popover-placement="bottom" style="z-index: 1000" class="absolute flex min-w-[180px] flex-col gap-2 overflow-auto rounded-md bg-gradient-to-r from-gray-900 to-red-950  p-3 font-sans text-sm font-normal text-gray-300 shadow-lg shadow-blue-gray-500/10 focus:outline-none">
                    <p>no notifications.</p>
                </ul>
                @endif
            </div>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <button data-modal-target="create-category-modal" data-modal-toggle="create-category-modal" class="fixed right-8 bottom-6 text-white bg-gradient-to-r from-green-600 to-green-950 p-2 rounded-lg border border-green-300 hover:opacity-80 shadow-lg">
                    Create Category
                </button>
                <div class="overflow-hidden">
                    <table class="min-w-full ">
                        <thead class="bg-gradient-to-l from-gray-900 to-red-950 border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-300 px-6 py-4 text-left">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-300 px-6 py-4 text-left">
                                    Name
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-300 px-6 py-4 text-left">
                                    Description
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-300 px-6 py-4 text-center">
                                    Handle
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Category::all() as $category)
                            <tr class="bg-gradient-to-l from-gray-900 to-red-950 border-b hover:bg-gray-500/15">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-300">
                                    {{ $category->id }}
                                </td>
                                <td class="text-sm text-gray-300 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $category->name }}
                                </td>
                                <td class="text-sm text-gray-300 font-light px-6 py-4 w-[500px] whitespace-pre-line">
                                    <p onmouseenter="showDesc(`{{$category->description}}`, this)" onmouseleave="hideDesc(`{{substr($category->description, 0, 50) . '...'}}`, this)">
                                        {{ substr($category->description, 0, 50) . '...' }}
                                    </p>

                                </td>
                                <script>
                                    function showDesc(desc, btn) {
                                        btn.innerHTML = desc;
                                    }

                                    function hideDesc(desc, btn) {
                                        btn.innerHTML = desc;
                                    }
                                </script>
                                <td class="text-sm text-gray-900 flex justify-center font-light px-6 py-4 whitespace-nowrap">
                                    <button data-modal-target="update-category-modal" data-modal-toggle="update-category-modal" class="text-blue-500 mx-2 hover:underline" onclick="showPrevData(`{{$category->name}}`, `{{$category->description}}`, {{$category->id }})">
                                        Update Category
                                    </button>
                                    <form action="/dashboard/categories/{{$category->id}}" method="post" class="w-fit">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500 mx-2 hover:underline" onclick="return confirm('Are you sure you want to delete this category ?')">Delete Category</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if(count(\App\Models\Category::all()) === 0)
                <p class="m-10">No categories available.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- update category modal -->
<div id="update-category-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Update Category
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="update-category-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form id="update-category-form" class="space-y-4" action="" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function showPrevData(prevName, prevDesc, categoryId) {
        let name = document.getElementById('name');
        let description = document.getElementById('description');
        let form = document.getElementById('update-category-form');

        name.value = prevName;
        description.value = prevDesc;
        form.action = `/dashboard/categories/${categoryId}`;
    }
</script>
<!-- end update category modal -->


<!-- create category modal -->
<div id="create-category-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Category
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-category-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form id="update-category-form" class="space-y-4" action="/dashboard/categories" method="post">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"></textarea>
                    </div>
                    <button type="submit" class="w-full text-white bg-gradient-to-r from-green-500 to-green-950 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end create category modal -->

<script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection