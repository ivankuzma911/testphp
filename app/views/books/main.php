
<div class="container">  
<div>
  <div id ='search'>
    <form action="/books/main" class="form-inline">  
      <div class="form-group">        
        <input type="text" name="search" placeholder="Search" class="form-control" width="100px"> 
        <input type="submit" value="Go" class="form-control">
      </div>
    </form> 
  </div>
  <div id='add'>
    <a href='/books/create'>
      <span class="glyphicon glyphicon-plus"></span>
    </a>
  </div>
</div>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Language</th>
        <th>Date</th>
        <th>ISBN</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($books as $book): ?>       
      <tr>
        <td class='title'><?= $book['title'] ?> 
          <a href='/books/edit?bookId=<?= $book['id'] ?>' >
            <span class="glyphicon glyphicon-edit edit"></span>
          </a>
        </td>
        <td><?= $book['author'] ?></td>
        <td><?= $book['genre'] ?></td>
        <td><?= $book['language'] ?></td>
        <td><?= $book['publication_date'] ?></td>
        <td><?= $book['isbn_number'] ?></td>
        <td class="hidden_images"><img class="hidden_images" src="/<?= $book['image_path'] ?>"></td>
      </tr>   
       
    <?php endforeach; ?>   
    </tbody>
  </table>
  <div id="pagination">
   <ul class="pagination">
    <?= $pagination ?>
  </ul>
  </div>

</div>
