<div class="container">
    <form method='POST' action=<?= $actionUrl ?> data-toggle="validator" role="form" name='book'>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= isset($book) ? $book['title'] : '' ?>"> 
        </div>
        <div class="form-group">
            <label for="lang">Language:</label>
            <input type="text" class="form-control" id="lang" name="language" value="<?= isset($book) ? $book['language'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="text" class="form-control" id="date" name="date" value="<?= isset($book) ? $book['publication_date'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn_number" value="<?= isset($book) ? $book['isbn_number'] : '' ?>"> <hidden>pattern="(\d){3}-(\d){10}" >
        </div>
        <div class="form-group" id="author">
            <label for="author">Author:</label>   
            <div>
                <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <?php foreach($authors as $author): ?>
                        <li><a href="#"><?= $author['author'] ?></a></li>  
                    <?php endforeach; ?>
                    </ul>
                </div>
                <input type="text" id="authorText" class="form-control" aria-label="..." name="author" value="<?= isset($book) ? $book['author'] : '' ?>" > 
                </div>
            </div>        
        </div>

        <div class="form-group" id="genre">
        <label for="author">Genre:</label>   
        <div>
            <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                <?php foreach($genres as $genre): ?>
                    <li><a href="#"><?=$genre['genre'] ?></a></li>  
                <?php endforeach; ?>
                </ul>
            </div>
            <input type="text" id="genreText" class="form-control" aria-label="..." name="genre"  value="<?= isset($book) ? $book['genre'] : '' ?>" > 
            </div>
        </div>        
    </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
      </div>
      <input type="hidden" name="id" value="<?= isset($book) ? $book['id'] : '' ?>">
    </form>
</div>
