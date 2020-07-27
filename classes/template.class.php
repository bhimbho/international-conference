<?php 
 class template extends db{
    // use FileUploadTrait;

    public function update_template($paper_template,$file, $template_id = 1){ 
       
        $template = $this->execute("UPDATE `paper_template` SET `paper_template`=?,`file`=?,`created_at`=NOW(),`updated_at`=NOW() WHERE `id`=?", [$paper_template, $file, $template_id]);
       return $template;
    }

	public function view_template(){ 
        $welcome = $this->execute("SELECT * FROM `paper_template`", []);
       	return $this->f_one();
    }
    
    
}
