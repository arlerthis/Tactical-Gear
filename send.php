<?php
    // if (isset($_POST['submit'])) {
    //     $nama   = $_POST['nama'];
    //     $email   = $_POST['email'];
    //     $nohp   = $_POST['nohp'];
    //     $alamat   = $_POST['alamat'];
    //     $pesan   = $_POST['pesan'];
    //     header("location:https://api.whatsapp.com/send?phone=$nohp&text=Nama:%20$nama
    //     %20%0DEmail:%20$email
    //     %20%0Alamat:%20$alamat
    //     %20%0DPesan:%20$pesan");
    // }else {
    //     echo "
    //         <script>
    //             window.location=history.go(-1);
    //         </script>
    //     ";
    

    // }
?>

//no wa admin
$("#noAdmin").val("085257472006");
$('.whatsapp-btn').click(function () {
    $('#whatsapp').toggleClass('toggle');
});
// Onclick Whatsapp Sent!
$('#whatsapp .submit').click(WhatsApp);
$("#whatsapp input, #whatsapp textarea").keypress(function () {
    if (event.which == 13) WhatsApp();
});
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

function WhatsApp() {
    var ph = '';
    if ($('#whatsapp .diklat').val() == '') { // Cek Nama
        ph = $('#whatsapp .diklat').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .diklat').focus();
        return false;
    } else if ($('#whatsapp .nama').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .nama').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .nama').focus();
        return false;
    } else if ($('#whatsapp .bulan').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .bulan').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .bulan').focus();
        return false;
    } else if ($('#whatsapp .pelaksanaan').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .pelaksanaan').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .pelaksanaan').focus();
        return false;
    } else if ($('#whatsapp .intansi').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .intansi').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .intansi').focus();
        return false;
    } else if ($('#whatsapp .sebagai').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .sebagai').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .sebagai').focus();
        return false;
    } else {
        // Check Device (Mobile/Desktop)
        var url_wa = 'https://web.whatsapp.com/send';
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            url_wa = 'whatsapp://send/';
        }
        // Get Value
        var tujuan = $('#whatsapp .tujuan').val(),
            via_url = location.href,
            diklat = $('#whatsapp .diklat').val(),
            nama = $('#whatsapp .nama').val(),
            bulan = $('#whatsapp .bulan').val(),
            nowhatsapp = $('#whatsapp .nowhatsapp').val(),
            pelaksanaan = $('#whatsapp .pelaksanaan').val(),
            intansi = $('#whatsapp .intansi').val(),
            sebagai = $('#whatsapp .sebagai').val();
        $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Diklat: ' + diklat + ' %0ANama: ' + nama + ' %0ABulan: ' + bulan + ' %0APelaksanaan: ' + pelaksanaan + '%0Ainstansi/Organisasi: ' + intansi + '%0ASebagai: ' + sebagai + ' %0A%0Avia ' + via_url);
        var w = 960,
            h = 540,
            left = Number((screen.width / 2) - (w / 2)),
            tops = Number((screen.height / 2) - (h / 2)),
            popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
        popupWindow.focus();
        return false;
    }
}