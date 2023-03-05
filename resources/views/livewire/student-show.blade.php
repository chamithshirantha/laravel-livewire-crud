<div>
    @include('livewire.studentmodal')
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>crud with livewire</h4>
                    <input type="search" wire:model="search" class="form-control float-end mx-2" style="230px"/>
                    <button type="button" class="btn btn-primary flaot-end" data-bs-toggle="modal" data-bs-target="#studentmodal">
                        Add New Student
                    </button>
                </div>
                <div class="card-body">
                    <table class="table -table-borderd table-striped"> 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($students as $student)

                           <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->course }}</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateStudentmodal" wire:click="editStudent({{ $student->id }})" class="btn btn-primary">
                                        Edit
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteStudentmodal" wire:click="deleteStudent({{ $student->id }})"  class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                               
                           @empty
                               <tr>
                                <td>
                                    No Record
                                </td>
                               </tr>
                           @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $students->links() }}
                    </div>
                    
                </div>

            </div>

            
        </div>
    </div>
   </div>
</div>
