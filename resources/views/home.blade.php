@extends('layouts.app')

@section('content')

<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home">Followup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Out Of Followup</a>
        </li>
       
      </ul>
    {{-- <div class="row justify-content-center"> --}}
    

        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <title>Student Followup</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <body>
             
                {{-- add data --}}
                <div class="container mt-5">
                    <a class="alert alert-success" data-toggle="modal" data-target="#myModal" href="{{route('students.create')}}">Add Follow Up Student</a>
   
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
                                      <label for="f\lname">Last Name</label>
                                      <input type="lastname" class="form-control" name="lname">
                                </div>
              
                                <div class="form-group">
                                  <label for="class">Class</label>
                                  <select class="browser-default custom-select" name="class">
                                      <option selected>Open this select menu</option>
                                      <option value="2020A">2020a</option>
                                      <option value="2020B">2020B</option>
                                      <option value="2020C">2020C</option>
                                      <option value="WEP-A">WEP-A</option>
                                      <option value="WEP-B">WEP-B</option>
                                      <option value="SNA">SNA</option>
                                    </select>
                                </div>
              
                                <div class="form-group">
                                  <label for="description">Description</label>
                                  <textarea name="description" class="form-control" id="" cols="10" rows="2"></textarea>
                                </div>
              
                               
                                
                                  <label for="picture">Picture</label>
                                  <div class="input-group">
                                      <div class="custom-file">
                                          <input type="text" class="form-control" name="picture" >
                                          <label class="custom-file-lable">Choosefile</label>
                                      </div>
                                  </div>

                            <button class="btn btn-success mt-4" type="submit">Add Student Followup</button>

                                </form>
                          </div>
                          
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                      <table class="mt-3 table table-bordered">
                       <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Class</th>
                        <th>Description</th>
                     
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    @foreach($student as $item)
                  
                        <tr>
                              <td>{{$item->id}}</td>
                              <td>{{$item->firstname}}</td>
                              <td>{{$item->lastname}}</td>
                              <td>{{$item->class}}</td>
                              <td>{{$item->description}}</td>
                            
                              <td>{{$item->picture}}</td>
                        
                           <td>
                            <a href="{{route('students.show',$item->id)}}">detail</a>
                               <a href="{{route('students.edit', $item->id)}}"> <i class="material-icons">edit</i></a> 
                               <form action="{{route('students.destroy',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button> <i class="material-icons" onclick="return confirm('Are you sure?')">delete</i> </button>
                              </form>
                           </td>
                        </tr>

                   
                    @endforeach
                    </table>
                </div>
            </body>
            
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <p>This is out of follow up</p>
            </div>
            
          </div>

         
                




      
        {{-- </div> --}}
    </div>
</div>

@endsection




