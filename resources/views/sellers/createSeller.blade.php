@extends('layouts.app')

@section('content')

<form class="space-y-8 divide-y divide-gray-200" method="post" action="{{ route('sellers.store') }}">
  @csrf
    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
      <div>
        <div>
          <h3 class="text-lg leading-6 font-medium text-gray-900">Create Seller</h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed as seller details.</p>
        </div>
  
        <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Name </label>
                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                    <input type="text" name="sup_email" id="sup_email" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
          
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Store Name </label>
                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                    <input type="text" name="sup_email" id="sup_email" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>
      </div>
    </div>
  
    <div class="pt-5">
      <div class="flex justify-end">
        <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
      </div>
    </div>
  </form>
  
@endsection