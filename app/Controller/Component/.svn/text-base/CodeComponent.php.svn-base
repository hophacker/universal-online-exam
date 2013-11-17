<?php
class CodeComponent extends Component {
	protected static $key='#';//加密的密钥
	/**
	 * 加密操作
	 * @param string $word 需要加密的字符
	 */
	public static function encode($word){
		if(empty($word)) return null;
		$word=base64_encode($word);
		$word=CodeComponent::$key.$word.CodeComponent::$key;
		$word=base64_encode($word);
		return $word;
	}
	/**
	 * 解密操作
	 * @param string $word
	 */
	public static function decode($word){
		if(empty($word)) return null;
		$word=base64_decode($word);
		$len=strlen(CodeComponent::$key);
		$word=substr($word,$len,strlen($word)-$len*2);
		return base64_decode($word);
	}
}
