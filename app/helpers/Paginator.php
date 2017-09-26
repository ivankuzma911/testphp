<?php

class Paginator {

    public static function getPagination($totalBooks, $booksPerPage, $page = 1, $currentUri) {
        
        $totalPages = ceil($totalBooks / $booksPerPage);
        $nextPages = array();
        $prevPages = array();
        $currentPage = self::linkElement($page, $currentUri, $page , 'active');
        $nextPage = self::linkElement($page + 1, $currentUri, '>');
        $prevPage = self::linkElement($page - 1, $currentUri, '<');

        $nextPagesLimit = $page + 5 < $totalPages ?  $page + 5 : $totalPages;        
        for ($i = $page + 1; $i <= $nextPagesLimit; $i++) {         
            array_push($nextPages, self::linkElement($i, $currentUri, $i));
        }

        $prevPagesLimit = $page - 5 > 1 ? $page - 5 : 1;
        for ($i = $prevPagesLimit; $i <= $page - 1; $i++) {         
            array_push($prevPages, self::linkElement($i, $currentUri, $i));
        }
        
              
        return implode('', array(
            $prevPage, implode('',$prevPages), $currentPage, implode('', $nextPages), $nextPage
        ));
    }

    public static function linkElement($page, $currentUri, $element , $class = '') { 
        return "<li class='$class'><a href=$currentUri?page=$page". ">$element</a></li>";
    }
}



?>