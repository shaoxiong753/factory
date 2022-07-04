<?php
namespace   Factory

class Demo
{

	private const HX = "https://www.hongxiu.com";

   	private const QD = "https://www.qidian.com";

    	private const TD = "https://www.tadu.com/store/103-a-0-5-a-20-p-1-98";

    	private const WY = "https://b.faloo.com/Re_45_1.html";

	public static function getCollectF($url){
        		switch ($url){

            		case self::HX:

                			$obj = new A();

                		break;

            		case self::QD:

                			$obj = new B();

               		 break;

            		case self::TD:

                			$obj = new C();

                		break;

            		case self::WY:

                			$obj = new D();

                		break;

            		default:

                		return  new M();
        }
        return $obj;
    }

}