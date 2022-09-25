<div class="col col-md-8 cn" style="background-color: rgb(247, 252, 245);inline-size: 75%;position:;">
    @if (Session::get('success'))
  
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
    
    
    @endif
    @if (Session::get('successupdate'))
  
    <div class="alert alert-success" role="alert">
      {{ Session::get('successupdate') }}
    </div>
    
    
    @endif
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Book</button>

   
    <table class="table table-info table-hover" >
        <thead>
          <th>#</th>
          <th>Book name</th>
          <th>Book code</th>
          <th>Aurthor</th>
          <th>Publisher</th>
          <th>update</th>
          <th>Delete</th>
        </thead>
        {{-- <tbody class="alldata"> --}}
        @foreach ( $books as $book )
        <tr>
          <td>{{ $book['id'] }}</td>
          <td>{{ $book['bookname'] }}</td>
          <td>{{ $book['bookcode'] }}</td>
          <td>{{ $book['aurthor'] }}</td>
          <td>{{ $book['publisher'] }}</td>
          <td>
            <a href="edit_book/{{  $book->id }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="/Admin.bookupdate">
              edit
            </a>
          </td>
          <td>
            <a href="delete_data/{{ $book->id }}" class="btn btn-danger">
              Delete
            </a>
          </td>
        </tr>
        @endforeach
        
      </div>