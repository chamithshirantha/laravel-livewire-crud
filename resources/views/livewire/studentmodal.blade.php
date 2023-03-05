<div wire:ignore.self class="modal fade" id="studentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="saveStudent">
            <div class="mb-3">
                <label>Student Name</label>
                <input type="text"  wire:model="name" class="form-control">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label>Student email</label>
                <input type="text" wire:model="email" class="form-control">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label>Student course</label>
                <input type="text" wire:model="course" class="form-control">
                @error('course') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
        </div>
    </form>
      </div>
    </div>
</div>




{{-- update --}}

<div wire:ignore.self class="modal fade" id="updateStudentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form wire:submit.prevent="updateStudent">
          <div class="mb-3">
              <label>Student Name</label>
              <input type="text"  wire:model="name" class="form-control">
              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
          </div>

          <div class="mb-3">
              <label>Student email</label>
              <input type="text" wire:model="email" class="form-control">
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
          </div>

          <div class="mb-3">
              <label>Student course</label>
              <input type="text" wire:model="course" class="form-control">
              @error('course') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update </button>
      </div>
  </form>
    </div>
  </div>
</div>





<div wire:ignore.self class="modal fade" id="deleteStudentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form wire:submit.prevent="destroyStudent">
          
          <div class="modal-body">
            <h4>Are You sure to Delete ?</h4>
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Yes ! </button>
      </div>
  </form>
    </div>
  </div>
</div>