<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
  <tr>
    <td>

  <!-- Text from_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="from_date">from date</label>
      <div class="col-md-8">
      <input id="from_date" name="from_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>
    <td>
  <!-- Text to_date-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="to_date">to date</label>
      <div class="col-md-8">
      <input id="to_date" name="to_date" placeholder="name" class="form-control input-md" required="" type="date">
      </div>
    </div>
    </td>

    <td>
    <!-- Button -->
    <div class="form-group">
        <div class="col-md-8">
            <button id="submit" name="submit" class="btn btn-primary">GO</button>
        </div>
    </div>
    </td>
    </tr>
    </form>
  <!-- End form-->
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
