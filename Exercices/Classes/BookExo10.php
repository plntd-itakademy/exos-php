<?php
class Book
{
    private $id;
    private $title;
    private $author;

    /**
     * Get the ID of the book.
     *
     * @return int The ID of the book.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the title of the book.
     *
     * @param  mixed $value
     * @return void
     */
    public function setId(int $value): void
    {
        $this->id = $value;
    }

    /**
     * Get the title of the book.
     *
     * @return int The title of the book.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the title of the book.
     *
     * @param  mixed $value
     * @return void
     */
    public function setTitle(string $value): void
    {
        $this->title = $value;
    }

    /**
     * Get the author of the book.
     *
     * @return int The author of the book.
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the author of the book.
     *
     * @param  mixed $value
     * @return void
     */
    public function setAuthor(string $value): void
    {
        $this->author = $value;
    }
}
