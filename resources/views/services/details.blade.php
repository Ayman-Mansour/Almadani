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

        <!-- Add Product -->

        <!-- input course name-->
        <div  class="mt-4">
                <h3 for="name" :value="__('{{ $service->name }}')" />

        </div>


        <div  class="mt-4">
                <h3 value="__('{{ $service->price }}')" />
            </div>

        <div  class="mt-4">
                <h3 for="description" :value="__('{{ $service->description }}')" />

        </div>
    </div>
    </div>
    </div>   </div>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Service Price</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$service->name}}</td>
                <td>{{$service->price}}</td>
                <td class="col-md-4">{{$service->description}}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('services/' . $service->id . '/edit') }}">Edit</a>
                   
                </td> 
                <td>
                    <form action="{{ URL ('services/delete/' . $service->id) }}" method="POST">
     {{method_field('DELETE')}}
     @csrf
     <button type="submit" class="btn btn-outline-danger">Delete</button>
 </form>
                </td> 
            </tr>
            
        </tbody>
    </table>

</x-app-layout>
