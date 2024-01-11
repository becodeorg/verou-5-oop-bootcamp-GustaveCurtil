<?php
/* 
We are preparing three types of content for a website:
Articles
Ads
Vacancies

All of those have a title and text. When showing the title, 
they are modified as follows: articles remain as they are, 
ads are shown in all caps and vacancies are appended with " - apply now!". 
The original title should still be retrievable, 
so no modification is permanent.

Have an array with two articles, one ad and one vacancy. 
Use this array to show all content types (title + text).

Bonus: an article can be marked as "breaking news". 
If this is the case, the title is prepended with "BREAKING: ".
Extra bonus: display all the content with the appropriate html tags.
*/
class Content
{
    public $title;
    public $text;
    public $type;
    public $breakingNews;

    public function __construct(string $type, string $title, string $text, bool $breakingNews = false)
    {
        $this->type = $type;
        $this->title = $title;
        $this->text = $text;
        $this->breakingNews = $breakingNews;
    }

    public function getTitle()
    {
        if ($this->type === "Article" && $this->breakingNews == true) {
            return "BREAKING: " . $this->title;
        } if ($this->type === "Ad") {
            return strtoupper($this->title);
        } if ($this->type === "Vacancy") {
            return $this->title . " - apply now!";
        } else {
            return $this->title;
        }
    }

    public function getText()
    {
        return $this->text;
    }
}



