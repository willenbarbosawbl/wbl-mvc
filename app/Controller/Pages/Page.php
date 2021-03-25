<?php
    namespace App\Controller\Pages;
    use \App\Utils\View;

    class Page{

        private static function getHeader(){
            return View::render('header');
        }

        private static function getFooter(){
            return View::render('footer');
        }

        public static function getPage($title, $content){
            return View::render('pages',[
                "title"=>$title,
                "header"=>self::getHeader(),
                "content"=>$content,
                "footer"=>self::getFooter()
            ]);
        }
    }