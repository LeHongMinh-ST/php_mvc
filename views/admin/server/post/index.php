<div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <!-- .breadcrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="?mod=admin"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Bảng điều khiển</a>
                    </li>
                  </ol>
                </nav><!-- /.breadcrumb -->
                <!-- floating action -->
                <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
                <!-- title and toolbar -->
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header">
                    <!-- .nav-tabs -->
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#tab1">Tát cả</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab2">Ongoing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab3">Completed</a>
                      </li>
                    </ul><!-- /.nav-tabs -->
                  </div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form-group -->
                    <div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">
                        <!-- .input-group-prepend -->
                        <div class="input-group-prepend">
                          <select class="custom-select">
                            <option selected=""> Filter By </option>
                            <option value="1"> Tags </option>
                          </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                          </div><input type="text" class="form-control" placeholder="Search record">
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table-responsive -->
                    <div class="text-muted"> Showing 1 to 10 of 1,000 entries </div>
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th style="min-width:320px">Tiêu đề</th>
                            <th> Danh mục</th>
                            <th> Người tạo </th>
                            <th> Ngày tạo </th>
                            <th> Lượt xem </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                          <!-- tr -->
                          <?php foreach($posts as $post){?>
                          <tr>
                            <td>
                              <a href="?mod=client&act=post&slug=<?php echo $post['slug']?>" class="tile tile-img mr-1"><img class="img-fluid" src="<?php echo URL_TEMPLATE_ADMIN?>assets/images/dummy/img-1.jpg" alt="Card image cap"></a> <a href="?mod=client&act=post&slug=<?php echo $post['slug']?>"><?php echo $post['title']?></a>
                            </td>
                            <td class="align-middle"> <?php echo $post['category_id']?> </td>
                            <td class="align-middle"> <?php echo $post['user_id']?> </td>
                            <td class="align-middle"> <?php echo $post['created_at']?> </td>
                            <td class="align-middle"><?php echo $post['view_count']?></td>
                            <td class="align-middle text-right">
                              <a href="?mod=admin&c=post&act=edit&id=<?php echo $post['id']?>" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="?mod=admin&c=post&act=destroy&id=<?php echo $post['id']?>" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <?php }?>
                          <!-- tr -->
                        </tbody><!-- /tbody -->
                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .pagination -->
                    <ul class="pagination justify-content-center mt-4">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fa fa-lg fa-angle-left"></i></a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">13</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">14</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">15</a>
                      </li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">...</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">24</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-lg fa-angle-right"></i></a>
                      </li>
                    </ul><!-- /.pagination -->
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div>