@extends('layouts.main')
 
@section('page_title', 'Manage Items')

@section('content')
 
     
<div class="intro-y d-flex align-items-center mt-8">
    <h2 class="fs-lg fw-medium me-auto">
             Create New Item  
    </h2>
</div>
<div class="grid columns-12 gap-6 mt-5">
    <div class="intro-y g-col-12 g-col-lg-6">
        <!-- BEGIN: Form Layout -->

        <form method="post" enctype="multipart/form-data"  action="{{ route('items.store') }}" data-fouc>
            @csrf
        <div class="intro-y box p-5">
            <div>
                <label for="crud-form-1" class="form-label">Product Name</label>
                <input id="crud-form-1" name="name" type="text" class="form-control w-full" placeholder="Input text">
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
                        <input name="price" type="text" class="form-control" placeholder="3000" aria-describedby="input-group-3">
                    </div>
                     
                </div>
            </div>

            <div class="mt-3">
                <label class="d-block">Upload Item Photo:</label>
                                <input name="image" accept="image/*" type="file" class="form-control" data-fouc>
                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
            </div>

            <div class="mt-3">
                <label>Description</label>
                <div class="mt-2">
                  
                        <textarea class="form-control" name="description" id="" cols="30" rows="10">
                        </textarea>
                </div>
            </div>
            <div class="text-end mt-5">
                
                <button type="submit" class="btn btn-primary w-24">Submit</button>
            </div>
        </div>
    </form>
        <!-- END: Form Layout -->
    </div>
</div> 


@endsection

 