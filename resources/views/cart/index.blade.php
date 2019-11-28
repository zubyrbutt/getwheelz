@include('layouts.partial.partial')
	<div class="row">
		<div class="container">
    <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
				<th scope="col">Quantity</th>
                <th scope="col">Clear cart</th>
				
              </tr>
            </thead>
            <tbody>
                    @foreach ($items as $item)
              <tr>
                <td scope="row">{{ $item->id  }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
				<td>{{ $item->quantity }}</td>
				<td>
					<form action="{{ route('cart.destroy', $item->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<input type="submit" class="btn btn-danger btn-sm" value="Delete">
					</form>
				</td>

           
                
              </tr>
			 @endforeach
			 <tr>
				 <td></td>
				 <td></td>
				

				 <td><strong>Total Price</strong>: Rs. {{  Cart::getTotal() }}</td>
				 <td><strong>Total Items: </strong>{{ Cart::getTotalQuantity()}}</td>
				 <td></td>
			 </tr>
			 
			 

			</tbody>
			
		  </table>
		  
		  <div class="pull-right">
				<a href="{{ route('checkout') }}" class="btn btn-success btn-sm m-2">Check out</a>

		  </div>
		  

		</div></div>
@include('layouts.footer')