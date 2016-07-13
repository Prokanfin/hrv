@extends('layouts.master')
@section('title', 'DashBoard')

@section('footer')

@section('content')

<!--<div class="app-contacts"> -->

<!-- Page -->
<div class="page animsition container-fluid">
    <div class="page-content container-fluid">
        <!-- Page -->
        <div class="panel bg-white animsition">

            <div class="page-main">
                <!-- Contacts Content Header -->
                <div class="page-header">
                    <h1 class="page-title">
                        Users List
                    </h1>

                    <div class="page-header-actions">
                        <form> 
                            <div class="input-search input-search-dark">
                                <i class="input-search-icon md-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contacts Content -->

                <div class="page-content page-content-table">
                    <!-- Actions -->
                    <div class="page-content-actions">
                        <!-- <div class="pull-right">
                         
                          <button type="button" class="btn btn-info btn-md empty-btn">Empty All</button>
                        </div> -->
                        <!--  <div class="btn-group btn-group-flat">
                         
                         </div> -->
                    </div>
                    <!-- Contacts --><div class="col-md-12">
                        <table class="table is-indent tablesaw" data-tablesaw-mode="stack" data-plugin="animateList"
                               data-animate="fade" data-child="tr" data-selectable="selectable">
                            <thead>
                                <tr>
                                    <th style="width: 5%;" class="cell-30" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                                            <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
                                                   />
                                            <label for="select_all"></label>
                                        </span>
                                    </th>
                                    <th style="width: 20%;" class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">NAME</th>
                                    <th style="width: 10%;" class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">STATUS</th>
                                  <!--  <th style="width: 20%;" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">COMPANY</th>  -->
                                  <!--  <th style="width: 10%;" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">CITY</th> -->
                                    <th style="width: 10%;" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">PHONE</th>
                                    <th style="width: 10%;" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">TOOL</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td class="cell-30">
                                        <span class="checkbox-custom checkbox-primary checkbox-lg">
                                            <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"
                                                   />
                                            <label for="contacts_1"></label>
                                        </span>
                                    </td>
                                    <td class="cell-300">
                                        <a class="avatar" href="javascript:void(0)">
                                            <img class="img-responsive" src="assets/global/portraits/1.jpg" alt="...">
                                        </a>
                                        Herman Beck
                                    </td>
                                    <td class="work-status">
                                        <span class="label label-primary">Admin</span>
                                    </td>
                                  <!--  <td>
                                        Kan Accounting and Tax 
                                    </td>  -->
                                  <!--  <td>
                                        Phayao
                                    </td>  -->
                                    <td class="cell-300">
                                        (084)-334-2354
                                    </td>  
                                    <td>
                                        <button type="button" class="btn btn-icon btn-default" title="ดูข้อมูล" data-url="{{asset('include/assets/customer_panel.php')}}" data-toggle="slidePanel"><i class="icon md-eye" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-icon btn-default" title="ส่ง email" data-target="#exampleFormModal" data-toggle="modal"><i class="icon md-email" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-icon btn-default" title="แก้ไขรหัสผ่าน" data-target="#exampleFormModalEdit" data-toggle="modal"><i class="icon md-edit" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-icon btn-default" title="ลบข้อมูล" data-target="#exampleModalWarning" data-toggle="modal"><i class="icon md-delete" aria-hidden="true"></i></button>
                                    </td>  
                                </tr>





                            </tbody>
                        </table></div>
                    <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
                </div>
            </div>
        </div>
        <!-- End Page -->
            
    </div>
</div>

<!--</div> -->
<!-- Site Action -->
<div class="site-action">
    <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating show_detail" >
        <i class="front-icon md-plus animation-scale-up" aria-hidden="true" ></i>
        <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
    </button>
    <div class="site-action-buttons">
        <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
            <i class="icon md-delete" aria-hidden="true"></i>
        </button>
    </div>
</div>
<!-- End Site Action -->          
<!-- Modal -->
  <!-- Add User Form -->
  <div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">เพิ่มผู้ใช้งาน</h4>
        </div>
        <div class="modal-body">
          <form>
         
            <div class="col-lg-7 form-group">
               <label class="control-label">ชื่อ-นามสกุล</label>
              <input type="text" class="form-control" name="lastName" value="นายศุภโชค ชุติมาลากุล" >
              </div>
              <div class="col-lg-5 form-group">
               <label class="control-label">สถานะ</label>
              <select class="form-control">
                <option>ผู้ดูแลระบบ</option>
                <option>พนักงาน</option>
                <option>ลูกค้า</option>
              </select>
              </div> 
              <div class="col-lg-12 form-group">
               <label class="control-label">บริษัท</label>
              <input type="text" class="form-control" name="lastName">
              </div>
              <div class="col-lg-12 form-group">
               <label class="control-label">เบอร์โทร</label>
              <input type="text" class="form-control" name="lastName" >
              </div>
           
              <div class="col-lg-12 form-group">
               <label class="control-label">Username</label>
              <input type="text" class="form-control" name="lastName">
              </div>
              <div class="col-lg-12 form-group">
            <label class="control-label">Password <button type="button" class="btn btn-icon btn-default waves-effect waves-light">
               <i class="icon fa-cube icon-dice" aria-hidden="true" title="สุ่ม password"></i></button>
               </label>
               <input type="password" class="form-control" name="lastName" >
              </div>

              <div class="col-lg-12 form-group">
               <label class="control-label">ยืนยัน Password</label>
              <input type="password" class="form-control" name="lastName" >
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
          <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add User Form -->
<!-- Alert Modal -->
<div class="modal fade modal-warning" id="exampleModalWarning" aria-hidden="true"
     aria-labelledby="exampleModalWarning" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Warning!</h4>
            </div>
            <div class="modal-body">
                <p>คุณต้องการลบข้อมูลผู้ใช้ของ (ชื่อ นามสกุล)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-pure waves-effect waves-classic" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-warning btn-pure waves-effect waves-classic">ตกลง</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal --> 
<!-- Form model send massage  -->
<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
     role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">ส่งข้อความ</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <label class="control-label">ผู้รับ</label>
                        <input type="text" class="form-control" name="lastName" value="นายศุภโชค ชุติมาลากุล" readonly>
                    </div>
                    <div class="col-lg-12 form-group">
                        <label class="control-label">เรื่อง</label>
                        <input type="text" class="form-control" name="firstName">
                    </div>

                    <div class="col-lg-12 form-group">
                        <label class="control-label">ข้อความ</label>
                        <textarea class="form-control" rows="5" ></textarea>
                    </div>
                    <div class="col-sm-12 pull-right">
                        <button class="btn btn-primary" data-dismiss="modal" type="button">ส่ง</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Modal --> 
<!-- Form model edit password massage  -->
<div class="modal fade" id="exampleFormModalEdit" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
     role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleFormModalLabel">แก้ไขรหัสผ่าน : (ชื่อ นามสกุล)</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <label class="control-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" name="lastName" value="admin.acc" readonly>

                    </div>
                    <div class="col-lg-12 form-group">
                        <label class="control-label">รหัสผ่านใหม่</label>
                        <input type="password" class="form-control" name="firstName">
                    </div>

                    <div class="col-lg-12 form-group">
                        <label class="control-label">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control" name="firstName">
                    </div>
                    <div class="col-sm-12 pull-right">
                        <button class="btn btn-primary" data-dismiss="modal" type="button">บันทึก</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Modal --> 
<!-- End Modal -->



@endsection