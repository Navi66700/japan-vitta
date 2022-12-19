@extends('backend.layout.masters')
@section('title', 'Dashboard')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Contacts</li>
                <li class="breadcrumb-item active">Contacts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    {{--    @include('sweetalert::alert')--}}
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title"> Contacts</h2>
                            <div class="dt-action-buttons text-right">
                                <a class="btn btn-primary" href="{{route('add-lesson')}}"> <i class="bi bi-plus"></i>&nbsp </i>Add Lesson</a>
                            </div>
                        </div>
                        <!-- Table with stripped rows -->

                        <table class="table datatable">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $key=>$lesson)
                                <tr>
                                    <th scope="row">{{$key +1}}</th>
                                    <td>
                                        <img src="{{asset('storage/lessons-image/'.$lesson->lesson_image)}}" class="rounded" style="height: 80px; width: 100px;">
                                    </td>
                                    <td>{{$lesson->level}}</td>
                                    <td>{{$lesson->lesson_title}}</td>
                                    <td>{{$lesson->created_at}}</td>
                                    <td>{{$lesson->updated_at}}</td>
                                    <td>
                                        <a href="{{url('/edit-lesson', $lesson->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <button class="btn btn-danger delete-lesson" value="{{$lesson->id}}"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{--    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>--}}
    {{--    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
    <script>
        $(document).ready(function() {

        });

        $('body').on('click', '.delete-lesson', function() {
            var LessonID = $(this).val();
            Swal.fire({
                title: 'Are you sure?',
                text: "You can change this later.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Delete it',
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-outline-danger ml-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                console.log(result);
                if (result.value) {
                    window.location.href = "{{ url('delete-lesson') }}/" + LessonID;
                }
            });
        });


        // $('body').on('click', '.delete-lesson', function() {
        //     var LessonID = $(this).val();
        //     swal({
        //         title: "Are you sure?",
        //         text: "Once deleted, you will not be able to recover this imaginary file!",
        //         icon: "warning",
        //         buttons: true,
        //         dangerMode: true,
        //     })
        //         .then((willDelete) => {
        //             if (willDelete) {
        //                 window.location = "/delete-lesson/" + LessonID;
        //                 swal("Poof! Your imaginary file has been deleted!", {
        //                     icon: "success",
        //
        //                 });
        //             } else {
        //                 swal("Your imaginary file is safe!");
        //             }
        //
        //         });
        // });

        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
    </script>
@endsection



