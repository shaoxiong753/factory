<?php

namespace Factory\FactoryUrl;

use QL\QueryList;

class C implements InterfaceFactory
{
    public  function getCollectI($url)
    {
        // TODO: Implement getUrl() method.

        $xh_link = QueryList::get($url);

        $data = $xh_link->find('.results>ul')->html();

        $list = QueryList::html($data)->rules(array(

            "img"=>['.bookImg>img','src'],

            "title"=>['.rtList>.bookNm','text'],

            "content"=>['.rtList>.bookIntro','text'],

            "author"=>['.rtList>div>.authorNm','text'],

            "type"=>['.rtList>div>.classifyLt','text']

        ))->range('li')->queryData(function ($item){

            return $item;

        });

        return $list;
    }
}
