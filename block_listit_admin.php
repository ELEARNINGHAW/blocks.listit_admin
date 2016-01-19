<?php //$Id: block_listit_admin.php,v 1.8.22.7 2010/11/19 16:47:13 www Exp 

class block_listit_admin extends block_base 
{ 
	function init() 
	{
	         $this->title = get_string('pluginname','block_listit_admin') ;
	}	

	function get_content() 
	{  
		global $USER;    
        global $COURSE;    
    
        $context = context_module::instance($COURSE->id);

        if ( has_capability( 'moodle/course:update', $context, $USER->id, false )  ) 
        { 
					 
			$srvpath = "http://lernserver.el.haw-hamburg.de/haw/listit/index2.php"    // Live-Server
			//$srvpath = "http://localhost/haw/listit/index2.php"                     // Dev-Server 

			."?n1=" .base64_encode( rawurlencode( $USER->firstname	) )
			."&n2=" .base64_encode( rawurlencode( $USER->lastname	) )
			."&e1=" .base64_encode( rawurlencode( $USER->email 		) )
			."&u1=" .base64_encode( rawurlencode( $USER->username	) )
			."&m1=" .base64_encode( rawurlencode( $USER->id ) )        
			."&c1=" .base64_encode( rawurlencode( $COURSE->id ) )       
			."&cn=" .base64_encode( rawurlencode( $COURSE->fullname ) )       

			."&r1=" .rand(100000, 999999);
			   
			$contentA =  "<div style=\" border:thin #CCC solid; text-align:center;\"><a target=\"_blank\" href=".$srvpath."/>ListIt Admin</a></div>";


		if ($this->content !== NULL) 
		{
			return $this->content;    
		}   
		$this->content = new stdClass;    
		$this->content->text = $contentA;    
    

		$this->content->footer = '';    

		return $this->content;	
	    }
	}	
		
	function hide_header() 
	{	
		return false;	
	}
    
    	public function instance_allow_multiple() 
	{
      return false;
    }
    
    
    
    public function applicable_formats() 
    {
      return array
      (
          'site-index' => false,
          'course-view' => true, 
          'my-index' => false, 
          'mod' => false, 
       );
     }
    
}?>
