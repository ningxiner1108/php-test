<?php
//代理抽象接口
interface shop
{
	public function buy($title);
}

class CDShop implements shop
{
	public function buy($title)
	{
		echo "购买成功，这是你的 <<{$title}>>唱片" . PHP_EOL;
	}
}

class Proxy implements shop
{
	public function buy($title)
	{
		$this->go();
		$CDShop = new CDShop();
		$CDShop->buy($title);
	}

	public function go()
	{
		echo "跑去香港代购" . PHP_EOL; 
	}
}

class Client
{
	public static function shopping($goods)
	{
		$proxy = new Proxy();
		$proxy->buy($goods);
	}
}

Client::shopping("醒着做梦");
?>
