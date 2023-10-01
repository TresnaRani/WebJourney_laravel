<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataAdd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <a href="{{url('show-data')}}" class="btn btn-success">ShowData</a>
     <br><br>
    <form action="{{url('/store-data')}}" method="post">
        @csrf
   
     <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" placeholder="title">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror

     </div>
     <div class="form-group mt-3">
        <label for="">Description:</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
     
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
     <div class="form-group mt-3">
        <label for="">CreateDate:</label>
        <input type="date" class="form-control" placeholder="setdate">
  
    </div>
     <br>
     <button value="submit" class="btn btn-success">Create</button>
     </form>
    </div>
    </div>
  </div>
    



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


</body>
</html>