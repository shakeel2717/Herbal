<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-primary">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="card-title">Add Products</h2>
                    <form action="{{ route('action') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="item">Item Name</label>
                            <input type="text" name="item" id="item" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Item Price</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stock">Item Stock</label>
                            <input type="text" name="stock" id="stock" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="discount">Item Discount</label>
                            <input type="text" name="discount" id="discount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tax">Item Tax</label>
                            <input type="text" name="tax" id="tax" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
