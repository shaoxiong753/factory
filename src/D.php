<?php


namespace Factory;


use QL\QueryList;

class D implements InterfaceFactory
{
    public  function getCollectI($url)
    {
        // TODO: Implement getCollectI() method.
        $xh_link = QueryList::get($url);

        $data = $xh_link->find('.c_c_detail')->html();

        $list = QueryList::html($data)->rules(array(

            "img"=>['.c_c_d_da_img>a>img','src'],

            "title"=>['.c_c_d_da_img>a','title'],

            "content"=>['.c_c_d_da_data>a','title'],

            "author"=>['.c_c_d_da_author>a','title'],

        ))->range('.c_c_d_data1')->queryData(function ($item){

            return $item;

        });

        return   $list;

    }
}
