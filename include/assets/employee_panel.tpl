
<link rel="stylesheet" href="assets/css/mystyle.css">
<div class="app-contacts">
<header class="slidePanel-header overlay" style="background-image: url('assets/images/Map.png');')">
  <div class="overlay-panel overlay-background vertical-align">
    <div class="slidePanel-actions">
      <div class="btn-group btn-group-flat">
        <button type="button" class="btn btn-pure btn-inverse icon md-delete" aria-hidden="true"></button>
        <button type="button" class="btn btn-pure btn-inverse slidePanel-close icon md-close"
        aria-hidden="true"></button>
      </div>
    </div>
    
    <div class="vertical-align-middle">
      <a class="avatar" href="javascript:void(0)">
        <img src="assets/global/portraits/1.jpg" alt="...">
      </a>
      <h3 class="name">ชื่อ นามสกุล</h3>
      <div class="tags">
        <span class="btn btn-inverse">ผู้ดูแลระบบ</span>
    </div>
<!--   <button type="button" class="edit btn btn-success btn-floating" data-toggle="edit"  >
      <i class="icon md-edit animation-scale-up" aria-hidden="true" id="edit"></i>
      <i class="icon md-close animation-scale-up" aria-hidden="true" id="close"></i>
    </button> -->
    <button type="button" id="edit" class="edit btn btn-success btn-floating"><i class="icon md-edit animation-scale-up" aria-hidden="true"></i></button>
     <button type="button" id="submitB" class="btn btn-success btn-floating edit_b" name="btnsave" value="btnsave" style="display:none;" onclick="close_buttom()"> <i class="icon md-close animation-scale-up" aria-hidden="true"></i></button>             
    
  </div>
</header>
<div class="slidePanel-inner">
  <div class="user-info">
  <div class="panel-body-employ">
    <form class="form-horizontal" action="#">
      <div class="form-group form-material">
       <label class="col-sm-3 control-label">รหัสพนักงาน</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="txtemId" id="txtemId" readonly>
         </div>
           <label class="col-sm-1 control-label">สถานะ</label>
        <div class="col-sm-2">
        <select class="form-control" name="selemStatus" id="selemStatus" disabled>
                    <option>คงอยู่</option>
                    <option>หสม</option>  
                    <option>คณะบุคคล</option> 
                  </select>
         </div>
        </div>
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">รหัสผู้ทำบัญชี</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="txtemAccId" id="txtemAccId" readonly>
         </div>
         <label class="col-sm-1 control-label">ตำแหน่ง</label>
        <div class="col-sm-3">
        <select class="form-control" name="selemPosition" id="selemPosition" disabled>
                    <option>Admin</option>
                    <option>หสม</option>  
                    <option>คณะบุคคล</option> 
                  </select>
         </div>
        </div>
        <h4 class="example-title">ข้อมูลส่วนบุคคล :</h4>
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">เลขประจำตัวประชาชน</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="txtemIdenNum" id="txtemIdenNum" readonly>
         </div>
          <label class="col-sm-1 control-label">สถานะ</label>
        <div class="col-sm-3">
        <select class="form-control" name="selemFamstatus" id="selemFamstatus" disabled>
                    <option>โสด</option>
                    <option>หสม</option>  
                    <option>คณะบุคคล</option> 
                  </select>
         </div>
        </div>
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">ที่อยู่ตามทะเบียนบ้าน</label>
        <div class="col-sm-7">
        <textarea class="form-control" name="txtemRegisAdd" id="txtemRegisAdd" rows="3" readonly></textarea>
         </div>
        </div>
         <div class="form-group form-material">
       <label class="col-sm-3 control-label">ที่อยู่ปัจจุบัน</label>
        <div class="col-sm-7">
        <textarea class="form-control" name="txtemAdd" id="txtemAdd" rows="3" readonly></textarea>
         </div>
        </div>
         <div class="form-group form-material">
       <label class="col-sm-2 control-label">โทรศัพท์</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtemTel" id="txtemTel" readonly>
         </div>
         <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtemEmail" id="txtemEmail" readonly>
         </div>
        </div>
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">บุคคลที่ติดต่อได้</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="txtemPersonCon" id="txtemPersonCon" readonly>
         </div>
         <label class="col-sm-1 control-label">โทรศัพท์</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" name="txtemPersonTel" id="txtemPersonTel" readonly>
         </div>
        </div>
         <h4 class="example-title">ข้อมูลการศึกษา :</h4>
            <div class="form-group form-material">
       <label class="col-sm-3 control-label">ชื่อมหาวิทยาลัย</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="txtemUnivers" id="txtemUnivers" readonly>
         </div>
        </div>    
         <div class="form-group form-material">
       <label class="col-sm-3 control-label">ระดับการศึกษา</label>
        <div class="col-sm-3">
       <select class="form-control" name="selemEdulevel" id="selemEdulevel" disabled>
                    <option>ปวช</option>
                    <option>ปวส</option>  
                    <option>ปริญญาตรี</option> 
                  </select>
         </div>
           <label class="col-sm-2 control-label">สาขาที่จบ</label>
        <div class="col-sm-4">
        <input type="text" class="form-control"  name="txtemBranch" id="txtemBranch" readonly/>
         </div>
        </div>
          <div class="form-group form-material">
                  <label class="col-sm-3 control-label">เกรดเฉลี่ยรวม</label>
                 <div class="col-sm-6">
               <input type="text" class="form-control"  name="txtemGradeavg" id="txtemGradeavg" readonly/>
                 </div>
                </div>
         <h4 class="example-title">ข้อมูลการทำงาน :</h4>                
             <div class="form-group form-material">
       <label class="col-sm-2 control-label">เริ่มปฏิบัติงาน</label>
        <div class="col-sm-4">
        <div class="input-group">
                    <span class="input-group-addon">
                      <i class="icon md-calendar" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" data-plugin="datepicker" name="txtemStartW" id="txtemStartW" readonly>
                  </div>
         </div>
         <label class="col-sm-3 control-label">อัตราเงินเดือน</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" name="txtemSalary" id="txtemSalary" readonly>
         </div>
        </div>  
         <div class="form-group form-material">
         <label class="col-sm-3 control-label">ต้นทุนค่าแรงงานต่อวัน</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" name="txtemLaborcost" id="txtemLaborcost" readonly>
         </div>
       <label class="col-sm-3 control-label">จำนวนวันทำงาน</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" name="txtemNumW" id="txtemNumW" readonly>
         </div>
        </div>  
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">เงื่อนไขวันหยุดและสวัสดิการ</label>
        <div class="col-sm-7">
        <textarea class="form-control" name="txtemConwelfare" id="txtemConwelfare" rows="3" readonly></textarea>
         </div>
        </div>
        <div class="form-group form-material">
                  <label class="col-sm-3 control-label">หมายเหตุ</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" name="txtemNote" rows="3" id="txtemNote" readonly=""></textarea>
                  </div>
              </div>  
            
    </form>
    </div>
  </div>
</div>

</div>

      

 <script language="javascript">
document.getElementById('edit').onclick = function() {
    document.getElementById('txtemId').removeAttribute('readonly');
   document.getElementById('selemStatus').removeAttribute('disabled');
   document.getElementById('txtemAccId').removeAttribute('readonly');
   document.getElementById('selemPosition').removeAttribute('disabled');
  document.getElementById('txtemIdenNum').removeAttribute('readonly');
   document.getElementById('selemFamstatus').removeAttribute('disabled');
   document.getElementById('txtemRegisAdd').removeAttribute('readonly');
   document.getElementById('txtemAdd').removeAttribute('readonly');
   document.getElementById('txtemTel').removeAttribute('readonly');
   document.getElementById('txtemEmail').removeAttribute('readonly');
   document.getElementById('txtemPersonCon').removeAttribute('readonly');
    document.getElementById('txtemPersonTel').removeAttribute('readonly');
   document.getElementById('txtemUnivers').removeAttribute('readonly');
   document.getElementById('selemEdulevel').removeAttribute('disabled');
   document.getElementById('txtemBranch').removeAttribute('readonly');
   document.getElementById('txtemGradeavg').removeAttribute('readonly');
     document.getElementById('txtemStartW').removeAttribute('readonly');
   document.getElementById('txtemSalary').removeAttribute('readonly');
   document.getElementById('txtemLaborcost').removeAttribute('readonly');
   document.getElementById('txtemNumW').removeAttribute('readonly');
   document.getElementById('txtemConwelfare').removeAttribute('readonly');
   document.getElementById('txtemNote').removeAttribute('readonly');
    document.getElementById('edit').style.display = "none";
      document.getElementById('submitB').style.display = "inline-block";
 
};
</script>
<script language="javascript">
function close_buttom(){

          document.getElementById('edit').style.display = "inline-block";
      document.getElementById('submitB').style.display = "none";
     $("#txtemId").attr("readonly", true);
      $("#selemStatus").attr("disabled", true);
      $("#txtemAccId").attr("readonly", true);
      $("#selemPosition").attr("disabled", true);
      $("#txtemIdenNum").attr("readonly", true);
      $("#selemFamstatus").attr("disabled", true);
      $("#txtemRegisAdd").attr("readonly", true);
      $("#txtemAdd").attr("readonly", true);
      $("#txtemTel").attr("readonly", true);
      $("#txtemEmail").attr("readonly", true);
      $("#txtemPersonCon").attr("readonly", true);
      $("#txtemPersonTel").attr("readonly", true);
      $("#txtemUnivers").attr("readonly", true);
      $("#selemEdulevel").attr("disabled", true);
      $("#txtemBranch").attr("readonly", true);
      $("#txtemGradeavg").attr("readonly", true);
      $("#txtemStartW").attr("readonly", true);
      $("#txtemSalary").attr("readonly", true);
      $("#txtemLaborcost").attr("readonly", true);
      $("#txtemNumW").attr("readonly", true);
       $("#txtemConwelfare").attr("readonly", true);
      $("#txtemNote").attr("readonly", true);
 
};
</script>


 