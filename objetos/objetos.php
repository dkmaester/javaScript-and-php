<?php

class pagina
{
	public $title = "<title>Objetos</title>";
	public $keywords = "<meta name='keywords' content='TLA Consulting, Objetos'>";
   	public $styles = "<style type='text/css'>
    h1 {color:white; font-size:24pt; text-align:center;
        font-family:arial,sans-serif}
    .menu {color:white; font-size:12pt; text-align:center;
           font-family:arial,sans-serif; font-weight:bold}
    td {background:black}
    p {color:black; font-size:12pt; text-align:justify;
       font-family:arial,sans-serif}
    p.foot {color:white; font-size:9pt; text-align:center;
            font-family:arial,sans-serif; font-weight:bold}
    a:link,a:visited,a:active {color:white}
  </style>";
  	public $header= "<!-- page header -->
  <table width='100%' cellpadding='12' cellspacing='0' border='0'>
  <tr bgcolor='black'>
    <td align='left'><img src='logo.gif' alt='TLA logo' height=70 width=70></td>
    <td>
        <h1>TLA Consulting</h1>
    </td>
    <td align='right'><img src='logo.gif alt='TLA logo' height=70 width=70></td>
  </tr>
  </table>";
  public $content = "<!-- menu -->
  <table width='100%' bgcolor='white' cellpadding='4' cellspacing='4'>
<tr >
    <td width='25%'>
      <img src='s-logo.gif' alt='' height=20 width=20> <span class='menu'>Home</span></td>
    <td width='25%'>
      <img src='s-logo.gif' alt='' height=20 width=20> <span class='menu'>Contact</span></td>
    <td width='25%'>
      <img src='s-logo.gif' alt='' height=20 width=20> <span class='menu'>Services</span></td>
    <td width='25%'>
      <img src='s-logo.gif' alt='' height=20 width=20> <span class='menu'>Site Map</span></td>
</tr>
  </table>
<!-- page content -->
  <p>Welcome to the home of TLA Consulting.
  Please take some time to get to know us.</p>
  <p>We specialize in serving your business needs
  and hope to hear from you soon.</p>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim</p>";
  public $footer = " <!-- page footer -->
  <table width='100%' bgcolor='black' cellpadding='12' border='0'>
  <tr>
    <td>
      <p class='foot'>&copy; TLA Consulting Pty Ltd.</p>
      <p class='foot'>Please see our <a href='legal.php'>legal information page</a></p>
    </td>
  </tr>
  </table>";

  public function Display()
  {
  	echo "<html><head>";
  	echo $this->title;
  	echo $this->keywords;
  	echo $this->styles;
  	echo "</head><body>";
  	echo $this->header;
  	echo $this->content;
  	echo $this->footer;
  	echo "</html>";
  }

  
/*   public function __get($name)
   {
      return $this->$name;
    }
    public function __set ($name, $value)
    {
      $this->$name = $value;  
    }*/
}
$paginas = new pagina;

  $paginas -> Display();
?>