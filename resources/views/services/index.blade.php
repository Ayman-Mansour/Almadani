<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
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
              <x-nav-link :href="route('services.create')">
                        {{ __('add-service') }}
                    </x-nav-link>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="rad-info-box ">
    @foreach($services as $service)
    <x-service-card>
        <x-slot name="logo">
            <a href="/services/{{ $service->id }}">
                <x-nav-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
            <div>{{ $service->name }}</div>
            <div>{{ $service->description }}</div>
            <div>{{ $service->price }}</div>
            </x-service-card>
            @endforeach
        </div>
        </div>
    </div>
            @if (Session::has('message'))
	<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif


</x-app-layout>
