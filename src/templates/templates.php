<?php
/* 
 * Class representing a template
 */
class Template
{
  private $name;
  
  private $path;
  
  function __construct($name, $path)
  {
    $this->name = $name;
    $this->path = $path;
  }
  
  public function toTag()
  {
?>
  <script type="text/ng-template" id="<?= $this->name ?>">
    <?php include $this->path; ?>
  </script>
    
<?php    
  }
  
  public static function getAll()
  {
    $templates = [
      new Template("home.html", "templates/home.html"),
      new Template("join.html", "templates/join.html"),
      new Template("list.html", "templates/list.html"),
      new Template("master.html", "templates/master.php"),
      new Template("member.html", "templates/member.php")
    ];
    return $templates;
  }
}