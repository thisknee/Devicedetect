<?php
/**
 * 
 * Device details detection using browscap
 * 
 *  [browser_name_regex] => ¡ì^mozilla/5\.0.*\(iphone.*cpu iphone os 8.1.* like mac os x.*\).*applewebkit/.*\(.*khtml, like gecko.*\).*version/8\.0.*safari/.*$¡ì
    [browser_name_pattern] => Mozilla/5.0*(iPhone*CPU iPhone OS 8?1* like Mac OS X*)*AppleWebKit/*(*KHTML, like Gecko*)*Version/8.0*Safari/*
    [parent] => Mobile Safari 8.0
    [platform_version] => 8.1
    [device_name] => iPhone
    [device_type] => Mobile Phone
    [device_code_name] => iPhone
    [comment] => Mobile Safari 8.0
    [browser] => Safari
    [browser_type] => Browser
    [browser_bits] => 32
    [browser_maker] => Apple Inc
    [version] => 8.0
    [majorver] => 8
    [platform] => iOS
    [platform_description] => iPod, iPhone & iPad
    [platform_bits] => 32
    [platform_maker] => Apple Inc
    [frames] => 1
    [iframes] => 1
    [tables] => 1
    [cookies] => 1
    [javascript] => 1
    [javaapplets] => 1
    [ismobiledevice] => 1
    [cssversion] => 3
    [device_maker] => Apple Inc
    [device_pointing_method] => touchscreen
    [device_brand_name] => Apple
    [renderingengine_name] => WebKit
    [renderingengine_description] => For Google Chrome, iOS (including both mobile Safari, WebViews within third-party apps, and web clips), Safari, Arora, Midori, OmniWeb, Shiira, iCab since version 4, Web, SRWare Iron, Rekonq, and in Maxthon 3.
    [renderingengine_maker] => Apple Inc
    [browser_modus] => unknown
    [minorver] => 0
    [alpha] => 
    [beta] => 
    [win16] => 
    [win32] => 
    [win64] => 
    [backgroundsounds] => 
    [vbscript] => 
    [activexcontrols] => 
    [istablet] => 
    [issyndicationreader] => 
    [crawler] => 
    [aolversion] => 0
    [renderingengine_version] => unknown
 * 
 * 
 * @author eon_x
 *
 */
class Devicedetails {
	
	/**
	 * 
	 * @var unknown
	 */
	protected $values = array();
	
	/**
	 * default constructor
	 */
	function __construct()
	{
		$this->values = get_browser(null, true);
	}
	
	/**
	 * Getter
	 * @param unknown $key
	 * @return unknown
	 */
	public function __get( $key )
    {
        return $this->values[ $key ];
    }
    
    /**
     * Setter
     * @param unknown $key
     * @param unknown $value
     */
    public function __set( $key, $value )
    {
        $this->values[ $key ] = $value;
    }
}