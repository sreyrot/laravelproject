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
           

</body>
</html>