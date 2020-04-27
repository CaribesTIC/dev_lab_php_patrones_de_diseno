<?php
// PrettyPrint.php
class PrettyPrint
{
    protected $book = null;

    public function __construct(stdClass $book_object)
    {
        $this->book = $book_object;
    }

    public function getAuthor()
    {
        return $this->book->author_first_name . " " . $this->book->author_last_name;
    }

    public function getAuthorSortable()
    {
        return $this->book->author_last_name . ", " . $this->book->author_first_name;
    }
}




