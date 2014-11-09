<?php 
 
class kirbytextExtended extends kirbytext {
  
  function __construct($text, $markdown=true) {
    
    parent::__construct($text, $markdown);
    
 
 
    // define custom tags
    $this->addTags('myyoutube');
    
    // define custom attributes
       
    

                
  }  
 

  
  // define a function for each new tag you specify  
  
function myyoutube($params) {

    $url   = @$params['myyoutube'];
    $class = @$params['class'];
    $id    = false;
    
    // http://www.youtube.com/embed/d9NF2edxy-M
    if(@preg_match('!youtube.com\/embed\/([a-z0-9_-]+)!i', $url, $array)) {
      $id = @$array[1];      
    // http://www.youtube.com/watch?feature=player_embedded&v=d9NF2edxy-M#!
    } elseif(@preg_match('!v=([a-z0-9_-]+)!i', $url, $array)) {
      $id = @$array[1];
    // http://youtu.be/d9NF2edxy-M
    } elseif(@preg_match('!youtu.be\/([a-z0-9_-]+)!i', $url, $array)) {
      $id = @$array[1];
    }
        
    // no id no result!    
    if(empty($id)) return false;
    
    // build the embed url for the iframe    
    $url = 'http://www.youtube.com/embed/' . $id;
    
    // default width and height if no custom values are set
    if(empty($params['width']))  $params['width']  = c::get('kirbytext.video.width');
    if(empty($params['height'])) $params['height'] = c::get('kirbytext.video.height');
    
    // add a classname to the iframe
    if(!empty($class)) $class = ' class="' . $class . '"';

    return '<div class="video-container screenshot"><iframe' . $class . ' width="' . $params['width'] . '" height="' . $params['height'] . '" src="' . $url . '" frameborder="0" allowfullscreen></iframe></div>';
  
  }
  

  
}
 
?>