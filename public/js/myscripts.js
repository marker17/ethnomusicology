
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

