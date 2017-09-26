<?php

class Book extends ParentModel {  

    public function __construct() {
        parent::__construct();       
    }
    
    public function getBooks($params) {       
        $selectStatement = array('b.id', 'date(b.publication_date) AS publication_date', 
                                  'b.title', 'b.language', 'g.genre',                                
                                  'a.author', 'b.isbn_number', 'b.image_path');        
        
        return $this->db->query($this->queryBuilder
            ->select($selectStatement)
            ->from('books AS b')
            ->join('inner', 'genres AS g')
            ->on('g.id = b.genre_id')
            ->join('inner', 'authors AS a')
            ->on('a.id = b.author_id') 
            ->where('')
            ->like(array(
                'b.title',
                "'%" . $params['search'] . "%'"
            ))
            ->limit(BOOKS_PER_PAGE)
            ->offset($params['page'] * BOOKS_PER_PAGE - BOOKS_PER_PAGE)
            ->value()
        );
    }

    public function getTotalBooks() {
        return $this->db->query($this->queryBuilder
            ->select('count(*) AS count')
            ->from('books')        
            ->value()
        )[0]['count'];
    }

    public function save($book, $authorId, $genreId) {     
        $this->db->query($this->queryBuilder
            ->insert('books')
            ->columns(array('title', 'language', 'publication_date',
                            'isbn_number', 'author_id', 'genre_id'))        
            ->values(array($book['title'], $book['language'], $book['date'],
                           $book['isbn_number'], $authorId, $genreId))
            ->value()
        );
        
        return true;        
    }

    public function getBookById($id){
        $selectStatement = array('b.id', 'date(b.publication_date) AS publication_date', 
                                  'b.title', 'b.language', 'g.genre',                                
                                  'a.author', 'b.isbn_number');        
        
        return $this->db->query($this->queryBuilder
            ->select($selectStatement)
            ->from('books AS b')
            ->join('inner', 'genres AS g')
            ->on('g.id = b.genre_id')
            ->join('inner', 'authors AS a')
            ->on('a.id = b.author_id') 
            ->where('b.id =' . $id)
            ->limit(1)            
            ->value()
        )[0];
    }

    public function updateById($book, $authorId, $genreId){
        $result = $this->db->query($this->queryBuilder
            ->update('books')
            ->set(array(
                "title = '" . $book['title'] . "'",
                "author_id = '" . $authorId . "'",
                "genre_id = '" . $genreId . "'",
                "language = '" . $book['language'] . "'",
                "publication_date = '" . $book['date'] . "'",
                "isbn_number = '" . $book['isbn_number'] . "'"
            ))
            ->where('id = ' . $book['id'])
            ->value()
        );        
        
        return true;  
    }

}

?>