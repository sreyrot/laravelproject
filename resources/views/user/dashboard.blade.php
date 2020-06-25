@extends('layouts.app')

@section('content')
<div class="container">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">FollowUP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Out Of FollowUp</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
        
        {{-- In Follow UP ////////////////////////////// --}}
        <table class="mt-3 table table-bordered">
          <tr>
           <th>Picture</th>
           <th>ID</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Class</th>
           <th>Description</th>                        
           <th>Action</th>
       </tr>
       @foreach($student as $item)
       @if ($item->activeFollowup==1)
           <tr>
             <td><img src="{{asset('image/'.$item->picture)}}" width="70px" class="rounded-circle" height="70px" /></td>
                 <td>{{$item->id}}</td>
                 <td>{{$item->firstname}}</td>
                 <td>{{$item->lastname}}</td>
                 <td>{{$item->class}}</td>
                 <td>{{$item->description}}</td>
               <td>
                <div class="row ml-5" >
                 <button style="border: none; ">  <a href="{{route('students.show',$item->id)}}" ><i class="fas fa-eye" style="color: green"></i></a> </button>
                 <button style="border: none; "><a href="{{route('archiveFollowup', $item->id)}}" style="color: red"><i class="fa fa-user-times"></i></a></button>
                </div>
              </td>
           </tr>
           @endif
        @endforeach
       </table>
     
        {{-- In Out Of Follow Up///////////////////////////// --}}
    </div>

    <div id="menu1" class="container tab-pane fade"><br>
      <table class="mt-3 table table-bordered">
        <tr>
         <th>Picture</th>
         <th>ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Class</th>
         <th>Description</th>                        
         <th>Action</th>
     </tr>
     @foreach($student as $item)
     @if ($item->activeFollowup==0)
         <tr>
           <td><img src="{{asset('image/'.$item->picture)}}" width="70px" class="rounded-circle" height="70px" /></td>
               <td>{{$item->id}}</td>
               <td>{{$item->firstname}}</td>
               <td>{{$item->lastname}}</td>
               <td>{{$item->class}}</td>
               <td>{{$item->description}}</td>
             <td>
              <div class="row ml-5" >
              </div>
            </td>
         </tr>
         @endif
      @endforeach
     </table>
    </div>
  </div>
</div>
@endsection