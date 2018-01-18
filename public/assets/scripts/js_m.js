function validate_menu()
{
    var $select = $("#f_kategori").val();
    // alert('Hasil :'+$select);
    if($select.val() == 'Pilih Menu')
    {
        // $('#j_id').prop('disabled', true);
        // $('#j_nama').prop('disabled', true);
        // $('#j_harga').prop('disabled', true);
    }else{
      $('#j_id').prop('disabled', false);
      $('#j_nama').prop('disabled', false);
      $('#j_harga').prop('disabled', false);
    }
}


function makanan()
{
    var makan = $('#j_makanan').val();
    var jmlh = $('#jumlah').val();
    if( makan == 'Mie Juara se-Bandung'){
        var mkn = 20000;
        
    } else if( makan=='Mie Juara Se-Indonesia'){
        var mkn = 21000;
    } else if( makan=='Mie Juara Se-Asia'){
        var mkn = 26000;
    } else if( makan=='Mie Kitel Kari'){
        var mkn = 18000;
    } else if( makan=='Mie Kitel Kari'){
        var mkn = 19000;
    } else if( makan=='Mie Kitel Kari'){
        var mkn = 18000;
    }
    // var jumlah = 1;
    // $('#jumlah').val(jumlah);
    var total_makan = parseInt(mkn)*parseInt(jmlh);
    // alert('Hasil : '+total_makan);
    // $('#total_f').val(total_makan);
    $('#total_f').html(total_makan);
}

// function total()
// {
//     var total = makanan();
//     $('#total').html(total);
// }
