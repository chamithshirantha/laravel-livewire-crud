@extends('layouts.app')


@section('content')

    <div>
        <livewire:student-show>
    </div>
    
@endsection

@section('script')



    <script>
        window.addEventListener('close-modal', event => {
            $('#studentmodal').modal('hide');
            $('#updateStudentmodal').modal('hide');
            $('#deleteStudentmodal').modal('hide');

        })
        </script>
    
@endsection