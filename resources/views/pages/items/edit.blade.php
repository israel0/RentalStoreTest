@extends('layouts.main')
 
@section('page_title', 'Manage Items')

@section('content')



<div class="container">

     
<div class="intro-y d-flex align-items-center mt-8">
    <h2 class="fs-lg fw-medium me-auto">
             Edit Item
    </h2>
</div>

<form method="post" enctype="multipart/form-data"  action="{{ route('items.update', Help::hash($item->id)) }}" data-fouc>
    @csrf @method('PUT')

<div class="row">
      <div class="col-7">
 

        <div class="intro-y box p-5">
            <div>
                <label for="crud-form-1" class="form-label">Product Name</label>
                <input id="crud-form-1" name="name" value="{{ $item->name }}" type="text" class="form-control w-full" placeholder="Input text">
            </div>
   
            

            <div class="mt-3">
                <label for="crud-form-2" class="form-label">Category</label>
                <select name="item_id" data-placeholder="Select your favorite actors" class="tom-select w-full">

                       @foreach ($itemTypes as $item)
                         <option value="{{ $item->id }}"> {{ $item->name }}  </option> 
                       @endforeach

                </select>
            </div>

            <div class="mt-3">
                <label for="crud-form-2" class="form-label"> Quality </label>
                <select name="standard_id" name="standard_id" data-placeholder="Select your favorite actors" class="tom-select w-full">

                 
                         @foreach ($qualities as $quality)
                         <option value="{{ $quality->id }}"> {{ $quality->name }} </option> 
                         @endforeach
                  
                     
                </select>
            </div>

            
            <div class="mt-3">
                <label for="crud-form-2" class="form-label"> Item State </label>
                <select name="state_id" data-placeholder="Select your favorite actors" class="tom-select w-full">
   
                    @foreach ($states as $state)
                    <option value="{{ $state->id }}"> {{ $state->name }} </option> 
                    @endforeach
           
                </select>
            </div>
           
           
 
            <div class="mt-3">
                <label class="form-label">Price</label>
                <div class="grid columns-1 gap-2">
                    <div class="input-group g-col-6 g-col-sm-3">
                        <div id="input-group-3" class="input-group-text">NGN</div>
                        <input name="price" value="{{ $item->price }}" type="text" class="form-control" placeholder="3000" aria-describedby="input-group-3">
                    </div>
                     
                </div>
            </div>

            <div class="mt-3">
                <label class="d-block">Upload Item Photo:</label>
                    <input value="{{ old('image') }}" accept="image/*" type="file" name="image" class="form-control" data-fouc>
                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
            </div>

            <div class="mt-3">
                <label>Description</label>
                <div class="mt-2">
                     
                        <textarea class="form-control" name="description" id="" cols="30" rows="10">

                            {{ $item->description }} 
                        </textarea>
                     

               
                </div>
            </div>

            
            
        </div>
</div>


<div class="col-5">
     


        {{-- RENTAL ACTION FORM --}}
        <div class="intro-y box p-5">
        <div class="mt-3">
            <label for="crud-form-2" class="form-label">Change Status</label>
            <select name="transmission" data-placeholder="Select your favorite actors" class="tom-select w-full">

                   @foreach ($rentals as $rental )
                        <option value="{{ $rental->name }}"> {{ $rental->name }}  </option> 
                   @endforeach
     
            </select>
        </div>

  @if($item->item_id === 1 )
<h2 class="fs-lg fw-medium me-auto">
    Update This Book Records
</h2>
@endif
 
@if($item->item_id === 2 )
<h2 class="fs-lg fw-medium me-auto">
     Update This Equipment Records
</h2>
@endif
    </div>
</div>




<div class="text-end mt-5">
        
     
    <a  class="d-flex align-items-center text-theme-6" href="javascript:;" data-bs-toggle="modal" data-bs-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 me-1"></i>
        <button class="btn btn-danger w-24"> Delete </button> 
    </a> 
    
    <button type="submit" class="btn btn-primary w-40">Submit</button>
</div>



</div>
</form>
</div>

<div id="delete-confirmation-modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                    <div class="fs-3xl mt-5">Are you sure?</div>
                    <div class="text-gray-600 mt-2">
                        Do you really want to delete these records? 
                        <br>
                        This process cannot be undone.
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-outline-secondary w-24 me-1"> Cancel </button>
                     <a href="{{ route('items.destroy', Help::hash($item->id)) }}">  <button type="button" class="btn btn-danger w-24"> Delete </button> </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

 