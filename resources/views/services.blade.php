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
                <form action="{{ url ('save_add_student') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
        {!! csrf_field() !!}

        <!-- Add Product -->
        <div class="form-group">
            
            
        </div> 

        <div class="form-group">
            <label class="col-md-4 control-label " for="course">Course Cost</label>
            <div class="col-md-2">
            <input class="form-control input-md-4" disabled="disabled" id="course" name="course" value=" ">
             </div>
        </div> 

        <div class="form-group">
          <label class="col-md-4 control-label" for="teacher_id">Student Name</label>
          <div class="col-md-4">
            <select id="student_id" name="student_id" class="form-control" required="true">
             
            </select>
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-5 control-label" for="submit"></label>
            <div class="col-md-5">
              <button id="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
  
        </fieldset>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
