<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Input Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="close-btn" onclick="closeForm()">
                <i class="fas fa-times"></i>
            </div>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Product Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Product name">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Price:</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" name="price" id="price" placeholder="0.00">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Product description"></textarea>
                </div>
                <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">Sizes:</label>
                    <div>
                        <div class="size-checkbox">
                            <input type="checkbox" id="size-xs" name="sizes[]" value="XS">
                            <label for="size-xs">XS</label>
                        </div>
                        <div class="size-checkbox">
                            <input type="checkbox" id="size-s" name="sizes[]" value="S">
                            <label for="size-s">S</label>
                        </div>
                        <div class="size-checkbox">
                            <input type="checkbox" id="size-m" name="sizes[]" value="M">
                            <label for="size-m">M</label>
                        </div>
                        <div class="size-checkbox">
                            <input type="checkbox" id="size-l" name="sizes[]" value="L">
                            <label for="size-l">L</label>
                        </div>
                        <div class="size-checkbox">
                            <input type="checkbox" id="size-xl" name="sizes[]" value="XL">
                            <label for="size-xl">XL</label>
                        </div>
                        <div class="size-checkbox">
                            <input type="checkbox" id="size-xxl" name="sizes[]" value="XXL">
                            <label for="size-xxl">XXL</label>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <label for="category" class="form-label">Category:</label>
                        <select class="form-control" id="category" name="category">
                            <option value="">Select Category</option>
                            <option value="Gents">Gents</option>
                            <option value="Ladies">Ladies</option>
                            <option value="Kids">Kids</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' onclick="closeForm()">Close</button>&nbsp; 
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
                <?php
            require_once 'classes/ProductClass.php';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = isset($_POST["name"]) ? $_POST["name"] : '';
                $price = isset($_POST["price"]) ? $_POST["price"] : '';
                $description = isset($_POST["description"]) ? $_POST["description"] : '';
                $sizes = isset($_POST["sizes"]) ? implode(',', $_POST["sizes"]) : '';
                $category = isset($_POST["category"]) ? $_POST["category"] : '';
                if (empty($name) || empty($price) || empty($description) || empty($sizes) || empty($category)) {
                    echo "<div class='alert alert-danger'>All fields are required.</div>";
                } else {
                    try {
                        $image_path = '';
                        if (!empty($_FILES['image']['name'])) {
                            $image_path = Product::uploadImage($_FILES['image']);
                        }
                        $product = new Product(null, $name, $description, $price, $image_path, $sizes, $category);
                        if ($product->addProduct()) {
                            echo "<div class='alert alert-success'>Product added successfully.</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Failed to add product.</div>";
                        }
                    } catch (Exception $e) {
                        echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
                    }
                }
            }
            ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function closeForm() {
            window.location.href = 'admin_dashboard.php';
        }
    </script>
</body>
</html>