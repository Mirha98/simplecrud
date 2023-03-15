@extends('layout.app')

@include('hero')

@include('modal.store')

@include('modal.edit')

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>


    // AJAX STORE MOTO
    $('#form_store_racer').submit(function (e) { 
        const fd = new FormData(this);
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "{{route('moto.store')}}",
            data: fd,
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                if(response.status == 200){
                    swal.fire(
                        'Success',
                        response.message,
                        'success'
                    );
                    setTimeout(() => {
                        location.reload();
                    }, 2500);
                }
            },
            errors: function(error){

            },
        });
    });

    // AJAX DELETE MOTO
    $('.btnDelete').on('click', function () {
        var moto_id = $(this).val();
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger me-2'
        },
        buttonsStyling: false
        })
    
        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "delete",
                url: "http://localhost/simplecrud/public/api/v1/moto/"+moto_id,
                success: function (response) {
                    
                }
            });
            setTimeout(() => {
                location.reload();
            }, 1000);
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
        }
        })
        
    });

    // AJAX EDIT MOTO
    $('.btnEdit').on('click', function () {
        var moto_id = $(this).val();
        $.ajax({
            type: "get",
            url: "http://localhost/simplecrud/public/api/v1/moto/"+moto_id,
            data: {
                _token:"{{csrf_token()}}"
            },
            success: function (response) {
                $('#edit_racer_id').val(response.data.id);
                $('#edit_racer_name').val(response.data.name);
                $('#edit_team_name').val(response.data.team);
                $('#edit_country_name').val(response.data.country);
            }
        });
    });

    $('#form_update_racer').submit(function (e) { 
        e.preventDefault();
        var moto_id = $('#edit_racer_id').val();
        const fd = new FormData(this);
        const data = {
            "name": $('#edit_racer_name').val(),
            "team": $('#edit_team_name').val(),
            "country": $('#edit_country_name').val(),
        };
        $.ajax({
            type: "put",
            url: "http://localhost/simplecrud/public/api/v1/moto/"+moto_id,
            data: data,
            contentType: false,
            processData: false,
            success: function (response) {
                
            }
        });
        
    });

</script>