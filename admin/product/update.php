<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php
$id = $_GET['ID'];
include("config.php");
$result = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE PId=$id");
$data = mysqli_fetch_array($result);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">


                <form action="update-action.php" method="POST"  enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Update Product:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control" placeholder="Example product name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" placeholder="Example product price"required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
        
                        <input type="file" name="Pimage" class="form-control" required><br>

                        <img src="<?php echo $data['PImage'] ?>" alt="" style="height:100px;" >
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Car</option>
                        </select>
</div>                  
                        <input type="hidden" name="id" value="<?php echo $data['PId']?>">
                        <button type="submit" name="submitt"class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update Product</button>
                   

                </form>
            </div>
        </div>
    </div>


</body>

</html>
