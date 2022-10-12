<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="mt-4">
            <label class="col-md-5 control-label" for="submit"></label>
            <div class="col-md-5">
              <button id="submit" name="submit" class="btn btn-primary"></button>
              <x-nav-link :href="route('employees.create')">
                        {{ __('add-employee') }}
                    </x-nav-link>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($users as $user)
    <x-service-card>
        <x-slot name="logo">
            <a href="/employees/{{ $user->id }}">
                <x-nav-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
            <div>{{ $user->name }}</div>
            <div>{{ $user->total }}</div>
            <div>{{ $user->created_at }}</div>
            </x-service-card>
            @endforeach
</x-app-layout>
