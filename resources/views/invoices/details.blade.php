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

        <!-- Add Product -->

        <!-- input course name-->
        <div  class="mt-4">
                <h3 for="name" :value="__('{{ $invoice->name }}')" />

        </div>


        <div  class="mt-4">
                <h3 value="__('{{ $invoice->price }}')" />
            </div>

        <div  class="mt-4">
                <h3 for="description" :value="__('{{ $invoice->description }}')" />

        </div>
    </div>
    </div>
    </div>   </div>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>invoice Total</th>
                <th>invoice Notes</th>
                <th>Date</th>
                <th>invoice Total</th>
                <th>invoice Notes</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$invoice->total}}</td>
                <td>{{$invoice->notes}}</td>
                <td class="col-md-4">{{$invoice->created_at}}</td>
                @foreach($invservs as $invserv)
                <td>{{App\Models\Service::find($invserv->service_id)->name}}</td>
                <td>{{App\Models\Service::find($invserv->service_id)->price}}</td>
                @endforeach
                <br></br>
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('invoices/' . $invoice->id . '/print') }}">Edit</a>
                   
                </td> 
            </tr>
            
        </tbody>
    </table>

</x-app-layout>
