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
    var jumlah = 0;
    if( makan == 'Mie Juara se-Bandung'){
        var mkn = 20000;
        var jumlah = jumlah + 1;
    } else if( makan=='Mie Juara Se-Indonesia'){
        var mkn = 21000;
        var jumlah = jumlah + 1;
    } else if( makan=='Mie Juara Se-Asia'){
        var mkn = 26000;
        var jumlah = jumlah + 1;
    } else if( makan=='Mie Kitel Kari'){
        var mkn = 18000;
        var jumlah = jumlah + 1;
    } else if( makan=='Mie Kitel Kari'){
        var mkn = 19000;
        var jumlah = jumlah + 1;
    } else if( makan=='Mie Kitel Kari'){
        var mkn = 18000;
        var jumlah = jumlah + 1;
    }

    $('#jumlah').val(jumlah);
    $('#total').html(mkn);
    return mkn;
}

function add()
{

    var jumlah = $('#jumlah').val();
}

// function total()
// {
//     var total = makanan();
//     $('#total').html(total);
// }
