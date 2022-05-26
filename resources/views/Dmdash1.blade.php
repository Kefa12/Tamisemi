
<x-app-layout>
    <x-slot name="header">
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for District_Director') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged as user!
                  
                </div>
            </div>
        </div>
    </div>
    
    @if (Route::has('/dashboard'))
                        <li><a href="{{ route('/laratrust') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">manage user</a></li>
       @endif
 <li><a href="{{ URL('districts') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">See Transfer Request</a></li>
                    @role('admin')
    <p>This is visible to users with the admin role. Gets translated tojvlkfhkljvhnklfnvknfvkfxcnlkn
    \Laratrust::hasRole('admin') {{ Auth::user()->name }}</p>
    @endrole
</x-app-layout>
