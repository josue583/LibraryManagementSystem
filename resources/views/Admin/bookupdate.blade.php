
{{-- @include('Admin.home') --}}
{{-- <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <form action="bookupdate{{$books[0]->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              
              <input type="hidden" name="id" class="form-control" id="bookName" value="{{ $books[0]->id}}">
              </div>
              <div class="mb-3">
                <label for="bookname" class="form-label">Book name</label>
                <input type="text" name="bookname" class="form-control" id="bookName" value="{{ $books[0]->bookname}}">
                </div>
              <div class="mb-3">
                <label for="book_id" class="form-label">Book code</label>
                <input type="text" name="bookcode" class="form-control" id="bookCode" value="{{ $books[0]->bookcode }}">
              </div>
              <div class="mb-3">
                  <label for="aurthor" class="form-label">Aurthor</label>
                  <input type="text" name="aurthor" class="form-control" id="aurthor" value="{{ $books[0]->aurthor}}">
                </div>
              <div class="mb-3">
                  <label for="publisher" class="form-label">Publisher</label>
                  <input type="text" name="publisher" class="form-control" id="publishername" value="{{ $books[0]->publisher}}">
                </div>
            
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
      </div>
      
    </div>
  </form>
  </div>
</div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
    </div>
  </div>  --}}

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <div class="container" style="text-align: center;box-shadow: 2px 2px 3px 5px">
      <div class="col col-md-6">
        <div class="row">
          <form action="/bookupdate/{{$books[0]->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              
              <input type="hidden" name="id" class="form-control" id="bookname" value="{{ $books[0]->id }}" placeholder="bookcode">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Book name</label>
              <input type="text" name="bookname" class="form-control" id="bookname" value="{{ $books[0]->bookname }}" placeholder="bookcode">
              
            </div>
            <div class="mb-3">
              <label for="bookcode" class="form-label">Book Code</label>
              <input type="text" name="bookcode" class="form-control" id="bookcode" value="{{ $books[0]->bookcode }}"   placeholder="bookcode">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">aurhor</label>
              <input type="text" name="aurthor" class="form-control" id="aurthor" value="{{ $books[0]->aurthor }}"  placeholder="aurthor">
              
            </div>
            <div class="mb-3">
              <label for="Aurthor" class="form-label">Publisher</label>
              <input type="text" name="publisher" class="form-control" id="aurthor"value="{{ $books[0]->publisher }}"  placeholder="aurthor">
              
            </div>
            
              
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>
    </div>
   
  </body>
  </html>

 