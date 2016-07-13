<?php
        include_once 'config_tpl.php';
?>
<link rel="stylesheet" href="<?php echo $path ?>assets/css/mystyle.css">
<div class="app-contacts">
<header class="slidePanel-header overlay" style="background-image: url('<?php echo $path ?>assets/images/Map.png');')">
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
        <img src="<?php echo $path ?>assets/global/portraits/2.jpg" alt="...">
      </a>
      <h3 class="name">ชื่อกิจการ</h3>
      <div class="tags">
        <span class="btn btn-inverse">สถานะ</span>
         <span class="btn btn-inverse">ระดับลูกค้า</span>
    </div>
    <!-- <button type="button" class="edit btn btn-success btn-floating" data-toggle="edit"  id="edit">
      <i class="icon md-edit animation-scale-up" aria-hidden="true"></i>
      <i class="icon md-close animation-scale-up" aria-hidden="true" onclick="close()"></i>
    </button> -->
 <button type="button" id="edit" class="edit btn btn-success btn-floating"><i class="icon md-edit animation-scale-up" aria-hidden="true"></i></button>
     <button type="button" id="submitB" class="btn btn-success btn-floating edit_b" name="btnsave" value="btnsave" style="display:none;" onclick="close_buttom()"> <i class="icon md-close animation-scale-up" aria-hidden="true"></i></button>   

  </div>
</header>
<div class="slidePanel-inner">
  <div class="user-info">
  <div class="panel-body">
    <form class="form-horizontal" action="#">
      <div class="form-group form-material">
       <label class="col-sm-4 control-label">เลขประจำตัวผู้เสียภาษีอากร</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="txtcusTaxId" id="txtcusTaxId" readonly>
         </div>
        </div>
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">เลขทะเบียนการค้า</label>
        <div class="col-sm-7">
        <input type="text" class="form-control" name="txtcusBandId" id="txtcusBandId" readonly>
         </div>
        </div>
          <div class="form-group form-material">
       <label class="col-sm-2 control-label">กลุ่มลูกเค้า</label>
        <div class="col-sm-4">
         <select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" name="selcusGroup" id="selcusGroup" disabled>
                    <option>ระดับลูกค้า</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                  </select>
         </div>
         <label class="col-sm-2 control-label">สถานะ</label>
        <div class="col-sm-4">
        <select class="form-control" name="selcusStatus" id="selcusStatus" disabled>
                    <option>เจ้าของคนเดียว</option>
                    <option>หสม</option>  
                    <option>คณะบุคคล</option> 
                  </select>
         </div>
        </div>
        <h4 class="example-title">ข้อมูลการติดต่อ :</h4>
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">ที่อยู่ (ภาษาไทย)</label>
        <div class="col-sm-7">
        <textarea class="form-control" name="txtcusAddrTh" id="txtcusAddrTh" rows="3" readonly></textarea>
         </div>
        </div>
        <div class="form-group form-material">
       <label class="col-sm-3 control-label">ที่อยู่ (ภาษาอังกฤษ)</label>
        <div class="col-sm-7">
        <textarea class="form-control" name="txtcusAddrEn" id="txtcusAddrEn" rows="3" readonly></textarea>
         </div>
        </div>
         <div class="form-group form-material">
       <label class="col-sm-2 control-label">โทรศัพท์</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtcusTel" id="txtcusTel" readonly>
         </div>
         <label class="col-sm-2 control-label">โทรสาร</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtcusFax" id="txtcusFax" readonly>
         </div>
        </div>
        <div class="form-group form-material">
       <label class="col-sm-2 control-label">Website</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtcusWeb" id="txtcusWeb" readonly>
         </div>
         <label class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtcusMail" id="txtcusMail" readonly>
         </div>
        </div>
         <h4 class="example-title">ข้อมูลการลงนาม :</h4>
         <div class="form-group form-material" >
                  <label class="col-sm-3 control-label">ผู้มีอำนาจลงนาม</label>
                  <div class="col-sm-5"> 
                  <div id="olNameCon">
                 <input type="text" class="form-control"  name="txtcusSingN[]" id="txtSingName" readonly/>
                 </div>
                 </div>
                 <div class="col-sm-3">
                  <div id="selStatus">  
                  <select class="form-control" name="selcusOwner[]" id="selOwner" disabled>
                    <option>เจ้าของกิจการ</option>
                    <option>หุ้นส่วนจัดการ</option>  
                    <option>กรรมการผู้จัดการ</option> 
                  </select>
                 </div> 
                </div>
                </div>
                         <!-- add more -->
           <div id="button_add" style="display:none;">             
           <div class="form-group form-material">
           <div class="col-sm-5"> </div><div class="col-sm-3"> 
           <div id="minus_button">
                  <button type="button" class="btn btn-icon btn-default waves-effect waves-light" id="btn1"><i class="icon md-plus" aria-hidden="true"></i></button>
                  <button type="button" class="btn btn-icon btn-default waves-effect waves-light" id="btnDel"><i class="icon md-minus" aria-hidden="true"></i></button>
            </div>  
            </div>    
           </div> 
           </div>
                  <!--End add more -->
          <div class="form-group form-material">
                  <label class="col-sm-3 control-label">เงื่อนไขการลงนาม</label>
                 <div class="col-sm-6">
               <input type="text" class="form-control"  name="txtcusCondition" id="txtcusCondition" readonly/>
                 </div>
                </div>        
             <div class="form-group form-material">
       <label class="col-sm-3 control-label">ชื่อผู้ติดต่องาน</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="txtcusContact" id="txtcusContact" readonly>
         </div>
        </div>    
        <div class="form-group form-material">
       <label class="col-sm-2 control-label">โทรศัพท์</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtcusConTel" id="txtcusConTel" readonly>
         </div>
         <label class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtcusConEmail" id="txtcusConEmail" readonly>
         </div>
        </div>   
    </form>
    </div>
  </div>
</div>

</div>
<!--remove element-->
        <script>
            $(document).ready(function () {
                $("#btnDel").click(function () {
                       $("#txtSingName1").remove();
                    $("#selOwner1").remove();

                });
            });
        </script>
 <!--add element-->
        <script>
$(document).ready(function(){
    $("#btn1").click(function(){
        $("#olNameCon").append("<input type='text' class='form-control'  name='txtSingName[]'' id='txtSingName1'/>");
        $("#selStatus").append("<select class='form-control' name='selOwner[]' id='selOwner1'><option value='เจ้าของกิจการ'>เจ้าของกิจการ</option><option value='หุ้นส่วนผู้จัดการ'>หุ้นส่วนผู้จัดการ</option><option value='กรรมการผู้จัดการ'>กรรมการผู้จัดการ</option><option value='ประธานมูลนิธิ'>ประธานมูลนิธิ</option><option value='ผู้อำนวยการ'>ผู้อำนวยการ</option></select>");
        
    });
});
</script>


 <script language="javascript">
document.getElementById('edit').onclick = function() {
     document.getElementById('txtcusTaxId').removeAttribute('readonly');
   document.getElementById('txtcusBandId').removeAttribute('readonly');
   document.getElementById('selcusGroup').removeAttribute('disabled');
   document.getElementById('selcusStatus').removeAttribute('disabled');
  document.getElementById('txtcusAddrTh').removeAttribute('readonly');
   document.getElementById('txtcusAddrEn').removeAttribute('readonly');
   document.getElementById('txtcusTel').removeAttribute('readonly');
   document.getElementById('txtcusFax').removeAttribute('readonly');
   document.getElementById('txtcusWeb').removeAttribute('readonly');
   document.getElementById('txtcusMail').removeAttribute('readonly');
   document.getElementById('txtSingName').removeAttribute('readonly');
    document.getElementById('selOwner').removeAttribute('disabled');
   document.getElementById('txtcusCondition').removeAttribute('readonly');
   document.getElementById('txtcusContact').removeAttribute('readonly');
   document.getElementById('txtcusConTel').removeAttribute('readonly');
   document.getElementById('txtcusConEmail').removeAttribute('readonly');
   document.getElementById('button_add').style.display = "block";
    document.getElementById('edit').style.display = "none";
      document.getElementById('submitB').style.display = "inline-block";
 
};
</script>
<script language="javascript">
function close_buttom(){
  document.getElementById('button_add').style.display = "none";
          document.getElementById('edit').style.display = "inline-block";
      document.getElementById('submitB').style.display = "none";
     $("#txtcusTaxId").attr("readonly", true);
      $("#txtcusBandId").attr("readonly", true);
      $("#selcusGroup").attr("disabled", true);
      $("#selcusStatus").attr("disabled", true);
      $("#txtcusAddrTh").attr("readonly", true);
      $("#txtcusAddrEn").attr("readonly", true);
      $("#txtcusTel").attr("readonly", true);
      $("#txtcusFax").attr("readonly", true);
      $("#txtcusWeb").attr("readonly", true);
      $("#txtcusMail").attr("readonly", true);
      $("#txtSingName").attr("readonly", true);
      $("#selOwner").attr("disabled", true);
      $("#txtcusCondition").attr("readonly", true);
      $("#txtcusContact").attr("readonly", true);
      $("#txtcusConTel").attr("readonly", true);
      $("#txtcusConEmail").attr("readonly", true);
      
 
};
</script>