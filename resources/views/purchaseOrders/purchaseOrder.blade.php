@extends('layouts.app')

@section('content')
<div>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Purchase Order Information</h3>
          <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">Merchant</label>
                    <select id="merchant" name="merchant" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value='0'>-- Select merchant --</option>
                      @foreach($merchants['data'] as $merchant)
                        <option value='{{ $merchant->id }}'>{{ $merchant->customer_fname }}</option>
                      @endforeach
                    </select>
                  </div>
  
                <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">Store</label>
                    <select id="store" name="store" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value='0'>-- Select store --</option>
                      @foreach($stores['data'] as $store)
                        <option value='{{ $store->id }}'>{{ $store->name }}</option>
                      @endforeach
                    </select>
                  </div>
  
                <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">Supplier</label>
                    <select id="sel_supl" name="sel_supl" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value='0'>-- Select supplier --</option>
                      @foreach($suppliers['data'] as $supplier)
                        <option value='{{ $supplier->id }}'>{{ $supplier->legal_name }}</option>
                      @endforeach
                    </select>
                  </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700">Supplier Location</label>
                  <select id="sup_loc" name="sup_loc" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value='0'>-- Select Location --</option>
                  </select>
                </div>
  
                <div class="col-span-6 sm:col-span-2">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">Supplier Contact</label>
                  <input type="text" name="sup_contact" id="sup_contact" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">Serial Number</label>
                  <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <div class="max-w-lg flex rounded-md shadow-sm">
                     <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"> PO </span>
                     <input type="text" name="username" id="username" value={{$serialNo}} autocomplete="username" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                    </div>
                </div>
                </div>
  
                <div class="col-span-6 sm:col-span-2">
                  <label for="region" class="block text-sm font-medium text-gray-700">Order Date</label>
                  <input type="date" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                {{-- <div class="col-span-6 sm:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Location</label>
                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                  </div> --}}

                  <div class="col-span-6 sm:col-span-1">
                    <label for="country" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Pending</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                  </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="sup_email" id="sup_email" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                  <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Pdf Url </label>
                  <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <div class="max-w-lg flex rounded-md shadow-sm">
                       <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"> workcation.com/ </span>
                       <input type="text" name="username" id="username" autocomplete="username" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                      </div>
                  </div>
                </div>

                <div class="col-span-6">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700">Note</label>
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
            </div>
            <div class="px-4 sm:px-6 lg:px-8">
              <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                  <h1 class="text-xl font-semibold text-gray-900">Purchase Order Items</h1>
                  <p class="mt-2 text-sm text-gray-700">A list of all the items and their quntity and price.</p>
                </div>
              </div>

              {{-- ----------PO Items--------------- --}}
              <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-1">
                      <label for="country" class="block text-sm font-medium text-gray-700">Product</label>
                      <select id="product" name="product" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value='0'>-product-</option>
                        @foreach($products['data'] as $product)
                          <option value='{{ $product->id }}'>{{ $product->product_name }}</option>
                        @endforeach
                      </select>
                    </div>
    
                  <div class="col-span-6 sm:col-span-1">
                    <label for="country" class="block text-sm font-medium text-gray-700">Varient</label>
                    <select id="varient" name="varient" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value='0'>-variant-</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-1">
                    <label for="region" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="text" name="quantity" id="quantity" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-1">
                    <label for="region" class="block text-sm font-medium text-gray-700">Unit Price</label>
                    <input type="text" name="unit_price" id="unit_price" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-1">
                    <label for="region" class="block text-sm font-medium text-gray-700">Amount</label>
                    <input type="text" name="amount" id="amount" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-1">
                    <label for="region" class="block text-sm font-medium text-gray-700" style="visibility: hidden">Add Item</label>
                    <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto add-row">Add item</button>
                  </div>
                </div>
              </div>
              {{-------------PO items----------------}}

              <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Select</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Product</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Varient</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Quantity</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Unit Price</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Amount</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                              <span class="sr-only">Edit</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                          {{-- <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                              <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </td>
                            <td class="text-sm text-gray-500">cream cracker</td>
                            <td class="text-sm text-gray-500">cream cracker-handypack</td>
                            <td class="text-sm text-gray-500">5</td>
                            <td class="text-sm text-gray-500">20</td>
                            <td class="text-sm text-gray-500">100.00</td>
                          </tr> --}}
            
                          <!-- More people... -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto add-row delete-row">Delete item</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

 <!-- Script -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type='text/javascript'>
 $(document).ready(function(){

    // Supplier Change
    $('#sel_supl').change(function(){

       // Supplier id
       var id = $(this).val();
      
       // Empty the dropdown
       $('#sup_loc').find('option').not(':first').remove();

       // AJAX request 
       $.ajax({
         url: 'getSuppliers/'+id,
         type: 'get',
         dataType: 'json',
         success: function(response){
           var len = 0;
           if(response['data'] != null){
              len = response['data'].length;
           }

           if(len > 0){
              // Read data and create <option >
              for(var i=0; i<len; i++){

                 var id = response['data'][i].id;
                 
                 var location = response['data'][i].address;
                 var contact = response['data'][i].contact_no;
                 var email = response['data'][i].email;
              
                 var option = "<option value='"+id+"'>"+location+"</option>";

                 $("#sup_loc").append(option); 
                 $("#sup_contact").val(contact);
                 $("#sup_email").val(email);
              }
           }

         }
       });
    });
 });
 </script>
 <!-- Script -->
 <script>
  $(document).ready(function(){
      $(".add-row").click(function(){
          var product = $("#product").val();
          var varient = $("#varient").val();
          var quantity = $("#quantity").val();
          var unit_price = $("#unit_price").val();
          var amount = $("#amount").val();
          
          var markup = "<tr><td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'><input id='candidates' aria-describedby='candidates-description' name='record' type='checkbox' class='focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded'></td><td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>" + product + "</td><td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>" + varient + "</td><td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>" + quantity + "</td><td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>" + unit_price + "</td><td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>" + amount + "</td></tr>";
          $("table tbody").append(markup);
      });
      
      // Find and remove selected table rows
      $(".delete-row").click(function(){
          $("table tbody").find('input[name="record"]').each(function(){
            if($(this).is(":checked")){
                  $(this).parents("tr").remove();
              }
          });
      });
  });    
</script>

<script type='text/javascript'>
  $(document).ready(function(){
 
     // Product Change
     $('#product').change(function(){
 
        // Product id
        var id = $(this).val();

        // Empty the dropdown
        $('#varient').find('option').not(':first').remove();
 
        // AJAX request 
        $.ajax({
          url: 'getVarients/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){
            var len = 0;
            if(response['data'] != null){
               len = response['data'].length;
            }
 
            if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){
 
                  var id = response['data'][i].id;
                  var varientName = response['data'][i].productName;
               
                  var option = "<option value='"+id+"'>"+varientName+"</option>";
 
                  $("#varient").append(option); 
               }
            }
 
          }
        });
     });
  });
  </script>

<script type='text/javascript'>
  $(document).ready(function(){
 
     // Variant Change
     $('#varient').change(function(){
 
        // Variant id
        var id = $(this).val();
 
        // AJAX request 
        $.ajax({
          url: 'getVariantPrice/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){
            var len = 0;
            if(response['data'] != null){
               len = response['data'].length;
            }
 
            if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){
 
                  var price = response['data'][i].regular_price;
                  $('#unit_price').val(price);

               }
            }
 
          }
        });
     });
  });
  </script>

<script type='text/javascript'>
  $(document).ready(function(){
    $('#quantity').keyup(function(){
          var quantity = $("#quantity").val();
          var unitPrice = $("#unit_price").val();
          var amount = quantity*unitPrice;
          $('#amount').val(amount);
     });
    });
</script>