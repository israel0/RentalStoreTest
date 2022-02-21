
@extends('layouts.main')
 
@section('page_title', 'Manage Reports')

@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
     

<h2 class="intro-y fs-lg fw-medium mt-10">
    Book Monthly Reports
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
                    <th class="text-nowrap">MONTH OF</th>
                  
                    <th class="text-nowrap">RENTED</th>
                   
                    
                </tr>
            </thead>

            <tbody>
 
             {{-- @foreach(array_combine($report_rented, $report_returned) as $month => $values) --}}
               @foreach($book_report_rented as $month => $values)
                <tr>  
                    
                   <td> {{ \Carbon\Carbon::parse($month)->format('F Y') }} </td>   

                   @foreach($book_itemid_rented as $item_id)
                          <td>  {{ $book_report_rented[$month][$item_id]['count'] ?? '0' }}  </td>
                   @endforeach 

                </tr>
                @endforeach
 
            </tbody>
        </table>
    </div>

    <div class="intro-y g-col-6 overflow-auto overflow-lg-visible">
        <table class="table table-report mt-n2">
            <thead>
                <tr>
                    <th class="text-nowrap">MONTH OF</th>
                  
                    <th class="text-nowrap">RETURNED</th>
                    
                    
                </tr>
            </thead>

            <tbody>
 
             {{-- @foreach(array_combine($report_rented, $report_returned) as $month => $values) --}}
               @foreach($book_report_returned as $month => $values)
                <tr>  
                    
                   <td> {{ \Carbon\Carbon::parse($month)->format('F Y') }} </td>   

                   @foreach($book_itemid_returned as $item_id)
                          <td>  {{ $book_report_returned[$month][$item_id]['count'] ?? '0' }}  </td>
                   @endforeach 

                </tr>
                @endforeach
 
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
 
</div>
 




<h2 class="intro-y fs-lg fw-medium mt-10">
    Equipments Monthly Reports
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
                    <th class="text-nowrap">MONTH OF</th>
                  
                    <th class="text-nowrap">RENTED</th>
                   
                    
                </tr>
            </thead>

            <tbody>
 
             {{-- @foreach(array_combine($report_rented, $report_returned) as $month => $values) --}}
               @foreach($equipment_report_rented as $month => $values)
                <tr>  
                    
                   <td> {{ \Carbon\Carbon::parse($month)->format('F Y') }} </td>   

                   @foreach($equipment_itemid_rented as $item_id)
                          <td>  {{ $equipment_report_rented[$month][$item_id]['count'] ?? '0' }}  </td>
                   @endforeach 

                </tr>
                @endforeach
 
            </tbody>
        </table>
    </div>

    <div class="intro-y g-col-6 overflow-auto overflow-lg-visible">
        <table class="table table-report mt-n2">
            <thead>
                <tr>
                    <th class="text-nowrap">MONTH OF</th>
                  
                    <th class="text-nowrap">RETURNED</th>
                    
                    
                </tr>
            </thead>

            <tbody>
 
             {{-- @foreach(array_combine($report_rented, $report_returned) as $month => $values) --}}
               @foreach($equipment_report_returned as $month => $values)
                <tr>  
                    
                   <td> {{ \Carbon\Carbon::parse($month)->format('F Y') }} </td>   

                   @foreach($equipment_itemid_returned as $item_id)
                          <td>  {{ $equipment_report_returned[$month][$item_id]['count'] ?? '0' }}  </td>
                   @endforeach 

                </tr>
                @endforeach
 
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
     
</div>
 

@endsection