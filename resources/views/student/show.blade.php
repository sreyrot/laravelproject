<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        #delete {
            border: none; color: blue;
        } 
        .card{
            border: 1px solid grey; 
            border-radius: 10px;  
            border-left-color: coral;
            box-shadow: 2px 4px #999;
        }
        #userid{
            color:#09DFAB;
        }
        #write-comment{
            border: 1px solid grey; 
            border-radius: 10px;  
        }
        #editcomment{
            border: none;
        }
        #cmt{
            border: none;
        }
       
    </style>
   
</head>
<body>
    <div class="container mt-5">
       
         
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <img src="{{asset('image/'.$students->picture)}}" width="100px" class="rounded-circle" height="100px" />
                    </div>
                    <div class="col-4"></div>
                </div>
              
                <table  class="table table-border">
                    <tr>
                      
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Class</th>
                        <th>Description</th>
                        <th>Totur</th>
                    </tr>
                  
                        <tr>
                        
                              <td>{{$students->id}}</td>
                              <td>{{$students->firstname}}</td>
                              <td>{{$students->lastname}}</td>
                              <td>{{$students->class}}</td>
                              <td>{{$students->description}}</td>
                              <td>{{$students->user->firstName}}</td>
                            </tr>
                           </table>
                     
                    {{-- //// below is for comment /// --}}
                    <form action="{{route('addcomment', $students->id)}}" method="post">
                        @csrf
                     
                        <textarea  name="cmt" id="write-comment"  cols="150" rows="3" placeholder="Write comment"></textarea>
                        <button type="submit" class="btn btn-primary">Post</button>
                        <a href="../admin/dashboard" class="btn btn-danger float-right">Back</a>
                    </form>
             
                @foreach ($students->comments as $item)
                      
                        <div class="row mt-3">
                            <div class="col-2">
                                <div class="row ml-5">
                                 {{-- edit on comment --}}
                                 <a href=""  type="button" class="edit" style="border: none; color: blue;"  data-toggle="modal"  data-target="#editcomment{{$item->id}}"><i class="fas fa-edit"></i></a>
                               
                            <!-- The Modal -->
                            <div class="modal fade" id="editcomment{{$item->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                
                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Edit Comment</h4>
                                    <button type="button"  class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  
                                  <!-- Modal body -->
                                  <div class="modal-body"  >
                                      <form action="{{route('updatecomment', $item->id)}}" id="editform " method="post">
                                          @csrf
                                          @method('put')
                                            <textarea name="comment" id="cmt" cols="50" rows="3" value="">{{$item->comment}}</textarea>
                                          <br>
                                          <hr>
                                          <button type="submit" class="btn btn-outline-success">Save Change</button>
                                      </form>
                                  </div>
                                  
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>

                           <form action="{{route('delete', $item->id)}}" method="post">
                                @csrf
                                @method('delete')
                                            
                                    <button id="delete" onclick="return confirm('Are you sure?')" > <i class="fas fa-trash"></i> </button>
                            </form>

                        </div>
                            </div>
                            <div class="col-8">
                              <div class="card ">
                                 <p class="ml-3">{{$item->comment}}</p> 
                              </div>
                            </div>

                            <div class="col-2">
                                <div class="row">
                                    <div class="id">
                                    <p id="userid" >User ID    </p> 
                                    {{$item->user_id}}
                                    |
                                </div>
                              |
                                  <div class="username">
                                    <p id="userid" class="ml-2">User Name: </p> 
                                   <span  class="ml-2"> {{$item->user->firstName}}</span>
                                </div>
                                </div>
                            </div>
                        </div>
            @endforeach
       
           

</body>
</html>