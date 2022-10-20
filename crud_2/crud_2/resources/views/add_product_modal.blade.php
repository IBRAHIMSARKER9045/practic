<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <form action="" method="POST" id="addProductForm">
    @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="errMsgContainer"></div>

        <div class="form-group mt-2">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group mt-2">
            <label for="description">Product Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
          </div>
            <div class="form-group mt-2">
                <label for="price">Product Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_product">Add Product</button>
        </div>
      </div>
    </div>
</form>
  </div>
