<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{  URL::to ('invoices/' . $invoice->id.'/update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        {!! csrf_field() !!}

        <!-- Add Product -->

        <!-- input course name-->
        <div  class="mt-4">
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-2 w-full" type="name" name="name" value="{{ $invoice->name }}" required autofocus />
            </div>


        <div  class="mt-4">
                <x-input-label for="price" :value="__('Price')" />

                <x-text-input id="price" class="block mt-2" type="number" name="price" value="{{ $invoice->price }}" required autofocus />
            </div>

        <div  class="mt-4">
                <x-input-label for="description" :value="__('Description')" />


          <textarea id="description" name="description" placeholder="description" class="block mt-2 w-full" required="" type="text" >{{ $invoice->description }}</textarea>
          </div>
            

        <!-- Button -->
        <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ml-3">
                    {{ __('Update') }}
                </x-primary-button>
                
                </div>
        </fieldset>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
