@extends('layouts.main')
 
@section('page_title', 'Manage Items')

@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
     

<h2 class="intro-y fs-lg fw-medium mt-10">
    Users  
</h2>
<div class="grid columns-12 gap-6 mt-5">
    <div class="intro-y g-col-12 d-flex flex-wrap flex-sm-nowrap align-items-center mt-2">
       <a href="#">  <button class="btn btn-primary shadow-md me-2">Add New User</button></a>
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
    <div class="intro-y g-col-12 overflow-auto overflow-lg-visible">
        <table class="table table-report mt-n2">
            <thead>
                <tr>
                    <th class="text-nowrap">S/N</th>
                    <th class="text-nowrap"> NAME</th>
                 
                    <th class="text-center text-nowrap">ACTIONS</th>
                </tr>
            </thead>

            <tbody>
              
                @foreach($users  as $user)
                <tr class="intro-x">

                    <td class="w-40">
                        <div class="d-flex">                           
                            <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                <img style="width: 90%; height:90%" src="{{ Help::getDefaultUserImage() }}" alt="image" class="rounded-circle">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="" class="fw-medium text-nowrap"> {{ $user->name }} </a> 
                        <div class="text-gray-600 fs-xs text-nowrap mt-0.5">{{ $user->email }} </div>
                    </td>
 
                        </div>  
                    </td>

                    <td class="table-report__action w-56">
                        <div class="d-flex justify-content-center align-items-center">
                            <a  href="{{ route('renthistory', Help::hash($user->id)) }}" class="d-flex align-items-center me-3"> <i data-feather="check-square" class="w-4 h-4 me-1"></i> Rent History </a>                                  
                        </div>
                    </td>
                    
                </tr>
                @endforeach
                 
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y g-col-12 d-flex flex-wrap flex-sm-row flex-sm-nowrap align-items-center">
        <nav class="w-full w-sm-auto me-sm-auto">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                </li>
                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                <li class="page-item">
                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                </li>
            </ul>
        </nav>
        <select class="w-20 form-select box mt-3 mt-sm-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    <!-- END: Pagination -->
</div>
 

@endsection