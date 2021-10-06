<?php

class Book {
	private $_no;
	private $_title;
	private $_author;
	
	public function __construct($no, $title, $author){
		$this->_no = $no;
		$this->_title = $title;
		$this->_author = $author;
	}
	
	public function getNo(){
		return $this->_no;		
	}	
		
	public function getTitle(){
		return $this->_title;
	}
	
	public function getAuthor(){
		return $this->_author;
	}
}

