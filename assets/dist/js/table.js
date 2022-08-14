
$(function () { 



$('#update').hide();      
});
function edit(id){

    $.ajax({
        url: './Things/Edit',
        type: 'post',
        data: {
          id_ :  id,
        },
        success: function(response) {
          if(response){
            var data = JSON.parse(response);
            console.log(data);
            $('#id').val(data[0]['Pasadu ID']);
            $('#Noid').val(data[0]['Noid']);
            $('#NAME').val(data[0]['NAME']);
            $('#Model').val(data[0]['Model']);
            $('#SERIAL_NO').val(data[0]['SERIAL_NO']);
            $('#PERUNIT').val(data[0]['PERUNIT']);
            $('#RECEIVE').val(data[0]['RECEIVE']);
            var now = new Date(data[0]['RECEIVE']);
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
            var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
            var date_sum = new Date(data[0]['วันที่คำนวณ']);
            var day_ = ("0" + date_sum.getDate()).slice(-2);
            var month_ = ("0" + (date_sum.getMonth() + 1)).slice(-2);
            var sum_ = date_sum.getFullYear()+"-"+(month_)+"-"+(day_) ;
            $('#RECEIVE').val(today);
            $('#date_sum').val(sum_);    
            var num = parseFloat(data[0]['ค่าเสื่อมสะสม']);
            var num1 = parseFloat(data[0]['มูลค่าสุทธิ']);
            $('#data_ss').val(num.toFixed(2));
            $('#sum').val(num1.toFixed(2));
            $('#NOID_Old').val(data[0]['NOID-Old']);
            $('#Exp').val(data[0]['อายุการใช้งาน']);
            $('#ks1').text(data[0]['ค่าซาก1']);
            $('#ks').val(data[0]['ค่าซาก']);
            $('#update_things').show(); 
            $('#save_things').hide(); 
            var $newOption = $("<option selected='selected'></option>").val(data[0]['COMPANY']).text(data[0]['COMPANY']) 
            $("#company").append($newOption).trigger('change');
            var $pasadu_oder = $("<option selected='selected'></option>").val(data[0]['Section oder']).text(data[0]['Section oder']) 
            $("#pasadu_oder").append($pasadu_oder).trigger('change');
            var $ttype = $("<option selected='selected'></option>").val(data[0]['TYPE']).text(data[0]['TYPE']) 
            $("#ttype").append($ttype).trigger('change');
            var $way = $("<option selected='selected'></option>").val(data[0]['TMONEY']).text(data[0]['TMONEY']) 
            $("#way").append($way).trigger('change');
            var $budge = $("<option selected='selected'></option>").val(data[0]['KMONEY']).text(data[0]['KMONEY']) 
            $("#budge").append($budge).trigger('change');
            var $new_date = $("<option selected='selected'></option>").val(data[0]['New Date']).text(data[0]['New Date']) 
            $("#new_date").append($new_date).trigger('change');
            var $year_ng = $("<option selected='selected'></option>").val(data[0]['ปีงบ']).text(data[0]['ปีงบ']) 
            $("#year_ng").append($year_ng).trigger('change');
          }else{

          }

    
        }
      });

    
}

function del(id){
    alert(id);
}
function save_things(){
  alert("save_things");
}

function update_things(){
  alert($('#id').val());
}
function formatDate(nowDate) {
  return nowDate.getFullYear() +"-"+ (nowDate.getMonth() + 1) + '-'+ nowDate.getDate();
}