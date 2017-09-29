<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 29/09/17
 * Time: 17:01
 */
namespace wild;

class citation
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $author;/**
     * @var string
     */
    private $chapter;/**
     * @var string
     */
    private $content;/**
     * @var string
     */
    private $date;/**
     * @var string
     */
    private $image;

    /**
     * citation constructor.
     * @param string $author
     * @param string $chapter
     * @param string $content
     * @param string $date
     * @param string $image
     */
    public function __construct($author, $chapter, $content, $date, $image)
    {
        $this->author = $author;
        $this->chapter = $chapter;
        $this->content = $content;
        $this->date = $date;
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return citation
     */
    public function setAuthor(string $author): citation
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getChapter(): string
    {
        return $this->chapter;
    }

    /**
     * @param string $chapter
     * @return citation
     */
    public function setChapter(string $chapter): citation
    {
        $this->chapter = $chapter;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return citation
     */
    public function setContent(string $content): citation
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return citation
     */
    public function setDate(string $date): citation
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return citation
     */
    public function setImage(string $image): citation
    {
        $this->image = $image;
        return $this;
    }


}