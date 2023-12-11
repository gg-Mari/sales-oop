



 <!-- add Product -->
 <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <h1 class="text-center text-success mb-3"><i class="fa-solid fa-cash-register"></i> Buy Product</i></h1>
                    <form action="" method="post" value="<?= $product['product_name'];?>">
                        <div class="col-12 mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" value="<?= $product['product_name'];?>" class="fs-lg form-control">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                            <label for="">Price</label>
                            <div class="input-group">
                                <div class="input-group-text">$</div>
                                <input type="number" name="price" value="<?= $product['price'];?>" class="fs-lg form-control">
                            </div>
                            </div>
                            <div class="col-6">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" value="<?= $product['quantity'];?>" class="fs-lg form-control">
                            </div>
                        </div>
                        <button type="button" class="btn btn-success w-100 mb-3">Pay</button>
                    </form>   
                </div>
            </div>
            </div>
        </div>
 </div>