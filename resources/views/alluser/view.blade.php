<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
   
      
   
        <div class="jumbotron">
              
               <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $item)
                     <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->firstName}}</td>
                        <td>{{$item->lastName}}</td>
                        <td>{{$item->email}}</td>
                        @if ($item->role == 1)
                        <td>Admin</td>
                        @else
                            <td>Normal</td>
                        @endif
                     
                        <td>{{$item->position->name}}</td>
                        <td>
                            <div class="row ml-5">
                               <a href="{{route('viewformedituser',$item->id)}}"><i class="fas fa-eye"></i></a> 
                               <form action="{{route('deleteuser',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button style="border: none; color: blue;"> <i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i> </button>
                              </form></div>
                           </td>
                    </tr>
                    @endforeach
                </table>
                <a href="../admin/dashboard" class="btn btn-danger">Back</a>
            </div>
          
           
   
</body>
</html>