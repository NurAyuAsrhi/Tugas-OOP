<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden shadow-md sm:rounded-lg">
                                    <table class="w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Telp
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Email
                                                </th>
                                                <th scope="col" class="relative py-3 px-6">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th
                                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{$contact->name}}
                                                    </td>
                                                    <th
                                                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$contact->number_phone}}
                                                    </td>
                                                    <th
                                                        class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$contact->email}}
                                                    </td>
                                                    <th class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#"
                                                            class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline">
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
