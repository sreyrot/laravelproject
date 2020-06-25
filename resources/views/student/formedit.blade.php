

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Edit</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="card">
            <div class="card-header text-center">Edit Student Followup</div>
            <div class="card-body">
              <form action="{{route('students.update',$students->id)}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                @csrf
                @method('put')

                <div class="row">

                  <div class="col-6">

                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="firstname" value="{{$students->firstname}}" class="form-control" name="fname" >
                    </div>
                  
                      <div class="form-group">
                          <label for="f\lname">Last Name</label>
                          <input type="lastname" value="{{$students->lastname}}" class="form-control" name="lname">
                    </div>

                  </div>

                  <div class="col-6">

                      <div class="form-group">
                        <label for="class">Class</label>
                        <input type="class" value="{{$students->class}}" class="form-control" name="class">
                      </div>
                      <label for="picture">Picture</label>
                      <div class="input-group">
                          <div class="custom-file">
                            <label class="custom-file-lable"></label>
                            <input type="file" value="{{$students->picture}}" class="form-control" name="picture" >
                          </div>
                      </div>

                  </div>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description"  class="form-control" id="" cols="10" rows="2">{{$students->description}}</textarea>
                </div>
              
                <div class="form-group">
                  <select required autocomplete="position" class="browser-default custom-select" name="tutor">
                    <option selected>choose Role</option>
                    <option value="1" {{ ($students->user_id == 1) ? 'selected' : '' }}>Admin</option>
                    <option value="0" {{ ($students->user_id == 2) ? 'selected' : '' }}>Normal</option>
                 </select>
                </div>
                 
              
              <button class="btn btn-success mt-4" type="submit">Update Sutdent Followup</button>
              
                </form>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
</body>
</html>



