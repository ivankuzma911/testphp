<?php

class Books extends ParentController {    
    
    public $models = array('Book', 'Genre', 'Author');
   
    public function __construct() {     
        parent::__construct();
        $this->view = new View('Books');           
    }    

    public function main() {      
        $page = $this->request->get('page') ? $this->request->get('page') : 1;
        $search = $this->request->get('search') ? $this->request->get('search') : '';          
        
        $this->view->set(array(
            'books' => $this->Book->getBooks(array(
               'page' => $page,
               'search' => $search              
            )),
            'pagination' => Paginator::getPagination(
                $this->Book->getTotalBooks(),
                BOOKS_PER_PAGE,
                $page,
                '/books/main'
            )
        ));
        $this->view->render('main');
    }

    public function create() {  
        if(Utilities::isPost()) {  
            $result = $this->Book->save(                
                        $this->request->post(),
                        $this->Author->getIdByName($this->request->post('author')),
                        $this->Genre->getIdByName($this->request->post('genre'))
            );
            if($result) {
                Utilities::redirect("/");
            }
        }
        
        $this->view->set(array(
            'genres' => $this->Genre->getAll(),
            'authors'=> $this->Author->getAll(),
            'actionUrl' => '/books/create'
        ));

        $this->view->render('book');
    }

    public function edit(){
        if(Utilities::isPost()) {  
            $result = $this->Book->updateById(                
                        $this->request->post(),
                        $this->Author->getIdByName($this->request->post('author')),
                        $this->Genre->getIdByName($this->request->post('genre'))
            );
           
            if($result) {
                return Utilities::redirect("/");
            }
        }

        $this->view->set(array(
            'book' => $this->Book->getBookById($this->request->get('bookId')),
            'genres' => $this->Genre->getAll(),
            'authors'=> $this->Author->getAll(),
            'actionUrl' => '/books/edit'
        ));

        $this->view->render('book');
    }
}