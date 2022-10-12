<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

        <!-- Add Product -->

        <!-- input course name-->
        <div  class="mt-4">
                <h3 for="name" :value="__('{{ $user->name }}')" />

        </div>


        <div  class="mt-4">
                <h3 value="__('{{ $user->name }}')" />
            </div>

        <div  class="mt-4">
                <h3 for="description" :value="__('{{ $user->description }}')" />

        </div>
    </div>
    </div>
    </div>   </div>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>user Name</th>
                <th>user name</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->name}}</td>
                <td class="col-md-4">{{$user->description}}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('employee/' . $user->id . '/edit') }}">Edit</a>
                   
                </td> 
                <td>
                    <form action="{{ URL ('employee/delete/' . $user->id) }}" method="POST">
     {{method_field('DELETE')}}
     @csrf
     <button type="submit" class="btn btn-outline-danger">Delete</button>
 </form>
                </td> 
            </tr>
            
        </tbody>
    </table>

</x-app-layout>
