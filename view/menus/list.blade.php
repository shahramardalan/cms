@extends('layout_dashboard')

@section('content')
<div>
    <a href="/dashboard/menus/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create New Menu</a>
</div>

<div class="mt-6">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        page name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        slug
                    </th>
                    <th scope="col" class="px-6 py-3">
                        created at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                    <td class="px-6 py-4">
                        {{$menu->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$menu->page->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$menu->page->slug}}
                    </td>
                    <td class="px-6 py-4">
                        {{$menu->created_at}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/dashboard/pages/edit/{{$menu->page->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">edit page</a>
                        <a href="/dashboard/pages/{{$menu->page->id}}/delete" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete page</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection