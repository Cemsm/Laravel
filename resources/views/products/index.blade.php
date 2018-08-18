<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($products as $product)
	
	
		<div>
		<a href={{"/products/".$product->id}}>{{$product->name}}</a>
	</div>

@endforeach
</body>
</html>