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
                <form action="{{ url ('invoices/store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        {!! csrf_field() !!}

        <!-- Add Product -->

        <!-- input course name-->
        <!-- <div  class="mt-4">
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-2 w-full" type="name" name="name" :value="old('name')" required autofocus />
            </div>


        <div  class="mt-4">
                <x-input-label for="price" :value="__('Price')" />

                <x-text-input id="price" class="block mt-2" type="number" name="price" :value="old('price')" required autofocus />
            </div> -->
            <div class="col-md-4 pull-right">
        <input type="button" name="" class="btn btn-primary " class="ml-3" onclick="addRow('dataTable')" value="+">
        </div>

        <TABLE id="dataTable" class="table" >
    <TR>
           
      <TD class="col-md-2">
        <div class="boddy " >
             <label class="col-md-4 control-label" for="service"></label>
             <div class="col-md-4">
             <select  class="form-control" class="block mt-2 w-full" required="true">
              @foreach($services as $service)
                  <option value="{{ $service->id}}">{{$service->name}}</option>
              @endforeach
</select>
<!-- <label >price : </input> -->
<input id='price' disabled name='price' value="{{ $service->price}}"/>


             <!-- <input type="text" name="subjects[]" placeholder="subject" class="subject form-control"> -->

<!--              <a href="#" class="btn btn-danger delete">delete</a>   -->
              </div>
        </div>
      </TD>
<!--       <TD class="col-md-1">
        <input type="checkbox" name="chk" class="form-control"/>
      </TD> -->
    </TR>
  </TABLE>

        <!-- <div  class="mt-4">
        <select  class="form-control" required="true">
              @foreach($services as $service)
                  <option value="{{ $service->id}}">{{$service->name}}</option>
              @endforeach
</select>
</div> -->
<div  class="mt-4">
<input type="button" name="" class="btn btn-primary " class="ml-3" onclick="findsum()" value="=">
</div>
Sum : <input disabled type="text" required="true" name="sum" id="sum"/>
VAT : <input disabled type="text" required="true" name="vat" id="vat"/>
Total : <input disabled type="text" required="true" name="total" id="total"/>
                <div  class="mt-4">
                <x-input-label for="name" :value="__('Notes')" />
          <textarea id="notes" name="Notes" placeholder="notes" class="block mt-2 w-full" required="" type="text" ></textarea>
          </div>
            </div>

        <!-- Button -->
        <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ml-3">
                    {{ __('Save') }}
                </x-primary-button>
                
                </div>
        </fieldset>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
  
      function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        /*switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }*/
      }
    }

    
function findsum(){
    var arr = document.getElementsByName('price');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tot += parseInt(arr[i].value);
    }
    document.getElementById('sum').value = tot;
    var _vat = tot * 0.05;
    document.getElementById('vat').value = _vat;
    document.getElementById('total').value = tot + _vat;
}

    </script>
