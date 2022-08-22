
$(function () { 
  $("#myform1").on("submit",function(){
    var form = $(this)[0];
   if (form.checkValidity() === false || checkbox_required===false) {
     event.preventDefault();
     event.stopPropagation();
   }
   form.classList.add('was-validated');         
});

    
})
function validqty(obj){
  var pattern_otp = /(^[0-9]{5}$)/;
  obj.setCustomValidity(obj.value.match(pattern_otp)?"":"invalid");
}
function save(){
  Swal.fire({
    title: 'คุณต้องการบันทึกข้อมูลหรือไม่?',
    showCancelButton: true,
    confirmButtonText: 'บันทึก',
    cancelButtonText: 'ยกเลิก',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('บันทึกข้อมูลสำเร็จ!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
}
function edit(){
 
 $('#ModelEdit_Watsadu').modal('show');
}
function update_things(){
  alert($('#id').val());
}
function del(id){
  Swal.fire({
    title: 'แน่ใจหรือไม่?',
    text: "คุณต่องการลบรายการ "+id+" หรือไม่!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'ลบรายการนี้',
    cancelButtonText: 'ยกเลิก',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'ลบรายการสำเร็จ',
        'รายการนี้ของคุณถูกลงเรียบร้อยแล้ว.',
        'success'
      )
    }
  })
}
function formatDate(nowDate) {
  return nowDate.getFullYear() +"-"+ (nowDate.getMonth() + 1) + '-'+ nowDate.getDate();
}