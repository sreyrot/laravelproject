<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        User Edit
                    </div>
                    <div class="card-body">
                        <form action="{{route('update', $users->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="first name">First Name</label>
                                <input type="text" value="{{$users->firstName}}" name="fname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last name">Last Name</label>
                                <input type="text" value="{{$users->lastName}}" name="lname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{$users->email}}" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" value="{{$users->password}}" name="pwd" class="form-control">
                            </div>
                            <div class="form-group">
                                <select required autocomplete="position" class="browser-default custom-select" name="role">
                                    <option selected>choose Role</option>
                                    <option value="1" {{ ($users->role == 1) ? 'selected' : '' }}>Admin</option>
                                    <option value="0" {{ ($users->role == 0) ? 'selected' : '' }}>Normal</option>
                                 </select>
                            </div>
                            <div class="form-group">
                                <select required autocomplete="position" class="browser-default custom-select" name="position">
                                    <option value="1" {{ ($users->position_id == 1) ? 'selected' : '' }}>Training Manager</option>
                                    <option value="2" {{ ($users->position_id == 2) ? 'selected' : '' }}>SNA Traning</option>
                                    <option value="3" {{ ($users->position_id == 3) ? 'selected' : '' }}>WEP Training</option>
                                    <option value="4" {{ ($users->position_id == 4) ? 'selected' : '' }}>Eductor</option>
                                   
                                  </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>