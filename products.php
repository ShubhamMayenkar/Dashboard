<!Doctype html>
<html>
  <head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <section class="products">
      <div class="container">
        <div class="products_outer mx-auto">
          <div class="products_functions d-flex">
            <div class="add_product ml-auto">
              <a class="btn add_product_btn text-capitalize">Add Product</a>
            </div>
          </div>
          <div class="product_list my-4">
            <ul class="list-group">
              <li class="list-group-item my-2 p-3">
                <div class="item_outer d-flex flex-row justify-content-between">
                  <div class="item_image my-auto">
                    <div class="product_image" style="background-image: url('images/profile-pic.jpg')"></div>
                  </div>
                  <div class="item_content">
                    <div class="content_outer d-flex flex-row">
                      <div class="content_left">
                        <div class="product_name text-capitalize font-bold">
                          product black/brown size medium
                        </div>
                        <div class="available">
                          <span class="available_title">Available: </span>
                          <span class="available_amount">300</span>
                        </div>
                      </div>
                      <div class="content_right text-right ml-auto">
                        <div class="product_price font-bold">
                          $5.65
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item my-2 p-3">
                <div class="item_outer d-flex flex-row justify-content-between">
                  <div class="item_image my-auto">
                    <div class="product_image" style="background-image: url('images/profile-pic.jpg')"></div>
                  </div>
                  <div class="item_content">
                    <div class="content_outer d-flex flex-row">
                      <div class="content_left">
                        <div class="product_name text-capitalize font-bold">
                          product black/brown size medium
                        </div>
                        <div class="available">
                          <span class="available_title">Available: </span>
                          <span class="available_amount">250</span>
                        </div>
                      </div>
                      <div class="content_right text-right ml-auto">
                        <div class="product_price font-bold">
                          $5.65
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- The Modal -->
    <div class="modal_custom modal_add_product modal fade" id="addProductModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal body -->
          <div class="modal-body position-relative">
            <div class="content_outer d-flex flex-column flex-md-row justify-content-between py-4">
              <div class="select_product_image_container mx-auto mx-md-0">
                <div class="select_product_image" id="select-image">
                  <div class="select_image_overlay">
                    <form class="p-2">
                      <div class="form-group">
                        <!-- <label for="exampleFormControlFile1">Example file input</label> -->
                        <input type="file" class="select_image" id="imgInp">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="product_details_container text-center text-md-left mt-3 mt-md-0">
                <form>
                  <div class="form-group">
                    <!-- <label for="inputAddress">Name</label> -->
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <!-- <label for="inputEmail4">Stock</label> -->
                    <input type="text" class="form-control" id="inputStock" placeholder="Stock">
                  </div>
                  <div class="form-group">
                    <!-- <label for="inputPassword4">Price</label> -->
                    <input type="text" class="form-control" id="inputPrice" placeholder="Price">
                  </div>
                  <button type="submit" class="save_button btn btn-primary">Save</button>
                </form>
              </div>
              <div class="modal_close_btn position-absolute" data-dismiss="modal">
                <img src="images/close.svg" width="15" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
