<?php


namespace Factory;


class M implements InterfaceFactory
{
    public  function getCollectI($url)
    {
        // TODO: Implement getCollectI() method.

        return "只能请求指定的网址";

    }
}
