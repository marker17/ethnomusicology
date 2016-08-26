    $(document).ready( function () {
        $('#accession').DataTable();
    } );
    




    $('#table1 tr').each(function() {
        if ($(this).find('td:empty').length) $(this).remove();
        
    });

    

    $('#table3 tr td').each(function() {
        if ($(this).text() === '0'){
            $('#table3 tr').remove();
        }
    });



    document.querySelector('#from1').addEventListener('submit', function(e) {
        var form = this;
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this accession!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, Delete it!',
            cancelButtonText: "No, cancel it!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Accession was successfully deleted!',
                    type: 'success'
                }, function() {
                    form.submit();
                });
                    
            } else {
                swal("Cancelled", "Your accession is safe :)", "error");
            }
        });
    });
/*

    $('#table1 tr').each(function() {
        if ($(this).find('td:empty').length) $(this).remove();
    });

*/