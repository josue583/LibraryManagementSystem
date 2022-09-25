<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i> --}}
{{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/"> --}}
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"></svg>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
  
  
  
    {{-- @include('Admin.navbar'); --}}

    @include('Admin.navbar')
    <div class="contai" style="background-color: rgb(247, 252, 245); display:flex; height:100vh;justify-content: space-between">
      
      {{-- <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center" 
      style="background-color: rgb(10, 10, 10); 
      min-hieght:90%; 
      min-width:20%
        ">
        <a class="p-1 rounded text-light text-decoration-none" href="#simple-list-item-1">Dashboard</a>
        <a class="p-1 rounded text-light text-decoration-none" href="#simple-list-item-3">Books</a>
        <a class="p-1 rounded text-light text-decoration-none" href="#simple-list-item-4">Category</a>
        <a class="p-1 rounded text-light text-decoration-none" href="#simple-list-item-5"></a>
      </div>  
        --}}
        {{-- <div class="col-2" style="background-color: coral; display:flex; justify-content:flex-start"> --}}
        
       @include('Admin.sidebar')
          
          @include('Admin.list')
    {{-- </div> --}}
    <br><br>

    <!-- Button trigger modal -->

  <!--register book Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register Book</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="/addbook" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="bookname" class="form-label">Book name</label>
                  <input type="text" name="bookname" class="form-control" id="bookName" placeholder="input book name">
                  </div>
                <div class="mb-3">
                  <label for="book_id" class="form-label">Book code</label>
                  <input type="text" name="bookcode" class="form-control" id="bookCode" placeholder="Book code">
                </div>
                <div class="mb-3">
                    <label for="aurthor" class="form-label">Aurthor</label>
                    <input type="text" name="aurthor" class="form-control" id="aurthor" placeholder="inter book writer">
                  </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" name="publisher" class="form-control" id="publishername" placeholder="publisher name">
                  </div>
              

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  {{-- update books--}}
     
 {{-- @include('Admin.bookupdate') --}}
{{-- display registed books --}}

{{-- </tbody>
<tbody id="content" class="searchdata"></tbody>
</table> --}}
{{-- @include('Admin.pagination'); --}}


  {{-- end registered book table --}}
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="jquery-3.6.0.min.js"></script>



{{-- <script type="text/javascript">
  $('#search').on('keyup',function(){
    
    $value=$(this).val();
    if ($value){
         $('.alldata').hide();
         $('.searchdata').show();
        }
        else{
          $('.alldata').show();
         $('.searchdata').hide();
        }
    $.ajax({
           type:'Get';
           url:'{{ URL::to('search') }}';
           data:{'search':$value};

           success:function(data){
            console.log(data);
            $('#content').html(data);
           }
    });
  })
</script> --}}
    </div>
</body>
</html>