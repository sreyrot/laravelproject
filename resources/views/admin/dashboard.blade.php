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
        <div class="container mt-5">
          <a  data-toggle="modal" data-target="#myModal" href="{{route('students.create')}}"><i class="fa fa-user-plus" style="background: purple; padding: 20px; border-radius: 35px; color: #fff;" aria-hidden="true"></i></a>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title text-center">Add Student Followup</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <form action="{{route('students.store')}}" enctype="multipart/form-data" method="post">
                      {{csrf_field()}}
    
                        <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="firstname" class="form-control" name="fname" >
                      </div>
    
                        <div class="form-group">
                            <label for="flname">Last Name</label>
                            <input type="lastname" class="form-control" name="lname">
                      </div>
    
                      <div class="form-group">
                        <label for="class">Class</label>
                       
                          <input type="class" class="form-control" name="class">
                      </div>
    
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="" cols="10" rows="2"></textarea>
                      </div>
                      {{-- // add totur as select option --}}
                      <div class="form-group">
                        <select class="browser-default custom-select" >
                          <option selected>Open this select menu</option>
                          @foreach ($user as $item)
                            <option name="tutor" value="{{$item->id}}">{{$item->firstName}}</option>
                          @endforeach
                        </select>
                        </div>

                 
                      
                        <label for="picture">Picture</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="form-control" name="picture" >
                                <label class="custom-file-lable"></label>
                            </div>
                        </div>

                  <button class="btn btn-success mt-4" type="submit">Save Add</button>

                      </form>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>

       </div>
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
                   <button style="border: none; color: blue;">  <a href="{{route('students.edit', $item->id)}}"> <i class="fas fa-edit"></i></a> </button>
                     <form action="{{route('students.destroy',$item->id)}}" method="post">
                       @method('delete')
                       @csrf
                     
                       <button style="border: none; color: blue;"><i class='fas fa-trash-alt' style="color: black"  onclick="return confirm('Are you sure?')"></i> </button>
                     </form>
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