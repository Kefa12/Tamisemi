<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for District_Education_Officer') }}<br>
            <a href="{{route("laratrust.roles.index")}}">management of the user</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged as administrator!
                    <a href="{{route("laratrust.roles.index")}}">manage</a>
                </div>
            </div>
        </div>
    </div>
    <li><a href="{{ URL('districts') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">See Transfer Request</a></li>
   
    @role('admin')
    <p>This is visible to users with the admin role. Gets translated to
    \Laratrust::hasRole('admin')</p>
    @endrole
</x-app-layout>
