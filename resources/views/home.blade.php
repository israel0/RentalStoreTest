
@extends('layouts.main')
 
@section('page_title', 'Manage Items')

@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
     
<div class="g-col-12 grid columns-12 gap-6 mt-8">
    <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">Total Books </div>
                    <div class="text-gray-600 mt-1">Rented and Returned</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                    <div class="fw-medium position-absolute w-full h-full d-flex align-items-center justify-content-center top-0 start-0">{{ $items->where('item_id', 'Books')->count() }}</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">Total Equipments</div>
                    <div class="text-gray-600 mt-1">Rented and Rented</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                    <div class="fw-medium position-absolute w-full h-full d-flex align-items-center justify-content-center top-0 start-0">{{ $items->where('item_id', 'Equipments')->count() }}</div>
                </div>
            </div>
        </div>
    </div>
     
</div>

<h2 class="intro-y fs-lg fw-medium mt-10">
    List Items
</h2>

<div class="grid columns-12 gap-6 mt-5">
    <div class="intro-y g-col-12 d-flex flex-wrap flex-sm-nowrap align-items-center mt-2">
       <a href="{{ route('items.create') }}">  <button class="btn btn-primary shadow-md me-2">Add New Item</button></a>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box text-gray-700 dark-text-gray-300" aria-expanded="false" data-bs-toggle="dropdown">
                <span class="w-5 h-5 d-flex align-items-center justify-content-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-menu w-40">
                <div class="dropdown-content">
                    <a href="" class="dropdown-item"> <i data-feather="printer" class="w-4 h-4 me-2"></i> Print </a>
                    <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 me-2"></i> Export to Excel </a>
                    <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 me-2"></i> Export to PDF </a>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
        <div class="w-full w-sm-auto mt-3 mt-sm-0 ms-sm-auto ms-md-0">
            <div class="w-56 position-relative text-gray-700 dark-text-gray-300">
                <input type="text" class="form-control w-56 box border-white dark-border-dark-3 pe-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 position-absolute my-auto top-0 bottom-0 me-3 end-0" data-feather="search"></i> 
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y g-col-6 overflow-auto overflow-lg-visible">
        <table class="table table-report mt-n2">
            <thead>
                <tr>
                    <th class="text-nowrap">BOOKS</th>
                  
                    <th class="text-nowrap">RENTED</th>
                   
                    
                </tr>
            </thead>

            <tbody>
 
             {{-- @foreach(array_combine($report_rented, $report_returned) as $month => $values) --}}
               @foreach($books as $book)
                <tr>  
                    
                   <td>{{  $book->name }} </td>   
                    <td>  {{ $book->transmission }}  </td>
                    

                </tr>
                @endforeach
 
            </tbody>
        </table>
    </div>

    <div class="intro-y g-col-6 overflow-auto overflow-lg-visible">
        <table class="table table-report mt-n2">
            <thead>
                <tr>
                    <th class="text-nowrap">EQUIPMENTS</th>
                  
                    <th class="text-nowrap">STATUS</th>
                    
                    
                </tr>
            </thead>

            <tbody>
 
             {{-- @foreach(array_combine($report_rented, $report_returned) as $month => $values) --}}
             @foreach($equipments as $equipment)
             <tr>  
                 
                <td>{{  $equipment->name }} </td>   
                 <td>  {{ $equipment->transmission }}  </td>
                 

             </tr>
             @endforeach
 
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
 
</div>
 


 

@endsection