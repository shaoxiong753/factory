<?php

namespace Factory;


use QL\QueryList;

class B implements InterfaceFactory
{
    public  function getCollectI($url)
    {

        // TODO: Implement getUrl() method.

        $xh_link = QueryList::get($url);

        $data = $xh_link->find('.center-book-list>ul')->html();

        $list = QueryList::html($data)->rules(array(

            "img"=>['.book-img>a>img','src'],

            "title"=>['.book-info>h3>a','title'],

            "content"=>['.book-info>p','text'],

            "author"=>['.book-info>.state-box>a','text'],

            "type"=>['.book-info>.state-box>i','text']

        ))->range('li')->queryData(function ($item){

            return $item;

        });

        return $list;
    }
}
