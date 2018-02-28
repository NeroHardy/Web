<?php
 
class Paginator {
 
    private $konek;
    private $batas;
    private $halaman;
    private $habeit;
    private $semua;

    public function __construct($conn, $query) {
     
        $this->konek = $conn;
        $this->habeit = $query;
    
        $rs= $this->konek->prepare( $this->habeit );
        $rs->execute();
        $this->semua = $rs->rowCount();
        
    }

    public function getData( $limit = 10, $page = 1 ) {
     
        $this->batas = $limit;
        $this->halaman = $page;
    
        if ( $this->batas == 'all' ) {
            $query = $this->habeit;
        } else {
            $query = $this->habeit . " LIMIT " . ( ( $this->halaman - 1 ) * $this->batas ) . ", $this->batas";
        }
        $rs = $this->konek->prepare( $query );
        $rs->execute();
        while ( $row = $rs->fetch(PDO::FETCH_ASSOC) ) {
            $results[]  = $row;
        }
    
        $result         = new stdClass();
        $result->page   = $this->halaman;
        $result->limit  = $this->batas;
        $result->total  = $this->semua;
        $result->data   = $results;
    
        return $result;
    }

    public function createLinks( $links ) {
        if ( $this->batas == 'all' ) {
            return '';
        }
    
        $last       = ceil( $this->semua / $this->batas );
    
        $start      = ( ( $this->halaman - $links ) > 0 ) ? $this->halaman - $links : 1;
        $end        = ( ( $this->halaman + $links ) < $last ) ? $this->halaman + $links : $last;
    
        $html       = '<ul class="pagination">';
    
        $class      = ( $this->halaman == 1 ) ? "disabled" : "";
        $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->batas . '&page=1">&laquo;</a></li>';
        $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->batas . '&page=' . ( $this->halaman - 1 ) . '">&lsaquo;</a></li>';
    
        if ( $start > 1 ) {
            $html   .= '<li><a href="?limit=' . $this->batas . '&page=1">1</a></li>';
            $html   .= '<li><span class="titik">...</span></li>';
        }
    
        for ( $i = $start ; $i <= $end; $i++ ) {
            $class  = ( $this->halaman == $i ) ? "active" : "";
            $html   .= '<li class="' . $class . '"><a href="?limit=' . $this->batas . '&page=' . $i . '">' . $i . '</a></li>';
        }
    
        if ( $end < $last ) {
            $html   .= '<li class="disabled"><span>...</span></li>';
            $html   .= '<li><a href="?limit=' . $this->batas . '&page=' . $last . '">' . $last . '</a></li>';
        }
    
        $class      = ( $this->halaman == $last ) ? "disabled" : "";
        $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->batas . '&page=' . ( $this->halaman + 1 ) . '">&rsaquo;</a></li>';
        $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->batas . '&page=' . ( $last ) . '">&raquo;</a></li>';
    
        $html       .= '</ul>';
    
        return $html;
    }
 
}